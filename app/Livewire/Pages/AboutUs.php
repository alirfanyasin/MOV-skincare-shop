<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutUs extends Component
{
    #[Title('Tentang Kami')]
    #[Layout('layouts.app')]

    public function render()
    {
        return view('livewire.pages.about-us');
    }
}
