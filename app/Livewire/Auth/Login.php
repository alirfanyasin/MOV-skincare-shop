<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]
    #[Layout('layouts.auth')]

    public $email;
    public $password;

    public function messages()
    {
        return [
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib di isi',
        ];
    }

    public function login()
    {
        $credentials = $this->validate(
            [
                'email' => 'required|email',
                'password' => 'required|',
            ]
        );
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            $this->redirect('/');
        } else {
            session()->flash('failed', 'Email atau Password salah!');
            $this->redirect('login');
        }
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
