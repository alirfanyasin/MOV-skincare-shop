<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class SkinType extends Component
{
    #[Title('Tipe Kulit')]
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.skin-type');
    }
}
