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

Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
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