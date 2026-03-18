<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Update extends Component
{
    // ===== Personal Info =====
    public string $name     = '';
    public string $email    = '';
    public string $username = '';
    public string $phone    = '';
    public string $location = '';
    public string $bio      = '';

    // ===== Password =====
    public string $current_password = '';
    public string $new_password     = '';
    public string $new_password_confirmation = '';

    public function mount()
    {
        $this->name     = auth()->user()->name;
        $this->email    = auth()->user()->email;
        $this->username = auth()->user()->username ?? '';
        $this->phone    = auth()->user()->phone    ?? '';
        $this->location = auth()->user()->location ?? '';
        $this->bio      = auth()->user()->bio      ?? '';
    }

    public function savePersonal()
    {
        $this->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'unique:users,email,' . auth()->id()],
            'username' => ['nullable', 'string', 'max:50'],
            'phone'    => ['nullable', 'string', 'max:20'],
            'location' => ['nullable', 'string', 'max:100'],
            'bio'      => ['nullable', 'string', 'max:160'],
        ]);

        auth()->user()->update([
            'name'     => $this->name,
            'email'    => $this->email,
            'username' => $this->username,
            'phone'    => $this->phone,
            'location' => $this->location,
            'bio'      => $this->bio,
        ]);

        $this->dispatch('toast', type: 'success', message: 'Profile updated successfully!');
    }

    public function savePassword()
    {
        $this->validate([
            'current_password' => ['required'],
            'new_password'     => ['required', 'confirmed', Password::defaults()],
        ]);

        if (!Hash::check($this->current_password, auth()->user()->password)) {
            $this->addError('current_password', 'Current password is incorrect.');
            return;
        }

        auth()->user()->update([
            'password' => Hash::make($this->new_password),
        ]);

        $this->current_password          = '';
        $this->new_password              = '';
        $this->new_password_confirmation = '';

        $this->dispatch('toast', type: 'success', message: 'Password updated successfully!');
    }

    public function render()
    {
        return view('livewire.profile.update');
    }
}