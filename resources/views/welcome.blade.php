<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed right-0 top-0 px-6 py-4 sm:block" style="float: left;">
            <a href="{{ route('about') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold; margin-right: 15px;">About</a>
            <a href="{{ route('contact') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold; margin-right: 15px;">Contact Us</a>
            <a href="{{ route('faq') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold; margin-right: 15px;">FAQ</a>
            <a href="{{ route('team') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold; margin-right: 15px;">Meet The Team</a>
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold; margin-right: 15px;">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold;">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="font-weight:bolder; font-size: 80px; font-family: 'Courier New', Courier, monospace">
                Welcome
            </div>
            <div class="text-center" style="font-size: 24px; font-family: 'Courier New', Courier, monospace">
                To my Page!
            </div>
        </div>
    </div>
</body>
</html>