<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function entrar()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credenciais = [
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ];

        if (Auth::attempt($credenciais)) {
            session()->regenerate();

            return redirect()->route('material.index');
        }

        session()->flash(
            'error',
            'E-mail ou senha inválidos.'
        );
    }

    public function render()
    {
        return view('livewire.login.login');
    }
}
