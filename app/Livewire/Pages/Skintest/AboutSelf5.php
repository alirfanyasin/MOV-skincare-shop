<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf5 extends Component
{
    #[Title('Skin Test - Seperti apa kondisi kulit yang kamu inginkan?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self5');
    }
}
