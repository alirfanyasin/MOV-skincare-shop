<?php

namespace App\Livewire\Pages;

use App\Models\Cart as ModelsCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;

class Cart extends Component
{
    #[Title('Cart')]
    #[Layout('layouts.app')]

    public $totalDelivery = 20000;
    public $totalPrice;
    public $total;
    public $codeTrx;
    public $snapToken;

    public function mount()
    {
    }


    public function midtrans()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');

        $params = [
            'transaction_details' => [
                'order_id' => $this->codeTrx,
                'gross_amount' => session('total'),
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $this->snapToken = \Midtrans\Snap::getSnapToken($params);
    }

    public function calculateTotal()
    {
        $this->codeTrx = Str::random(10);

        $this->totalPrice = 0;
        $data = ModelsCart::all();
        $this->totalPrice = $data->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $this->total = $this->totalPrice + $this->totalDelivery;

        session(['total' => $this->total]);
    }

    public function delete($id)
    {
        $data = ModelsCart::find($id);
        $data->delete();
        $this->redirect('cart');
        $this->calculateTotal();
        $this->midtrans();
    }


    public function render()
    {

        session()->forget('cart_count');
        $this->calculateTotal();
        $this->midtrans();

        return view('livewire.pages.cart', [
            'products' => ModelsCart::orderBy('id', 'DESC')->get(),
            'totalPrice' => $this->totalPrice,
            'totalDelivery' => $this->totalDelivery,
            'total' => session('total'),
            'snap_token' => $this->snapToken,
        ]);
    }
}
