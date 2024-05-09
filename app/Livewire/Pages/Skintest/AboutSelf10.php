<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf10 extends Component
{
    #[Title('Skin Test - Apakah kamu pernah mengalami reaksi alergi terhadap bahan skincare di bawah ini?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self10');
    }
}
