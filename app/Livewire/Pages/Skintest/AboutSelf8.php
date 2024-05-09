<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf8 extends Component
{
    #[Title('Skin Test - Jerawat kamu sering muncul di bagian wajah mana?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self8');
    }
}
