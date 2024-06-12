<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSkin extends Component
{
    #[Title('Skin Test - Tentang Kulit')]
    #[Layout('layouts.skintest')]

    public function render()
    {
        return view('livewire.pages.skintest.about-skin');
    }
}
