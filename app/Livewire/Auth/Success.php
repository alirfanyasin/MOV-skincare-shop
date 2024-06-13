<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Success extends Component
{
    #[Title('Success Alert')]
    #[Layout('layouts.auth')]

    public function render()
    {
        return view('livewire.auth.success');
    }
}
