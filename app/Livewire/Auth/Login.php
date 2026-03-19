<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login()
    {
        $this->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            $this->dispatch('toast', type: 'success', message: 'Welcome back! Redirecting...');
            $this->redirectIntended('/dashboard', navigate: true);
            return;
        }

        $this->dispatch('toast', type: 'error', message: 'These credentials do not match our records.');
        $this->reset('password');
    }

    public function render()
    {
        return view('livewire.auth.login-card');
    }
}