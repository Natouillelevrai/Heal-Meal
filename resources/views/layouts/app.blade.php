@props(['title'])

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

<body class="font-sans antialiased h-full w-full bg-[#FFF7EB]">
    <div class="min-h-screen px-3 py-6 space-y-12">
        <!-- #Header -->
        <header>

        </header>

        <!-- #Main -->
        <main class="w-full">
            {{ $slot }}
        </main>

    </div>
</body>

</html>