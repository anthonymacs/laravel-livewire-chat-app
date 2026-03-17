@extends('layouts.app')

@section('title', 'Profile')
@section('page-title', 'Profile')
@section('page-subtitle', 'Manage your account information')

@section('content')

    {{-- Profile Header --}}
    <div class="bg-white/70 backdrop-blur-md rounded-3xl border border-white shadow-sm overflow-hidden mb-6">

        {{-- Cover Banner --}}
        <div class="h-48 w-full relative" style="background: linear-gradient(135deg, #3730a3 0%, #4f46e5 50%, #7c3aed 100%);">
            {{-- Decorative circles --}}
            <div class="absolute top-4 right-4 w-32 h-32 bg-white/10 rounded-full"></div>
            <div class="absolute top-12 right-20 w-16 h-16 bg-white/10 rounded-full"></div>
            <div class="absolute -bottom-6 left-1/2 w-24 h-24 bg-white/5 rounded-full"></div>

            {{-- Edit Cover Button --}}
            <button class="absolute top-4 right-4 flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white text-xs font-semibold px-3 py-1.5 rounded-xl backdrop-blur-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Edit Cover
            </button>
        </div>

        {{-- Profile Info Row --}}
        <div class="px-8 pb-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 -mt-12">

                {{-- Avatar --}}
                <div class="flex items-end gap-5">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=4f46e5&color=fff&size=200"
                             class="w-24 h-24 rounded-2xl border-4 border-white shadow-lg" alt="Avatar">
                        <button class="absolute -bottom-2 -right-2 w-7 h-7 bg-indigo-600 rounded-xl flex items-center justify-center border-2 border-white hover:bg-indigo-700 transition shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="mb-1">
                        <div class="flex items-center gap-2">
                            <h2 class="text-xl font-extrabold text-gray-900">John Doe</h2>
                            <span class="flex items-center gap-1 text-xs font-semibold text-green-600 bg-green-50 px-2.5 py-1 rounded-full border border-green-100">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                                Online
                            </span>
                        </div>
                        <p class="text-sm text-gray-400 mt-0.5">john@example.com</p>
                        <p class="text-xs text-gray-400 mt-1 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            San Francisco, CA
                        </p>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex items-center gap-3 mb-1">
                    <button class="flex items-center gap-2 text-xs font-semibold text-gray-600 bg-gray-100 hover:bg-gray-200 px-4 py-2.5 rounded-xl transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        Share
                    </button>

                    {{-- Edit Profile → navigates to update page --}}
                    <a href="{{ route('profile.update') }}"
                       class="flex items-center gap-2 text-xs font-semibold text-white px-4 py-2.5 rounded-xl transition shadow-md hover:shadow-lg hover:opacity-90"
                       style="background: linear-gradient(135deg, #4f46e5, #7c3aed);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                        </svg>
                        Edit Profile
                    </a>
                </div>
            </div>

            {{-- Stats Row --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8 pt-6 border-t border-gray-100">
                <div class="text-center p-4 bg-indigo-50/50 rounded-2xl">
                    <p class="text-2xl font-extrabold text-indigo-600">1,284</p>
                    <p class="text-xs text-gray-500 mt-1 font-medium">Messages Sent</p>
                </div>
                <div class="text-center p-4 bg-purple-50/50 rounded-2xl">
                    <p class="text-2xl font-extrabold text-purple-600">48</p>
                    <p class="text-xs text-gray-500 mt-1 font-medium">Contacts</p>
                </div>
                <div class="text-center p-4 bg-green-50/50 rounded-2xl">
                    <p class="text-2xl font-extrabold text-green-600">12</p>
                    <p class="text-xs text-gray-500 mt-1 font-medium">Groups</p>
                </div>
                <div class="text-center p-4 bg-orange-50/50 rounded-2xl">
                    <p class="text-2xl font-extrabold text-orange-500">98%</p>
                    <p class="text-xs text-gray-500 mt-1 font-medium">Response Rate</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content Grid --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Left Column --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- Personal Information --}}
            <div class="bg-white/70 backdrop-blur-md rounded-3xl border border-white shadow-sm p-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-base font-bold text-gray-900">Personal Information</h3>
                        <p class="text-xs text-gray-400 mt-0.5">Update your personal details</p>
                    </div>

                    {{-- Edit → navigates to update page --}}
                    <a href="{{ route('profile.update') }}"
                       class="flex items-center gap-1.5 text-xs text-indigo-600 font-semibold bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-xl transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                        </svg>
                        Edit
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-2">Full Name</label>
                        <div class="flex items-center gap-3 bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="text-sm text-gray-700 font-medium">John Doe</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-2">Username</label>
                        <div class="flex items-center gap-3 bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-sm text-gray-700 font-medium">@johndoe</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-2">Email Address</label>
                        <div class="flex items-center gap-3 bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-700 font-medium">john@example.com</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-2">Phone Number</label>
                        <div class="flex items-center gap-3 bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-sm text-gray-700 font-medium">+1 (555) 000-0000</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-2">Location</label>
                        <div class="flex items-center gap-3 bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-sm text-gray-700 font-medium">San Francisco, CA</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-2">Member Since</label>
                        <div class="flex items-center gap-3 bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-indigo-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-700 font-medium">January 2024</span>
                        </div>
                    </div>

                </div>

                {{-- Bio --}}
                <div class="mt-4">
                    <label class="block text-xs font-semibold text-gray-500 mb-2">Bio</label>
                    <div class="bg-gray-50 hover:bg-gray-100 rounded-xl px-4 py-3.5 transition cursor-default">
                        <p class="text-sm text-gray-700 leading-relaxed">Hey there! I'm John, a software developer who loves building products and connecting with people. Always up for a good conversation! 👋</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection