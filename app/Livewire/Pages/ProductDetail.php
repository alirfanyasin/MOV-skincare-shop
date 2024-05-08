<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductDetail extends Component
{
    #[Title('Detail Product')]
    #[Layout('layouts.product-layout')]

    public function render()
    {
        return view('livewire.pages.product-detail');
    }
}
