<?php

namespace App\Livewire\Pages;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProductSkinType extends Component
{
    #[Title('Products')]
    #[Layout('layouts.product-layout')]

    public $products;

    public function mount($type)
    {
        session()->forget('skinType');
        switch ($type) {
            case 'normal':
                $this->products = Product::all();
                break;
            case 'kering':
                // $ids = [2, 3, 4, 1, 7];
                $this->products = Product::all();
                break;
            case 'berminyak':
                $ids = [2, 3, 4, 1, 7];
                $this->products = Product::whereIn('id', $ids)->get();
                break;
            case 'berjerawat':
                $ids = [3, 4, 8, 7];
                $this->products = Product::whereIn('id', $ids)->get();
                break;
            case 'sensitif':
                $ids = [1, 4, 2, 3, 7, 8];
                $this->products = Product::whereIn('id', $ids)->get();
                break;

            default:
                # code...
                break;
        }
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
        return view('livewire.pages.product-skin-type', [
            'products' => $this->products
        ]);
    }
}
