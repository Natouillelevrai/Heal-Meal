@props(['title' => 'Heal Meal'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#FFF7EB]">
    <div class="min-h-[calc(100vh-100px)] mt-25 flex flex-col justify-between space-y-12 relative ">

        <!-- #Header -->
        <x-header>

        </x-header>

        <!-- #Main -->

        <main class="w-full px-4 m-0 h-full">

            {{ $slot }}
        </main>
        <x-footer></x-footer>
    </div>
</body>

</html>
