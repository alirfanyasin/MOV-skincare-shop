<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf1 extends Component
{
    #[Title('Skin Test - Nama Kamu')]
    #[Layout('layouts.skintest')]

    public function render()
    {
        return view('livewire.pages.skintest.about-self1');
    }
}
