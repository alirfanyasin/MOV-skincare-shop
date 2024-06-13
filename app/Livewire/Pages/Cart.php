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

    protected $listeners = ['paymentSuccess', 'paymentCancel'];

    public $totalDelivery = 20000;
    public $totalPrice;
    public $total;
    public $codeTrx;
    public $snapToken;

    public function mount()
    {
    }

    public function paymentSuccess()
    {
    }



    public function calculateTotal()
    {
        $this->codeTrx = Str::random(10);

        $this->totalPrice = 0;
        $data = ModelsCart::where('user_id', Auth::user()->id)->get();
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
        $this->calculateTotal();
    }

    // public function delete_cart($user_id)
    // {
    //     $data = ModelsCart::where('user_id', $user_id)->get();
    //     foreach ($data as $item) {
    //         $item->delete();
    //     }
    // }

    public function render()
    {
        session()->forget('cart_count');
        $this->calculateTotal();

        return view('livewire.pages.cart', [
            'products' => ModelsCart::orderBy('id', 'DESC')->where('user_id', Auth::user()->id)->get(),
            'totalPrice' => $this->totalPrice,
            'totalDelivery' => $this->totalDelivery,
            'total' => session('total'),
            'snap_token' => $this->snapToken,
        ]);
    }
}
