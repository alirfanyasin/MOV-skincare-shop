<?php

namespace App\Livewire\Sections;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductRecommendation extends Component
{

    public $tab = "normal";
    public $products = [];

    public function mount()
    {
        $this->tab = session('skin_type_tab', 'normal');
        $this->setProducts();
    }

    public function active_tab($skin_type)
    {
        $this->tab = $skin_type;
        session(['skin_type_tab' => $skin_type]);
        $this->setProducts();
    }

    private function setProducts()
    {
        switch ($this->tab) {
            case 'berminyak':
                $this->products = Product::take(3)->orderBy('id', 'DESC')->get();
                break;
            case 'normal':
                $this->products = Product::take(3)->orderBy('id', 'ASC')->get();
                break;
            case 'kering':
                $this->products = Product::take(3)->inRandomOrder()->get(); // or another appropriate order
                break;
            case 'kombinasi':
                $this->products = Product::take(3)->orderBy('id', 'ASC')->get(); // or another appropriate order
                break;
            case 'sensitif':
                $this->products = Product::take(3)->orderBy('id', 'DESC')->get(); // or another appropriate order
                break;
            default:
                $this->products = Product::take(3)->orderBy('id', 'ASC')->get();
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
        $this->redirect('cart');
    }

    public function render()
    {
        return view('livewire.sections.product-recommendation', [
            'products' => $this->products
        ]);
    }
}
