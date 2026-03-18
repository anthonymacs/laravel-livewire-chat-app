<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

Route::get('/', function () {
    return view('livewire.home.homepage');
})->name('home');

// ===== GUEST ROUTES =====
Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('livewire.auth.login');
    })->name('login');

    Route::post('/login', function (Request $request) {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    });

    Route::get('/register', function () {
        return view('livewire.auth.register');
    })->name('register');

    Route::post('/register', function (Request $request) {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms'    => ['accepted'],
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'user',
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    });

});

// ===== LOGOUT =====
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// ===== AUTH REQUIRED ROUTES =====
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('livewire.dashboard.index');
    })->name('dashboard');

    Route::get('/messages', function () {
        return view('livewire.messages.index');
    })->name('messages');

    Route::get('/contacts', function () {
        return view('livewire.contacts.index');
    })->name('contacts');

    Route::get('/notifications', function () {
        return view('livewire.notifications.index');
    })->name('notifications');

    Route::get('/settings', function () {
        return view('livewire.settings.index');
    })->name('settings');

    // ===== PROFILE ROUTES =====
    Route::get('/profile', \App\Livewire\Profile\Index::class)->name('profile.index');
    Route::get('/profile/update', \App\Livewire\Profile\Update::class)->name('profile.update');

});