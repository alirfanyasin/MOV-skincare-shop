<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf16 extends Component
{
    #[Title('Skin Test - Biasanya kamu naik apa kalau berpergian?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self16');
    }
}
