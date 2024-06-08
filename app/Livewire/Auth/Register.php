<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    #[Title('Register')]
    #[Layout('layouts.auth')]

    public $name;
    public $email;
    public $phone_number;
    public $password;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'phone_number' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Lengkap wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.unique' => 'Email sudah digunakan',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 6 karakter',
            'phone_number.required' => 'No Telepon wajib di isi'
        ];
    }

    public function register()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'phone_number' => $this->phone_number
        ]);

        $this->redirect('login');
    }

    public function render()
    {
        return view('livewire.auth.register', [
            'title' => 'Register'
        ]);
    }
}
