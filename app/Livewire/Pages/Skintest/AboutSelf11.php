<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf11 extends Component
{
    #[Title('Skin Test - Dalam sebulan terakhir,seberapa sering kamu menggunakan retinol?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self11');
    }
}
