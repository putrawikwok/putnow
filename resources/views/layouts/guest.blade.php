<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PutNow') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-white antialiased bg-[#0a0a0a]" style="background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px); background-size: 50px 50px;">
        
        <!-- Back to Home Link -->
        <div class="absolute top-6 left-6 z-50">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-[#44d62c] font-bold text-sm transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Kembali ke Beranda
            </a>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <div class="mb-8">
                <a href="/" class="text-4xl font-extrabold text-white tracking-tight text-center block">
                    PutNow<span class="text-[#44d62c]">.</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-8 bg-[#111111] border border-neutral-800 shadow-2xl overflow-hidden sm:rounded-3xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
