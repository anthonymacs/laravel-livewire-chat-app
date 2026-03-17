<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp — Connect Instantly</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    {{-- Navbar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-10 py-4 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>
            </div>
            <span class="text-xl font-bold text-gray-900">ChatApp</span>
        </div>
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-500">
            <a href="#features" class="hover:text-indigo-600 transition">Features</a>
            <a href="#how-it-works" class="hover:text-indigo-600 transition">How it Works</a>
            <a href="#testimonials" class="hover:text-indigo-600 transition">Testimonials</a>
        </div>
        <div class="flex items-center gap-3 text-sm font-medium">
            <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600 transition px-4 py-2">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-5 py-2 rounded-xl hover:bg-indigo-700 transition shadow-sm">
                Get Started
            </a>
        </div>
    </nav>

    {{-- Hero --}}
    <section class="min-h-screen flex flex-col items-center justify-center text-center px-6 pt-24 pb-16 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <span class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-600 text-xs font-semibold px-4 py-1.5 rounded-full mb-6">
            <span class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></span>
            Now live — start chatting for free
        </span>
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight max-w-4xl">
            Connect with anyone, <br>
            <span class="text-indigo-600">anywhere, instantly.</span>
        </h1>
        <p class="mt-6 text-lg text-gray-500 max-w-xl leading-relaxed">
            ChatApp brings your conversations together in one place — fast, secure, and beautifully simple.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
            <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-8 py-3.5 rounded-xl text-sm font-semibold hover:bg-indigo-700 transition shadow-md hover:shadow-lg">
                Start for Free
            </a>
            <a href="#how-it-works" class="flex items-center gap-2 text-gray-600 text-sm font-medium hover:text-indigo-600 transition">
                <span class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-200 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </span>
                See how it works
            </a>
        </div>

        {{-- Hero Mock UI --}}
        <div class="mt-16 w-full max-w-2xl bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden text-left">
            <div class="flex items-center gap-2 px-4 py-3 bg-gray-50 border-b border-gray-100">
                <span class="w-3 h-3 rounded-full bg-red-400"></span>
                <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                <span class="w-3 h-3 rounded-full bg-green-400"></span>
                <span class="ml-3 text-xs text-gray-400 font-medium">ChatApp — Messages</span>
            </div>
            <div class="flex h-56">
                <div class="w-40 border-r border-gray-100 p-3 space-y-2">
                    <div class="flex items-center gap-2 bg-indigo-50 rounded-lg p-2">
                        <div class="w-7 h-7 rounded-full bg-indigo-300 shrink-0"></div>
                        <div class="space-y-1">
                            <div class="w-14 h-1.5 bg-indigo-200 rounded"></div>
                            <div class="w-10 h-1.5 bg-gray-200 rounded"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 p-2">
                        <div class="w-7 h-7 rounded-full bg-purple-200 shrink-0"></div>
                        <div class="space-y-1">
                            <div class="w-14 h-1.5 bg-gray-200 rounded"></div>
                            <div class="w-10 h-1.5 bg-gray-100 rounded"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 p-2">
                        <div class="w-7 h-7 rounded-full bg-green-200 shrink-0"></div>
                        <div class="space-y-1">
                            <div class="w-14 h-1.5 bg-gray-200 rounded"></div>
                            <div class="w-10 h-1.5 bg-gray-100 rounded"></div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 p-4 space-y-3">
                    <div class="flex gap-2">
                        <div class="w-6 h-6 rounded-full bg-indigo-300 shrink-0 mt-1"></div>
                        <div class="bg-gray-100 rounded-xl rounded-tl-none px-3 py-2 max-w-xs">
                            <div class="w-28 h-2 bg-gray-300 rounded mb-1.5"></div>
                            <div class="w-20 h-2 bg-gray-200 rounded"></div>
                        </div>
                    </div>
                    <div class="flex gap-2 justify-end">
                        <div class="bg-indigo-500 rounded-xl rounded-tr-none px-3 py-2 max-w-xs">
                            <div class="w-24 h-2 bg-indigo-300 rounded mb-1.5"></div>
                            <div class="w-16 h-2 bg-indigo-400 rounded"></div>
                        </div>
                        <div class="w-6 h-6 rounded-full bg-gray-300 shrink-0 mt-1"></div>
                    </div>
                    <div class="flex gap-2">
                        <div class="w-6 h-6 rounded-full bg-indigo-300 shrink-0 mt-1"></div>
                        <div class="bg-gray-100 rounded-xl rounded-tl-none px-3 py-2 max-w-xs">
                            <div class="w-32 h-2 bg-gray-300 rounded mb-1.5"></div>
                            <div class="w-20 h-2 bg-gray-200 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Trusted By --}}
    <section class="py-12 px-10 bg-white border-y border-gray-100">
        <p class="text-center text-xs font-semibold text-gray-400 uppercase tracking-widest mb-8">Trusted by teams at</p>
        <div class="flex flex-wrap justify-center items-center gap-10 opacity-40 grayscale">
            <span class="text-xl font-bold text-gray-700">Stripe</span>
            <span class="text-xl font-bold text-gray-700">Notion</span>
            <span class="text-xl font-bold text-gray-700">Vercel</span>
            <span class="text-xl font-bold text-gray-700">Linear</span>
            <span class="text-xl font-bold text-gray-700">Figma</span>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="py-24 px-10 bg-gray-50">
        <div class="text-center mb-16">
            <span class="text-xs font-semibold text-indigo-500 uppercase tracking-widest">Features</span>
            <h2 class="mt-2 text-3xl font-bold text-gray-900">Everything you need to stay connected</h2>
            <p class="mt-3 text-gray-500 text-sm max-w-md mx-auto">Built for individuals and teams who care about speed, privacy, and simplicity.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800">Real-time Messaging</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">Messages delivered instantly with no delay. Stay in the flow of conversation without interruptions.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800">End-to-End Encrypted</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">Your conversations are private. Only you and the people you chat with can read your messages.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800">Group Conversations</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">Create groups for your team, friends, or family. Collaborate and communicate all in one thread.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800">File Sharing</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">Send images, documents, and files directly in chat. No third-party tools needed.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800">Smart Notifications</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">Get notified only when it matters. Customize alerts per conversation so you stay focused.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group">
                <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <h3 class="text-base font-semibold text-gray-800">Cross-platform Sync</h3>
                <p class="mt-2 text-sm text-gray-500 leading-relaxed">Access your messages from any device, anytime. Everything stays perfectly in sync.</p>
            </div>

        </div>
    </section>

    {{-- How It Works --}}
    <section id="how-it-works" class="py-24 px-10 bg-white">
        <div class="text-center mb-16">
            <span class="text-xs font-semibold text-indigo-500 uppercase tracking-widest">How it Works</span>
            <h2 class="mt-2 text-3xl font-bold text-gray-900">Up and running in minutes</h2>
        </div>
        <div class="flex flex-col md:flex-row items-start justify-center gap-8 max-w-4xl mx-auto">

            <div class="flex-1 text-center">
                <div class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold mx-auto mb-4">1</div>
                <h3 class="text-sm font-semibold text-gray-800">Create your account</h3>
                <p class="mt-2 text-xs text-gray-500">Sign up in seconds. No credit card required.</p>
            </div>

            <div class="hidden md:flex items-center mt-7 text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/>
                </svg>
            </div>

            <div class="flex-1 text-center">
                <div class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold mx-auto mb-4">2</div>
                <h3 class="text-sm font-semibold text-gray-800">Find your contacts</h3>
                <p class="mt-2 text-xs text-gray-500">Search and add people by username or email.</p>
            </div>

            <div class="hidden md:flex items-center mt-7 text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/>
                </svg>
            </div>

            <div class="flex-1 text-center">
                <div class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold mx-auto mb-4">3</div>
                <h3 class="text-sm font-semibold text-gray-800">Start chatting</h3>
                <p class="mt-2 text-xs text-gray-500">Send messages, files, and more — instantly.</p>
            </div>

        </div>
    </section>

    {{-- Testimonials --}}
    <section id="testimonials" class="py-24 px-10 bg-gray-50">
        <div class="text-center mb-16">
            <span class="text-xs font-semibold text-indigo-500 uppercase tracking-widest">Testimonials</span>
            <h2 class="mt-2 text-3xl font-bold text-gray-900">People love ChatApp</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center gap-1 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">"ChatApp replaced all our other tools. The team is more connected than ever and onboarding new members takes minutes."</p>
                <div class="mt-5 flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Lee&background=6366f1&color=fff" class="w-9 h-9 rounded-full" alt="">
                    <div>
                        <p class="text-xs font-semibold text-gray-800">Sarah Lee</p>
                        <p class="text-xs text-gray-400">Product Manager, Vercel</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center gap-1 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">"The speed and simplicity are unmatched. I've tried every chat app out there and this is the one I keep coming back to."</p>
                <div class="mt-5 flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Mark+Chen&background=8b5cf6&color=fff" class="w-9 h-9 rounded-full" alt="">
                    <div>
                        <p class="text-xs font-semibold text-gray-800">Mark Chen</p>
                        <p class="text-xs text-gray-400">Software Engineer, Linear</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center gap-1 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-sm text-gray-600 leading-relaxed">"End-to-end encryption gives us peace of mind. We use ChatApp for sensitive client discussions without any worries."</p>
                <div class="mt-5 flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Priya+Nair&background=10b981&color=fff" class="w-9 h-9 rounded-full" alt="">
                    <div>
                        <p class="text-xs font-semibold text-gray-800">Priya Nair</p>
                        <p class="text-xs text-gray-400">CEO, Notion</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <section class="py-24 px-6 bg-gradient-to-br from-indigo-600 to-purple-600 text-white text-center">
        <h2 class="text-4xl font-extrabold">Ready to start chatting?</h2>
        <p class="mt-4 text-indigo-100 text-sm max-w-md mx-auto">Join thousands of users who are already connecting faster and smarter with ChatApp.</p>
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('register') }}" class="bg-white text-indigo-600 font-semibold px-8 py-3.5 rounded-xl hover:bg-indigo-50 transition shadow-md text-sm">
                Create Free Account
            </a>
            <a href="{{ route('login') }}" class="text-white border border-white/40 px-8 py-3.5 rounded-xl hover:bg-white/10 transition text-sm font-medium">
                Sign In
            </a>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-400 px-10 py-12">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between gap-8">
            <div>
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-7 h-7 bg-indigo-600 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <span class="text-white font-bold text-lg">ChatApp</span>
                </div>
                <p class="text-xs leading-relaxed max-w-xs">Fast, secure, and simple messaging for everyone. Connect with the people that matter most.</p>
            </div>
            <div class="flex gap-16 text-sm">
                <div>
                    <p class="text-white font-semibold mb-3">Product</p>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#features" class="hover:text-white transition">Features</a></li>
                        <li><a href="#how-it-works" class="hover:text-white transition">How it Works</a></li>
                        <li><a href="#" class="hover:text-white transition">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-white font-semibold mb-3">Company</p>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-white transition">About</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-white font-semibold mb-3">Legal</p>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-white transition">Privacy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-5xl mx-auto mt-10 pt-6 border-t border-gray-800 text-xs text-center">
            &copy; {{ date('Y') }} ChatApp. All rights reserved.
        </div>
    </footer>

</body>
</html>