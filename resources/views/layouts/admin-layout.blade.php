<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="/build/assets/app.css">

    <script src="/build/assets/app.js" defer></script>

    <script>
        document.addEventListener('Keydown', (e)=>{

            if(!e.target.hasAttribute('wire:navigate'))
            return;

            if(e.key.toLowerCase() == 'enter')
            Alpine.navigate(e.target.href);

        });

    </script>

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


        @livewire('admin.header-admin')

        <main class="pt-16">
            {{ $slot }}
        </main>
    </div>

    @livewireScriptConfig
</body>



</html>