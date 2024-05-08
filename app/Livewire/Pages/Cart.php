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
        return view('livewire.pages.cart');
    }
}