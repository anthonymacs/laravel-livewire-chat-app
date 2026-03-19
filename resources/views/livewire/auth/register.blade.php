<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp — Sign Up</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex">

    @include('partials.toast')

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
            <h2 class="text-4xl font-extrabold leading-tight">Join us<br>today. 🚀</h2>
            <p class="mt-4 text-indigo-100 text-sm leading-relaxed max-w-sm">
                Create your free account and start chatting with anyone, anywhere.
            </p>
            <div class="mt-10 grid grid-cols-2 gap-4">
                <div class="bg-white/10 rounded-2xl p-5">
                    <p class="text-3xl font-extrabold">10k+</p>
                    <p class="text-indigo-100 text-xs mt-1">Active users</p>
                </div>
                <div class="bg-white/10 rounded-2xl p-5">
                    <p class="text-3xl font-extrabold">99.9%</p>
                    <p class="text-indigo-100 text-xs mt-1">Uptime</p>
                </div>
                <div class="bg-white/10 rounded-2xl p-5">
                    <p class="text-3xl font-extrabold">1M+</p>
                    <p class="text-indigo-100 text-xs mt-1">Messages sent</p>
                </div>
                <div class="bg-white/10 rounded-2xl p-5">
                    <p class="text-3xl font-extrabold">256-bit</p>
                    <p class="text-indigo-100 text-xs mt-1">Encryption</p>
                </div>
            </div>
        </div>
        <p class="text-indigo-200 text-xs">&copy; {{ date('Y') }} ChatApp. All rights reserved.</p>
    </div>

    {{-- Right Panel --}}
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

            <livewire:auth.register />

        </div>
    </div>

    @livewireScripts

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    </script>

</body>
</html>