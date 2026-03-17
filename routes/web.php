<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

Route::get('/', function () {
    return view('livewire.home.homepage');
})->name('home');

Route::get('/login', function () {
    return view('livewire.auth.login');
})->middleware('guest')->name('login');

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
})->middleware('guest');

Route::get('/register', function () {
    return view('livewire.auth.register');
})->middleware('guest')->name('register');

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
    ]);

    Auth::login($user);

    return redirect('/dashboard');
})->middleware('guest');

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// ===== STATIC - NO AUTH REQUIRED =====
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

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/profile', function () {
    return view('livewire.profile.index');
})->name('profile.edit');
Route::get('/profile/update', function () {
    return view('livewire.profile.update');
})->name('profile.update');