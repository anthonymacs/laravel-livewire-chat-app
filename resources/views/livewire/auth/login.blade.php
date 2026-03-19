<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp — Sign In</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 font-sans antialiased min-h-screen flex items-center justify-center p-4">

    <div class="absolute top-0 left-0 w-72 h-72 bg-indigo-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>

    @include('partials.toast')

    <livewire:auth.login />

    @livewireScripts

    <script>
        function togglePassword() {
            const field = document.getElementById('password');
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    </script>

</body>
</html>