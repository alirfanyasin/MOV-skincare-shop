<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class LifeStyle extends Component
{
    #[Title('Skin Test - Gaya Hidup')]
    #[Layout('layouts.skintest')]

    public function render()
    {
        return view('livewire.pages.skintest.life-style');
    }
}
