<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Otp extends Component
{
    #[Title('Otp')]
    #[Layout('layouts.auth')]

    public function render()
    {
        return view('livewire.auth.otp');
    }
}
