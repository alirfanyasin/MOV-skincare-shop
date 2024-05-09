<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf12 extends Component
{
    #[Title('Skin Test - Dalam sebulan terakhir, seberapa sering kamu menggunakan AHA/BHA/PHA')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self12');
    }
}
