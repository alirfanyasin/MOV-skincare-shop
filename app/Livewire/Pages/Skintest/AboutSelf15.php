<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf15 extends Component
{
    #[Title('Skin Test - Akhir-akhir ini, kamu biasa tidur di jam berapa?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self15');
    }
}
