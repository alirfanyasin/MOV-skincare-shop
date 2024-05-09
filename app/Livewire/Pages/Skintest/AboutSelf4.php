<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf4 extends Component
{
    #[Title('Skin Test - Seperti apa kondisi kulitmu akhir-akhir ini?')]
    #[Layout('layouts.skintest')]

    public function render()
    {
        return view('livewire.pages.skintest.about-self4');
    }
}
