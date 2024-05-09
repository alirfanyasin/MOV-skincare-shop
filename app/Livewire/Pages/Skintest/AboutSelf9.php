<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf9 extends Component
{
    #[Title('Skin Test - Dalam 4 minggu terakhir, apakah kamu mengalami kondisi kulit yang ada di bawah ini?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self9');
    }
}
