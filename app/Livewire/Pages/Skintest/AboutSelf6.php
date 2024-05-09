<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf6 extends Component
{
    #[Title('Skin Test - Dalam sebulan, seberapa sering kamu 
    mengalami masalah jerawat?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self6');
    }
}
