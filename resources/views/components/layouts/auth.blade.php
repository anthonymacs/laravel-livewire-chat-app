<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ChatApp' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        #nprogress .bar { background: #6366f1 !important; height: 3px !important; }
        #nprogress .peg { box-shadow: 0 0 10px #6366f1, 0 0 5px #6366f1 !important; }
        #nprogress .spinner-icon { border-top-color: #6366f1 !important; border-left-color: #6366f1 !important; }
    </style>
</head>
<body>
    @include('partials.toast')

    {{ $slot }}

    @livewireScripts
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css"/>
    <script>
        NProgress.configure({ showSpinner: true, speed: 400 });
        document.addEventListener('livewire:request', () => NProgress.start());
        document.addEventListener('livewire:response', () => NProgress.done());
    </script>
</body>
</html>