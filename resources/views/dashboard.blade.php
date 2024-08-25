<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="profile-card">
            <img src="{{ asset('img/pooh5.jpeg') }}" alt="Description of the image">
            <h2>John Doe</h2>
            <p><strong>Birthday:</strong> January 1, 1990</p>
            <p><strong>Occupation:</strong> Software Engineer</p>
        </div>
    </div>

    <style>
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
</x-app-layout>
