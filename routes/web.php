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
Route::get('/login', function () {
    if (Auth::check()) return redirect('/dashboard');
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
    if (Auth::check()) return redirect('/dashboard');
    return view('livewire.auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    if (Auth::check()) return redirect('/dashboard');

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

// ===== LOGOUT =====
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// ===== AUTH REQUIRED ROUTES =====
Route::get('/dashboard', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.dashboard.index');
})->name('dashboard');

Route::get('/messages', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.messages.index');
})->name('messages');

Route::get('/contacts', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.contacts.index');
})->name('contacts');

Route::get('/notifications', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.notifications.index');
})->name('notifications');

Route::get('/settings', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.settings.index');
})->name('settings');

// ===== PROFILE ROUTES =====
Route::get('/profile', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.profile.index');
})->name('profile.index');

Route::get('/profile/update', function () {
    if (!Auth::check()) return redirect('/login');
    return view('livewire.profile.update');
})->name('profile.update');

Route::patch('/profile/update', function (Request $request) {
    if (!Auth::check()) return redirect('/login');

    $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'email', 'unique:users,email,' . Auth::id()],
        'username' => ['nullable', 'string', 'max:50'],
        'phone'    => ['nullable', 'string', 'max:20'],
        'location' => ['nullable', 'string', 'max:100'],
        'bio'      => ['nullable', 'string', 'max:160'],
    ]);

    Auth::user()->update(
        $request->only('name', 'email', 'username', 'phone', 'location', 'bio')
    );

    return back()->with('success', 'Profile updated successfully!');
})->name('profile.save');

Route::patch('/profile/password', function (Request $request) {
    if (!Auth::check()) return redirect('/login');

    $request->validate([
        'current_password' => ['required'],
        'new_password'     => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    if (!Hash::check($request->current_password, Auth::user()->password)) {
        return back()->withErrors(['current_password' => 'Current password is incorrect.']);
    }

    Auth::user()->update([
        'password' => Hash::make($request->new_password),
    ]);

    return back()->with('success', 'Password updated successfully!');
})->name('profile.password');