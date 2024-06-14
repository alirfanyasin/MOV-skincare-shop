<?php

namespace App\Livewire\Pages;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Products extends Component
{
    #[Title('Products')]
    #[Layout('layouts.product-layout')]

    public $products = [];

    public function mount()
    {
        session()->forget('skinType');
        $this->setProducts(session('skin_type_menu', 'all'));
    }

    protected $listeners = ['active-menu' => 'setProducts'];

    public function setProducts($skin_type)
    {
        switch ($skin_type) {
            case 'berminyak':
                $this->products = Product::take(3)->orderBy('id', 'DESC')->get();
                break;
            case 'normal':
                $this->products = Product::take(4)->orderBy('id', 'ASC')->get();
                break;
            case 'kering':
                $this->products = Product::take(6)->inRandomOrder()->get();
                break;
            case 'kombinasi':
                $this->products = Product::take(2)->orderBy('id', 'ASC')->get();
                break;
            case 'sensitif':
                $this->products = Product::take(5)->orderBy('id', 'DESC')->get();
                break;
            case 'berjerawat':
                $this->products = Product::take(1)->orderBy('id', 'ASC')->get();
                break;
            default:
                // Load all products
                $this->products = Product::orderBy('id', 'ASC')->get();
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
        return view('livewire.pages.products', [
            'products' => $this->products
        ]);
    }
}
