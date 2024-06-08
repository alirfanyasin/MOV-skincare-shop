<?php

namespace App\Livewire\Pages;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Products extends Component
{
    #[Title('Products')]
    #[Layout('layouts.product-layout')]


    public function add_to_cart($product_id, $price)
    {
        Cart::create([
            'product_id' => $product_id,
            'price' => $price,
        ]);
        $cartCount = session('cart_count', 0) + 1;
        session(['cart_count' => $cartCount]);
        $this->dispatch('cart_count', $cartCount);
    }


    public function render()
    {
        return view('livewire.pages.products', [
            'products' => Product::orderBy('id', 'DESC')->get()
        ]);
    }
}
