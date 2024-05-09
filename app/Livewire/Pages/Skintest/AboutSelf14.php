<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf14 extends Component
{
    #[Title('Skin Test - Dalam sebulan terakhir, seberapa lama kira-kira kamu berada di luar dan terpapar sinar matahari setiap harinya')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self14');
    }
}
