<div>
    <h1 class="text-2xl font-extrabold text-gray-900">Create your account</h1>
    <p class="mt-1 text-sm text-gray-500">Already have an account? <a href="{{ route('login') }}" class="text-indigo-600 font-medium hover:underline">Sign in</a></p>

    <form wire:submit="register" class="mt-8 space-y-5">

        {{-- Name --}}
        <div>
            <label for="name" class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name</label>
            <input
                id="name" type="text"
                wire:model="name"
                required autofocus
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
                id="email" type="email"
                wire:model="email"
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
                    id="password" type="password"
                    wire:model="password"
                    required
                    placeholder="Create a password"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition pr-11 @error('password') border-red-400 @enderror"
                />
                <button type="button" onclick="togglePassword('password')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    id="password_confirmation" type="password"
                    wire:model="password_confirmation"
                    required
                    placeholder="Repeat your password"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition pr-11"
                />
                <button type="button" onclick="togglePassword('password_confirmation')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Terms --}}
        <div class="flex items-start gap-2">
            <input id="terms" type="checkbox"
                wire:model="terms"
                value="1"
                class="accent-indigo-600 w-4 h-4 rounded mt-0.5 @error('terms') ring-2 ring-red-400 @enderror"/>
            <label for="terms" class="text-xs text-gray-500">
                I agree to the
                <a href="#" class="text-indigo-600 font-medium hover:underline">Terms of Service</a>
                and
                <a href="#" class="text-indigo-600 font-medium hover:underline">Privacy Policy</a>
            </label>
        </div>
        @error('terms')
            <p class="text-xs text-red-500 -mt-3">You must accept the terms and conditions.</p>
        @enderror

        {{-- Submit --}}
        <button type="submit"
                wire:loading.attr="disabled"
                wire:target="register"
                class="w-full bg-indigo-600 text-white py-3 rounded-xl text-sm font-semibold hover:bg-indigo-700 transition shadow-sm hover:shadow-md disabled:opacity-60 disabled:cursor-not-allowed">
            <span wire:loading.remove wire:target="register">Create Account</span>
            <span wire:loading wire:target="register" class="flex items-center justify-center gap-2">
                <svg class="animate-spin w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                </svg>
                Creating account...
            </span>
        </button>

    </form>

    <p class="text-center text-xs text-gray-500 mt-6">
        Already have an account?
        <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">Sign in</a>
    </p>
</div>