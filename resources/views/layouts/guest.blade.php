<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyPerpustakaan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center bg-[#DCEAF7] px-4 py-10">

        <div class="w-full max-w-md">

            <!-- Nama Aplikasi -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold tracking-wide text-[#3F6F91]">
                    MyPerpustakaan
                </h1>

             
            </div>

            <!-- Card -->
            <div class="bg-[#FFF9ED] rounded-2xl shadow-md border border-[#E8DFC9] px-8 py-8">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <p class="text-center text-xs text-[#6B8193] mt-5">
                © {{ date('Y') }} MyPerpustakaan
            </p>

        </div>

    </div>

</body>
</html>