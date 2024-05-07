<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    #[Title('Register')]
    #[Layout('layouts.guest')]

    public function render()
    {
        return view('livewire.auth.register', [
            'title' => 'Register'
        ]);
    }
}
