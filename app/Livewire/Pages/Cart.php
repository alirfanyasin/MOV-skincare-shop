<?php

namespace App\Livewire\Pages;

use App\Models\Cart as ModelsCart;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Cart extends Component
{
    #[Title('Cart')]
    #[Layout('layouts.app')]

    public $totalDelivery = 20000;
    public $total;


    public function delete($id)
    {
        $data = ModelsCart::find($id);
        $data->delete();
    }


    public function render()
    {
        session()->forget('cart_count');

        $totalPrice = 0;
        $data = ModelsCart::all();
        $totalPrice = $data->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $this->total = $totalPrice + $this->totalDelivery;

        return view('livewire.pages.cart', [
            'products' => ModelsCart::orderBy('id', 'DESC')->get(),
            'totalPrice' => $totalPrice,
            'totalDelivery' => $this->totalDelivery,
            'total' => $this->total
        ]);
    }
}
