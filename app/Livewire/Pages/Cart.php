<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Cart extends Component
{
    #[Title('Cart')]
    #[Layout('layouts.app')]

    public function render()
    {
        session()->forget('cart_count');
        return view('livewire.pages.cart');
    }
}
