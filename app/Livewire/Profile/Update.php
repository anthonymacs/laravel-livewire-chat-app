<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

#[Layout('layouts.app')]
#[Title('Update Profile')]
class Update extends Component
{
    public string $name                     = '';
    public string $username                 = '';
    public string $email                    = '';
    public string $phone                    = '';
    public string $location                 = '';
    public string $bio                      = '';

    public string $current_password         = '';
    public string $new_password             = '';
    public string $new_password_confirmation = '';

    public function mount(): void
    {
        $user = Auth::user();

        $this->name     = $user->name     ?? '';
        $this->username = $user->username ?? '';
        $this->email    = $user->email    ?? '';
        $this->phone    = $user->phone    ?? '';
        $this->location = $user->location ?? '';
        $this->bio      = $user->bio      ?? '';
    }

    public function savePersonal(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'max:50', 'alpha_dash',
                           Rule::unique('users', 'username')->ignore($user->id)],
            'email'    => ['required', 'email', 'max:255',
                           Rule::unique('users', 'email')->ignore($user->id)],
            'phone'    => ['nullable', 'string', 'max:30'],
            'location' => ['nullable', 'string', 'max:100'],
            'bio'      => ['nullable', 'string', 'max:160'],
        ]);

        $user->update($validated);

        $this->dispatch('toast', type: 'success', message: 'Profile updated successfully.');
    }

    public function savePassword(): void
    {
        $this->validate([
            'current_password' => ['required'],
            'new_password'     => ['required', 'confirmed', Password::min(8)
                                        ->mixedCase()
                                        ->numbers()],
        ]);

        $user = Auth::user();

        if (! Hash::check($this->current_password, $user->password)) {
            $this->addError('current_password', 'The current password is incorrect.');
            return;
        }

        $user->update([
            'password' => Hash::make($this->new_password),
        ]);

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);

        $this->dispatch('toast', type: 'success', message: 'Password changed successfully.');
    }

    public function render()
    {
        return view('livewire.profile.update');
    }
}