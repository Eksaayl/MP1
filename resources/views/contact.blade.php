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
        <div clas="max-w-lg mx-auto mt-8 bg-white shadow-2x1 rounded-lg overflow-hidden">
            <div class="px-6 py-4">

                @if (session()->has('success'))
                <div class="bg-green-200 text-green-800 px-4 py-2 rounded-lg">
                    {{ session('success') }}
                </div>
                @endif
                @if (session()->has('error'))
                <div class="bg-red-200 text-red-800 px-4 py-2 rounded">
                    {{ session('error') }}
                </div>
                @endif

                <h1 class="flex justify-center text-3xl font-bold mb-2 text-gray-800">Contact</h1>
                <p class="text-gray-600 mb-2">Please fill out the form below to get in touch with us</p>

                <form wire:submit.prevent="send" method="post">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-1" style="margin-right: 35px">Name</label>
                        <input type="text" id="name" wire:model="name" class="w-full px-4 py-3 rounded-lg border focus:outline-none">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-1 " style="margin-right: 35px">Email</label>
                        <input type="email" id="email" wire:model="email" class="w-full px-4 py-3 rounded-lg border focus:outline-none">
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-1" style="margin-right: 15px">Message</label>
                        <textarea id="message" wire:model="message" class="w-full px-4 py-3 rounded-lg border focus:outline-none"></textarea>
                        @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                    </div>
                </form>

            </div>
        </div>
        
    </div>

</body>