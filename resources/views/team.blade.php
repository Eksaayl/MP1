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

        .profile-card {
            background-color: white;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .profile-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-card h2 {
            margin: 10px 0;
        }

        .profile-card p {
            margin: 5px 0;
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

        <div class="py-12" style="margin-right: 15px">
            <div class="profile-card">
                <img src="{{ asset('img/pooh5.jpeg') }}" alt="Description of the image">
                <h2>John Doe</h2>
                <p><strong>Birthday:</strong> January 1, 1990</p>
                <p><strong>Occupation:</strong> Software Engineer</p>
            </div>
        </div>
        <div class="py-12" style="margin-right: 15px">
            <div class="profile-card">
                <img src="{{ asset('img/piglet.jpeg') }}" alt="Description of the image">
                <h2>Jane Smith</h2>
                <p><strong>Birthday:</strong> March 15, 1985</p>
                <p><strong>Occupation:</strong> Data Scientist</p>
            </div>
        </div>
        <div class="py-12" style="margin-right: 15px">
            <div class="profile-card">
                <img src="{{ asset('img/tigger.jpeg') }}" alt="Description of the image">
                <h2>Michael Johnson</h2>
                <p><strong>Birthday:</strong> July 22, 1978</p>
                <p><strong>Occupation:</strong> Graphic Designer</p>
            </div>
        </div>
    </div>
</body>

</html>