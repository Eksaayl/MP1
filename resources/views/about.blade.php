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
            <a href="{{ route('welcome') }}" style="text-decoration: underline; font-size: 24px; font-weight: bold; margin-right: 15px;">Home</a>
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

        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold" style="margin-block-end: -25px; font-size: 64px; font-weight:bolder; font-family: 'Courier New', Courier, monospace">About Us</h1>
            <p style="width: 50%; font-family: 'Courier New', Courier, monospace">
                Hi there! I'm Ralph Llasus, an IT student with a deep passion for both gaming and web and mobile development. My journey into technology started with a fascination for how games are created and the innovation behind them. This curiosity evolved into a broader interest in developing digital solutions, leading me to explore web and mobile development.

                As a dedicated student, I’m committed to mastering the skills needed to excel in this ever-evolving field. My goal is to blend my love for gaming with my technical expertise to create engaging, user-friendly applications. Whether it's building dynamic websites or developing intuitive mobile apps, I’m driven by the challenge and excitement of bringing ideas to life.
            </p>
        </div>
    </div>
</body>