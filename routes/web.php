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
    return view('livewire.auth.login');
})->middleware('guest')->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email'    => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();

        // Redirect based on role
        if (Auth::user()->isSuperAdmin()) {
            return redirect()->intended('/admin/dashboard');
        }

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
        'role'     => 'user',
    ]);

    Auth::login($user);

    return redirect('/dashboard');
})->middleware('guest');

// ===== LOGOUT =====
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// ===== AUTH REQUIRED ROUTES =====
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('livewire.dashboard.index');
    })->name('dashboard');

    // Messages
    Route::get('/messages', function () {
        return view('livewire.messages.index');
    })->name('messages');

    // Contacts
    Route::get('/contacts', function () {
        return view('livewire.contacts.index');
    })->name('contacts');

    // Notifications
    Route::get('/notifications', function () {
        return view('livewire.notifications.index');
    })->name('notifications');

    // Settings
    Route::get('/settings', function () {
        return view('livewire.settings.index');
    })->name('settings');

    // ===== PROFILE ROUTES =====
    Route::get('/profile', function () {
        return view('livewire.profile.index');
    })->name('profile.index');

    Route::get('/profile/update', function () {
        return view('livewire.profile.update');
    })->name('profile.update');

    Route::patch('/profile/update', function (Request $request) {
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

});

// ===== SUPERADMIN ROUTES =====
Route::middleware(['auth', 'superadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('livewire.admin.dashboard');
    })->name('dashboard');
});