<?php

namespace App\Livewire\Pages;

use Closure;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Products extends Component
{
    #[Title('Products')]
    #[Layout('layouts.product-layout')]

    public function render(): View|Closure|string
    {
        return view('livewire.pages.products');
    }
}
