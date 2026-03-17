<header class="sticky top-0 z-30 px-6 py-4 flex items-center justify-between
               bg-white/70 backdrop-blur-md border-b border-white/80 shadow-sm">

    <div class="flex items-center gap-4">
        <button onclick="toggleSidebar()" class="lg:hidden text-gray-500 hover:text-indigo-600 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <div>
            <h1 class="text-base font-bold text-gray-900">@yield('page-title', 'Dashboard')</h1>
            <p class="text-xs text-gray-400">@yield('page-subtitle', 'Welcome back!')</p>
        </div>
    </div>

    <div class="flex items-center gap-3">
        {{-- Search --}}
        <div class="hidden md:flex items-center gap-2 bg-white/80 border border-gray-200 rounded-xl px-3 py-2 text-sm text-gray-400 w-48 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <span>Search...</span>
        </div>

        {{-- Notification Bell --}}
        <button class="relative p-2 rounded-xl hover:bg-white transition text-gray-500 shadow-sm border border-transparent hover:border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>

        {{-- Avatar --}}
        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'User') }}&background=4f46e5&color=fff"
             class="w-9 h-9 rounded-full cursor-pointer border-2 border-indigo-200 shadow-sm" alt="Avatar">
    </div>
</header>