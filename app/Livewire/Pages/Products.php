<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Products extends Component
{
    #[Title('Products')]
    #[Layout('layouts.product-layout')]

    public function render()
    {
        return view('livewire.pages.products', [
            'products' => Product::orderBy('id', 'DESC')->get()
        ]);
    }
}
