<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/dashboardblade.css', 'resources/js/app.js'])
        @else
            <link rel="stylesheet" href="{{ asset('css/dashboardblade.css') }}">
        @endif
    </head>
    <body class="px-0 md:px-16 font-sans antialiased dark:text-white/50 min-h-screen">
        <nav class="relative mb-16 mt-10 flex justify-between items-center w-full">
            <!-- logo centered -->
            <div>
                <a href="{{ url('/dashboard') }}" class="flex-1 flex justify-start">
                    <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <img src="{{ asset('images/FieldsSVG.svg') }}" class="w-14 h-14" alt="Fields M.D. Logo"/>
                    </svg>
                </a>
            </div>
            <!-- profile dropdown -->
            <div x-data="{ open: false }" class="dark:bg-white w-40 shadow-xl flex justify-center items-center rounded-xl">
                <div @click="open = !open" class="relative border-b-4 border-transparent py-2" :class="{'border-indigo-800 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                    <div class="flex justify-center items-center space-x-3 cursor-pointer">
                        <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-black border-black-900">
                            <img class="w-full h-full object-cover" src="{{ asset('images/suzyprofile.png') }}" alt="photo">
                        </div>
                        <div class="font-semibold dark:text-lack text-gray-900 text-lg">
                            <div class="cursor-pointer">{{ Auth::user()->name }}</div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-36 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-4">
                            <ul class="space-y-3 dark:text-white">
                                <li class="font-medium">
                                <a href="{{ route('profile.show') }}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                    <div class="mr-3">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    Setting
                                </a>
                                </li>
                                <hr class="dark:border-gray-700">
                                <li class="font-medium">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600" onclick="this.closest('form').submit(); return false;">
                                        <div class="mr-3 text-red-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                        </div>
                                        Logout
                                    </a>
                                </form>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @extends('layouts.minimal')

        @section('content')
        <section class="py-12">
            <div class="flex flex-wrap justify-center items-center">
                @forelse ($babies as $baby)
                <!-- card 1 -->
                <div class="flex flex-wrap justify-center items-center py-10 md:px-20">
                    <div class="flex flex-row bg-white shadow-lg rounded-lg overflow-hidden">
                        <!-- image container -->
                        <div class="flex-shrink-0">
                            <img 
                                src="{{ asset('images/' . ($baby->photo_path ?? 'LoginLogo.png')) }}" 
                                alt="{{ $baby->name }}'s Image" 
                                class="block object-cover w-[200px] h-[200px]"
                            />
                        </div> 
                        <!-- text Content -->
                        <div class="flex flex-col justify-between p-4">
                            <h1 class="text-gray-900 font-bold text-2xl secondaryFont mainColor">{{ $baby->name }}</h1>
                            <p class="mt-2 text-gray-600 text-sm">Age: {{ $baby->age }}</p>
                            <p class="mt-2 text-gray-600 text-sm">Birthdate: {{ \Carbon\Carbon::parse($baby->date_of_birth)->format('F j, Y') }}</p>
                            <p class="mt-2 text-gray-600 text-sm">Updated: {{ $baby->updated_at->format('F j, Y') }}</p>
                            <p class="mt-2 text-gray-600 text-sm">Added: {{ $baby->created_at->format('F j, Y') }}</p>
                            <div class="flex items-center justify-end mt-3">
                                <button class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">
                                    <a href="{{ route('baby.details', $baby->id) }}">
                                        Full Details
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-10">
                    <h1 class="text-black font-bold text-2xl secondaryFont ">The User is Not Associated with Any Infant.</h1>
                </div>
                @endforelse
            </div>
        </section>
        @endsection
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    </body>
</html>
