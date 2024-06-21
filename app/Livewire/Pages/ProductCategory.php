<?php

namespace App\Livewire\Pages;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductCategory extends Component
{
    #[Title('Products')]
    #[Layout('layouts.product-layout')]

    public $products;

    public function mount($category)
    {
        session()->forget('skinType');
        $this->products = Product::where('category', $category)->get();
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
        $this->redirect('/cart');
    }

    public function render()
    {
        return view('livewire.pages.product-category', [
            'products' => $this->products
        ]);
    }
}
