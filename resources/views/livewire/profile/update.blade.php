@extends('layouts.app')

@section('title', 'Update Profile')
@section('page-title', 'Update Profile')
@section('page-subtitle', 'Edit your personal information')

@section('content')

    <div class="max-w-4xl mx-auto space-y-6">

        {{-- Page Header Card --}}
        <div class="bg-white/70 backdrop-blur-md rounded-3xl border border-white shadow-sm overflow-hidden">
            <div class="h-28 w-full relative" style="background: linear-gradient(135deg, #3730a3 0%, #4f46e5 50%, #7c3aed 100%);">
                <div class="absolute top-4 right-8 w-24 h-24 bg-white/10 rounded-full"></div>
                <div class="absolute top-8 right-24 w-12 h-12 bg-white/10 rounded-full"></div>
            </div>
            <div class="px-8 pb-6">
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 -mt-8">
                    <div class="flex items-end gap-4">
                        <div class="relative shrink-0">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=4f46e5&color=fff&size=200"
                                 class="w-16 h-16 rounded-2xl border-4 border-white shadow-lg" alt="Avatar">
                        </div>
                        <div class="mb-1">
                            <h2 class="text-lg font-extrabold text-gray-900">{{ auth()->user()->name }}</h2>
                            <p class="text-xs text-gray-400">{{ auth()->user()->email }}</p>
                            <span class="inline-block mt-1 text-xs font-semibold px-2 py-0.5 rounded-full
                                {{ auth()->user()->isSuperAdmin() ? 'bg-purple-100 text-purple-700' : 'bg-indigo-100 text-indigo-700' }}">
                                {{ ucfirst(auth()->user()->role) }}
                            </span>
                        </div>
                    </div>
                    <div class="mb-1">
                        <a href="{{ route('profile.index') }}"
                           class="flex items-center gap-2 text-xs font-semibold text-gray-600 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-xl transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Back to Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabs --}}
        <div class="flex gap-2 bg-white/70 backdrop-blur-md rounded-2xl border border-white shadow-sm p-2">
            <button onclick="showTab('personal')" id="tab-personal"
                    class="flex-1 text-xs font-semibold py-2.5 px-4 rounded-xl transition tab-btn bg-indigo-600 text-white shadow-sm">
                Personal Info
            </button>
            <button onclick="showTab('password')" id="tab-password"
                    class="flex-1 text-xs font-semibold py-2.5 px-4 rounded-xl transition tab-btn text-gray-500 hover:bg-gray-100">
                Change Password
            </button>
            <button onclick="showTab('photo')" id="tab-photo"
                    class="flex-1 text-xs font-semibold py-2.5 px-4 rounded-xl transition tab-btn text-gray-500 hover:bg-gray-100">
                Profile Photo
            </button>
        </div>

        {{-- ===== TAB: Personal Info ===== --}}
        <div id="tab-content-personal">
            <div class="bg-white/70 backdrop-blur-md rounded-3xl border border-white shadow-sm p-8">
                <div class="mb-6">
                    <h3 class="text-base font-bold text-gray-900">Personal Information</h3>
                    <p class="text-xs text-gray-400 mt-0.5">Update your name, email, phone and more</p>
                </div>

                {{-- wire:submit replaces action= and method= --}}
                <form wire:submit="savePersonal" class="space-y-5">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Full Name</label>
                            <div class="relative">
                                <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </span>
                                <input type="text" wire:model="name"
                                       placeholder="Your full name"
                                       class="w-full pl-10 pr-4 py-3 rounded-xl border @error('name') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                            </div>
                            @error('name')
                                <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Username</label>
                            <div class="relative">
                                <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400 text-sm font-bold">@</span>
                                <input type="text" wire:model="username"
                                       placeholder="username"
                                       class="w-full pl-8 pr-4 py-3 rounded-xl border @error('username') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                            </div>
                            @error('username')
                                <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Email Address</label>
                        <div class="relative">
                            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <input type="email" wire:model="email"
                                   placeholder="you@example.com"
                                   class="w-full pl-10 pr-4 py-3 rounded-xl border @error('email') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                        </div>
                        @error('email')
                            <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Phone Number</label>
                            <div class="relative">
                                <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </span>
                                <input type="text" wire:model="phone"
                                       placeholder="+1 (555) 000-0000"
                                       class="w-full pl-10 pr-4 py-3 rounded-xl border @error('phone') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                            </div>
                            @error('phone')
                                <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-600 mb-2">Location</label>
                            <div class="relative">
                                <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </span>
                                <input type="text" wire:model="location"
                                       placeholder="Your location"
                                       class="w-full pl-10 pr-4 py-3 rounded-xl border @error('location') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                            </div>
                            @error('location')
                                <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Bio</label>
                        <textarea wire:model="bio" rows="4" placeholder="Write a short bio..."
                                  class="w-full px-4 py-3 rounded-xl border @error('bio') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition resize-none"></textarea>
                        <p class="text-xs text-gray-400 mt-1.5">Max 160 characters</p>
                        @error('bio')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-2">
                        <a href="{{ route('profile.index') }}"
                           class="text-sm font-semibold text-gray-500 bg-gray-100 hover:bg-gray-200 px-5 py-2.5 rounded-xl transition">
                            Cancel
                        </a>
                        <button type="submit"
                                class="flex items-center gap-2 text-sm font-semibold text-white px-6 py-2.5 rounded-xl transition shadow-md hover:shadow-lg hover:opacity-90"
                                style="background: linear-gradient(135deg, #4f46e5, #7c3aed);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ===== TAB: Change Password ===== --}}
        <div id="tab-content-password" class="hidden">
            <div class="bg-white/70 backdrop-blur-md rounded-3xl border border-white shadow-sm p-8">
                <div class="mb-6">
                    <h3 class="text-base font-bold text-gray-900">Change Password</h3>
                    <p class="text-xs text-gray-400 mt-0.5">Choose a strong new password</p>
                </div>

                {{-- wire:submit replaces action= and method= --}}
                <form wire:submit="savePassword" class="space-y-5 max-w-lg">

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Current Password</label>
                        <div class="relative">
                            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </span>
                            <input id="cur-pwd" type="password" wire:model="current_password"
                                   placeholder="Enter current password"
                                   class="w-full pl-10 pr-11 py-3 rounded-xl border @error('current_password') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                            <button type="button" onclick="toggleField('cur-pwd')"
                                    class="absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        @error('current_password')
                            <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">New Password</label>
                        <div class="relative">
                            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </span>
                            <input id="new-pwd" type="password" wire:model="new_password"
                                   placeholder="Min. 8 characters"
                                   class="w-full pl-10 pr-11 py-3 rounded-xl border @error('new_password') border-red-400 bg-red-50 @else border-gray-200 @enderror text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"
                                   oninput="checkStrength(this.value)"/>
                            <button type="button" onclick="toggleField('new-pwd')"
                                    class="absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="mt-2.5 flex gap-1.5">
                            <div id="s1" class="h-1.5 flex-1 rounded-full bg-gray-200 transition-all"></div>
                            <div id="s2" class="h-1.5 flex-1 rounded-full bg-gray-200 transition-all"></div>
                            <div id="s3" class="h-1.5 flex-1 rounded-full bg-gray-200 transition-all"></div>
                            <div id="s4" class="h-1.5 flex-1 rounded-full bg-gray-200 transition-all"></div>
                        </div>
                        <p id="strength-text" class="text-xs text-gray-400 mt-1">Enter a password</p>
                        @error('new_password')
                            <p class="text-xs text-red-500 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Confirm New Password</label>
                        <div class="relative">
                            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-indigo-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </span>
                            <input id="con-pwd" type="password" wire:model="new_password_confirmation"
                                   placeholder="Repeat new password"
                                   class="w-full pl-10 pr-11 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition"/>
                            <button type="button" onclick="toggleField('con-pwd')"
                                    class="absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-4 space-y-2">
                        <p class="text-xs font-semibold text-gray-600 mb-2">Password Requirements:</p>
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span class="w-4 h-4 rounded-full bg-green-100 flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            At least 8 characters
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span class="w-4 h-4 rounded-full bg-gray-200 flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            One uppercase letter
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-500">
                            <span class="w-4 h-4 rounded-full bg-gray-200 flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            One number or special character
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-2">
                        <a href="{{ route('profile.index') }}"
                           class="text-sm font-semibold text-gray-500 bg-gray-100 hover:bg-gray-200 px-5 py-2.5 rounded-xl transition">
                            Cancel
                        </a>
                        <button type="submit"
                                class="flex items-center gap-2 text-sm font-semibold text-white px-6 py-2.5 rounded-xl transition shadow-md hover:shadow-lg hover:opacity-90"
                                style="background: linear-gradient(135deg, #4f46e5, #7c3aed);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Update Password
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- ===== TAB: Profile Photo ===== --}}
        <div id="tab-content-photo" class="hidden">
            <div class="bg-white/70 backdrop-blur-md rounded-3xl border border-white shadow-sm p-8">
                <div class="mb-6">
                    <h3 class="text-base font-bold text-gray-900">Profile Photo</h3>
                    <p class="text-xs text-gray-400 mt-0.5">Upload a new profile picture</p>
                </div>
                <div class="flex items-center gap-6 p-6 bg-gray-50 rounded-2xl">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=4f46e5&color=fff&size=200"
                         class="w-24 h-24 rounded-2xl border-2 border-indigo-100 shadow-md" alt="Avatar">
                    <div>
                        <p class="text-sm font-bold text-gray-800">Coming Soon</p>
                        <p class="text-xs text-gray-400 mt-1">Photo upload will be available shortly.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function showTab(tab) {
            ['personal', 'password', 'photo'].forEach(t => {
                document.getElementById('tab-content-' + t).classList.add('hidden');
                const btn = document.getElementById('tab-' + t);
                btn.classList.remove('bg-indigo-600', 'text-white', 'shadow-sm');
                btn.classList.add('text-gray-500', 'hover:bg-gray-100');
            });
            document.getElementById('tab-content-' + tab).classList.remove('hidden');
            const active = document.getElementById('tab-' + tab);
            active.classList.add('bg-indigo-600', 'text-white', 'shadow-sm');
            active.classList.remove('text-gray-500', 'hover:bg-gray-100');
        }

        function toggleField(id) {
            const input = document.getElementById(id);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        function checkStrength(val) {
            let score = 0;
            if (val.length >= 8) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            const colors = ['bg-red-400', 'bg-orange-400', 'bg-yellow-400', 'bg-green-500'];
            const labels = ['Weak', 'Fair', 'Good', 'Strong'];
            const textColors = ['text-red-500', 'text-orange-500', 'text-yellow-500', 'text-green-500'];

            ['s1','s2','s3','s4'].forEach((b, i) => {
                document.getElementById(b).className = 'h-1.5 flex-1 rounded-full transition-all ' +
                    (i < score ? colors[score - 1] : 'bg-gray-200');
            });

            const text = document.getElementById('strength-text');
            text.textContent = score > 0 ? labels[score - 1] : 'Enter a password';
            text.className = 'text-xs mt-1 ' + (score > 0 ? textColors[score - 1] : 'text-gray-400');
        }
    </script>

@endsection