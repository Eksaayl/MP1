<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
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

        <section>
            <h2 class="title">FAQs</h2>

            <div class="faq">
                <div class="question">
                    <h3>Q: What is Laravel?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="answer">
                    <p>
                    Laravel is a popular PHP framework used for building web applications. It provides a robust set of tools and features like routing, authentication, and database management, making development faster and easier by following the Model-View-Controller (MVC) architectural pattern.
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Q: What is Livewire?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="answer">
                    <p>
                    Livewire is a full-stack framework for Laravel that allows you to build dynamic, interactive user interfaces using PHP, without the need for writing JavaScript. It bridges the gap between front-end and back-end by enabling developers to create components that behave like traditional front-end components (like those made with JavaScript frameworks) but are driven by server-side logic.
                    </p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Q: What is Laravel Jetstream?</h3>

                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="answer">
                    <p>
                    Laravel Jetstream is a starter kit for Laravel applications that provides a pre-built authentication system, including features like login, registration, email verification, two-factor authentication, session management, and optional team management. It offers a solid foundation for new projects, with support for frontend frameworks like Livewire and Inertia.js, allowing developers to quickly set up and customize user authentication and management.
                    </p>
                </div>
            </div>
        </section>
        <script src="js/..."></script>
    </div>
</body>

<script>
    const faqs = document.querySelectorAll(".faq");

    faqs.forEach(faq => {
        faq.addEventListener("click", () => {
            faq.classList.toggle("active");
        });
    });
</script>