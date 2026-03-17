<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp — Create Account</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex">

    {{-- Left Panel --}}
    <div class="hidden lg:flex w-1/2 bg-gradient-to-br from-indigo-600 to-purple-600 flex-col justify-between p-12 text-white">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>
            </div>
            <span class="text-xl font-bold">ChatApp</span>
        </div>

        <div>
            <h2 class="text-4xl font-extrabold leading-tight">Start connecting <br> with everyone.</h2>
            <p class="mt-4 text-indigo-100 text-sm leading-relaxed max-w-sm">
                Join thousands of users who chat faster, share files, and stay in sync — all in one place.
            </p>

            {{-- Mock Chat Bubbles --}}
            <div class="mt-10 space-y-4">
                <div class="flex items-end gap-3">
                    <div class="w-8 h-8 rounded-full bg-white/20 shrink-0"></div>
                    <div class="bg-white/20 backdrop-blur text-white text-sm px-4 py-2.5 rounded-2xl rounded-bl-none max-w-xs">
                        Hey! Just joined ChatApp 👋
                    </div>
                </div>
                <div class="flex items-end justify-end gap-3">
                    <div class="bg-white text-indigo-600 text-sm px-4 py-2.5 rounded-2xl rounded-br-none max-w-xs font-medium">
                        Welcome! You'll love it here 🎉
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white/20 shrink-0"></div>
                </div>
                <div class="flex items-end gap-3">
                    <div class="w-8 h-8 rounded-full bg-white/20 shrink-0"></div>
                    <div class="bg-white/20 backdrop-blur text-white text-sm px-4 py-2.5 rounded-2xl rounded-bl-none max-w-xs">
                        Messages are so fast ⚡
                    </div>
                </div>
            </div>
        </div>

        <p class="text-indigo-200 text-xs">&copy; {{ date('Y') }} ChatApp. All rights reserved.</p>
    </div>

    {{-- Right Panel: Form --}}
    <div class="flex-1 flex flex-col justify-center items-center px-6 py-12">
        <div class="w-full max-w-md">

            {{-- Mobile Logo --}}
            <div class="flex lg:hidden items-center gap-2 mb-8">
                <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-900">ChatApp</span>
            </div>

            <h1 class="text-2xl font-extrabold text-gray-900">Create your account</h1>
            <p class="mt-1 text-sm text-gray-500">Already have an account? <a href="{{ route('login') }}" class="text-indigo-600 font-medium hover:underline">Sign in</a></p>

            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-5">
                @csrf

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        required
                        placeholder="John Doe"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition @error('name') border-red-400 @enderror"
                    />
                    @error('name')
                        <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        placeholder="you@example.com"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition @error('email') border-red-400 @enderror"
                    />
                    @error('email')
                        <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-xs font-semibold text-gray-700 mb-1.5">Password</label>
                    <div class="relative">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            placeholder="Min. 8 characters"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition pr-11 @error('password') border-red-400 @enderror"
                        />
                        <button type="button" onclick="togglePassword('password', 'eye1')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <svg id="eye1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div>
                    <label for="password_confirmation" class="block text-xs font-semibold text-gray-700 mb-1.5">Confirm Password</label>
                    <div class="relative">
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            placeholder="Repeat your password"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition pr-11"
                        />
                        <button type="button" onclick="togglePassword('password_confirmation', 'eye2')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <svg id="eye2" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Terms --}}
                <div class="flex items-start gap-3">
                    <input id="terms" name="terms" type="checkbox" required class="mt-0.5 accent-indigo-600 w-4 h-4 rounded"/>
                    <label for="terms" class="text-xs text-gray-500 leading-relaxed">
                        I agree to the
                        <a href="#" class="text-indigo-600 font-medium hover:underline">Terms of Service</a>
                        and
                        <a href="#" class="text-indigo-600 font-medium hover:underline">Privacy Policy</a>
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-xl text-sm font-semibold hover:bg-indigo-700 transition shadow-sm hover:shadow-md">
                    Create Account
                </button>

            </form>

            {{-- Divider --}}
            <div class="flex items-center gap-3 my-6">
                <div class="flex-1 h-px bg-gray-200"></div>
                <span class="text-xs text-gray-400">or continue with</span>
                <div class="flex-1 h-px bg-gray-200"></div>
            </div>

            {{-- Social Buttons --}}
            <div class="grid grid-cols-2 gap-3">
                <button class="flex items-center justify-center gap-2 border border-gray-200 rounded-xl py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    Google
                </button>
                <button class="flex items-center justify-center gap-2 border border-gray-200 rounded-xl py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-50 transition">
                    <svg class="w-4 h-4 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                    </svg>
                    GitHub
                </button>
            </div>

        </div>
    </div>

    <script>
        function togglePassword(fieldId, eyeId) {
            const field = document.getElementById(fieldId);
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    </script>

</body>
</html>