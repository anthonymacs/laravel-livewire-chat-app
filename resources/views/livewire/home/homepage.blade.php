<div class="min-h-screen bg-slate-50">

    {{-- Hero Section --}}
    <div class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
            <div class="text-center">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-university-red/10 text-university-red text-xs font-semibold rounded-full mb-6 uppercase tracking-wider">
                    Document Repository System
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight mb-6">
                    Your Academic <br>
                    <span class="text-university-red">Document Hub</span>
                </h1>
                <p class="max-w-2xl mx-auto text-lg text-slate-500 mb-10">
                    Access, manage, and share academic documents in one place. Built for students and faculty to stay organized and informed.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a wire:navigate href="{{ route('home.documents') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-university-red text-white font-semibold rounded-xl hover:bg-university-red/90 transition-colors shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Browse Documents
                    </a>
                    @guest
                    <a wire:navigate href="{{ route('login') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-white text-slate-700 font-semibold rounded-xl border border-slate-200 hover:border-university-red hover:text-university-red transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Login to Your Account
                    </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    {{-- Features Section --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-3">Everything You Need</h2>
            <p class="text-slate-500 max-w-xl mx-auto">A streamlined platform designed to make document management simple for everyone.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Feature 1 --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Easy Search</h3>
                <p class="text-sm text-slate-500">Quickly find documents by title, category, or tags. No more digging through folders.</p>
            </div>

            {{-- Feature 2 --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Organized by Category</h3>
                <p class="text-sm text-slate-500">Documents are sorted by categories and tagged for fast, structured access.</p>
            </div>

            {{-- Feature 3 --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Access Control</h3>
                <p class="text-sm text-slate-500">Public and restricted documents ensure the right people see the right content.</p>
            </div>

            {{-- Feature 4 --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-university-red/10 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-university-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Read Later</h3>
                <p class="text-sm text-slate-500">Bookmark documents to read later and pick up right where you left off.</p>
            </div>

            {{-- Feature 5 --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">Comments & Replies</h3>
                <p class="text-sm text-slate-500">Discuss documents with your peers through threaded comments and replies.</p>
            </div>

            {{-- Feature 6 --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-2">View Analytics</h3>
                <p class="text-sm text-slate-500">Track document views broken down by course so you know what's being read.</p>
            </div>

        </div>
    </div>

    {{-- CTA Section --}}
    @guest
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="bg-gradient-to-br from-university-red to-red-700 rounded-2xl p-10 text-center text-white shadow-lg">
            <h2 class="text-2xl sm:text-3xl font-bold mb-3">Ready to get started?</h2>
            <p class="text-white/80 mb-8 max-w-lg mx-auto">Login to your account to access all features including saved documents, comments, and more.</p>
            <a wire:navigate href="{{ route('login') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-white text-university-red font-semibold rounded-xl hover:bg-gray-50 transition-colors">
                Login Now
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
    @endguest

</div>