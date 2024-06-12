<?php

namespace App\Livewire\Sections;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductRecommendation extends Component
{
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
        return view('livewire.sections.product-recommendation', [
            'products' => Product::take(3)->orderBy('id', 'DESC')->get()
        ]);
    }
}
