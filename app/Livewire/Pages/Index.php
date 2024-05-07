<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Landing Page')]
    #[Layout('layouts.guest')]

    public function render()
    {
        return view('livewire.pages.index');
    }
}