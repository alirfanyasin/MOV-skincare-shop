<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class SkinNews extends Component
{
    #[Title('Berita Skincare')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.skin-news');
    }
}
