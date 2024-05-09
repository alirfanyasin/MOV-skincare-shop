<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf2 extends Component
{
    #[Title('Skin Test - Umur Kamu')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self2');
    }
}
