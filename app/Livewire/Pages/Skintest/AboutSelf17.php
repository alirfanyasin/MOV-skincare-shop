<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf17 extends Component
{
    #[Title('Skin Test - Terakhir, apakah kamu punya diet khusus?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self17');
    }
}
