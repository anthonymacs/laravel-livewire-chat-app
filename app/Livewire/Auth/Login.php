<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.auth')]
#[Title('ChatApp — Sign In')]
class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login()
    {
        $this->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt([
            'email'    => $this->email,
            'password' => $this->password,
        ], $this->remember)) {
            session()->regenerate();
            $this->dispatch('toast', type: 'success', message: 'Welcome back! Redirecting...');
            $this->redirect('/dashboard');
            return;
        }

        $this->addError('email', 'These credentials do not match our records.');
        $this->dispatch('toast', type: 'error', message: 'These credentials do not match our records.');
        $this->reset('password');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}