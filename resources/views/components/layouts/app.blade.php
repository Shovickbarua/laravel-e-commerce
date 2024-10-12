<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Nebulacore' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/preline/dist/preline.css" />

        @vite('resources/css/app.css', 'resources/js/app.js')
        @livewireStyles
    </head>
    <body class='bg-slate-200 dark:bg-slate-700'>
        @livewire('particals.navbar')
        
        <main>
            {{ $slot }}
        </main>
        @livewire('particals.footer')

        @livewireScripts

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.js"></script>
        <x-livewire-alert::scripts />
    </body>
</html>
