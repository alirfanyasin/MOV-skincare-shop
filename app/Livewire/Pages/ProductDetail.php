<?php

namespace App\Livewire\Pages;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductDetail extends Component
{
    #[Title('Detail Product')]
    #[Layout('layouts.product-layout')]

    public $product;

    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->first();
    }

    public function add_to_cart($product_id, $price)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product_id,
            'price' => $price,
        ]);
        $cartCount = session('cart_count', 0) + 1;
        session(['cart_count' => $cartCount]);
        $this->dispatch('cart_count', $cartCount);
    }

    public function buy_now($product_id, $price)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product_id,
            'price' => $price,
        ]);
        $this->redirect('cart');
    }

    public function render()
    {
        return view('livewire.pages.product-detail', [
            'product' => $this->product
        ]);
    }
}
