<?php

namespace App\Livewire\Pages\Skintest;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutSelf13 extends Component
{
    #[Title('Skin Test - Dalam 3 bulan terakhir, apakah kamu menggunakan produk atau krim dari dokter?')]
    #[Layout('layouts.skintest')]
    public function render()
    {
        return view('livewire.pages.skintest.about-self13');
    }
}
