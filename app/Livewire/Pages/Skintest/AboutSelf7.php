<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf7 extends Component
{
    #[Title('Skin Test - Tipe jerawat apa yang biasanya muncul pada kulitmu?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self7');
    }
}
