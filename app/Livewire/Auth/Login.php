<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]
    #[Layout('layouts.guest')]

    public function render()
    {
        return view('livewire.auth.login');
    }
}
