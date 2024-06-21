<?php

namespace App\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class Sidebar extends Component
{
    // public $menu;

    // public function mount()
    // {
    // $this->menu = session('skin_type_menu');
    // }

    // public function active_menu($skin_type)
    // {
    //     $this->menu = $skin_type;
    //     session(['skin_type_menu' => $skin_type]);
    //     $this->dispatch('active-menu', $skin_type);
    // }


    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
