<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fields M.D.</title>

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/welcomeblade.css', 'resources/js/app.js'])
        @else
            <link rel="stylesheet" href="{{ asset('css/welcomeblade.css') }}">
        @endif
    </head>
    <body class="px-10 font-sans antialiased dark:text-white/50 min-h-screen">


            <nav class="relative my-6 mt-10 flex justify-between items-center w-full">
                <!-- Logo centered -->
                <div >
                    <a href="{{ url('/welcome') }}" class="flex-1 flex justify-start">
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <img src="{{ asset('images/FieldsSVG.svg') }}" alt="Fields M.D. Logo"/>
                        </svg>
                    </a>
                </div>

                <!-- Links -->
                <div class="flex space-x-6 pr-5">
                    @if (Route::has('login'))
                        @auth
                            <button>
                                <span class="button_top">
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/50 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                </span>
                            </button>
                        @else
                            <button>
                                    <span class="button_top">
                                        <a
                                            href="{{ route('login') }}"
                                            class=" text-black ring-1 ring-transparent transition hover:text-black/50 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white"
                                        >
                                            Log in
                                        </a>
                                    </span>
                            </button>

                            @if (Route::has('register'))
                                <button>
                                    <span class="button_top">
                                        <a
                                            href="{{ route('register') }}"
                                            class="text-black ring-1 ring-transparent transition hover:text-black/50 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    </span>
                                </button>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
            <section class="section1" >
                <div class="container section1_container flex flex-col md:flex-row gap-6 md:gap-[400px]">
                    <div class="flex flex-col justify-center items-start md:items-start text-black">
                        <h1 class="h1_fields text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-7xl">FIELDS M.D.</h1>
                        <h1 class="h1_fingertips text-3xl sm:text-3xl md:text-2xl lg:text-3xl xl:text-4xl">Health At Your Fingertips.</h1>
                        <p class="p_access text-justify dark:text-black/50 text-xs sm:text-xs md:text-sm lg:text-base">Access your child’s health records anytime with our portal and<br>
                            stay updated on key stats linked to the Barangay Health System.
                        </p>
                    </div>
                    <div class="md:w1/2 mt-6 md:mt-0">
                        <img id="Section1_BG" class="max-w-full" src="{{ asset('images/Section1_Logo.png') }}" alt="Fields Md Text Background">
                    </div>
                </div>
            </section>
            <section class="section2">
            <div class="section2_cards py-10 pb-8">
                <div class=" max-w-7xl mx-auto p-5 pb-5 md:pb-20">
                    <div class="flex flex-col md:flex-row justify-center items center rounded-lg shadow-xl bg-white p-10">
                        <div class="flex flex-col sm:flex-row md:flex-col justify-center text-center">
                            <h5 class="text-xl font-semibold tracking-wider secondaryColor mainFont">WHAT IS FIELDS M.D.?</h5>
                            <img class="p-8 rounded-t-lg" src="{{ asset('images/LoginLogo.png') }}" alt="product image" />
                        </div>
                        <div class="flex flex-wrap w-full justify-center">
                            <div class="text-center p-10">
                                <p class="secondaryFont text-sm dark:text-black/60 text-justify">Fields M.D. is a community-centered health portal created to give parents easy and reliable access to their children’s medical records. This portal connects seamlessly with the Barangay Health Information System, providing parents with real-time updates on key health indicators like height, weight, and blood type. Fields M.D. is designed to be accessible anywhere, whether remotely on mobile devices or via self-service kiosks in local barangay health centers.</p>
                                <br>
                                <p class="secondaryFont text-sm dark:text-black/60 text-justify">By offering immediate access to essential health data, Fields M.D. enables parents to make informed and timely health decisions, promoting the well-being of their children. Privacy and security are top priorities, ensuring that sensitive health information is accessible only to authorized users. As part of its mission, Fields M.D. aims to simplify the way parents track their child’s growth and health progress, making it easier to stay engaged in their care journey while fostering a healthier community.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section2_cards py-20">
                    <div class="flex justify-center items-center mainFont py-10">
                        <p class="section2_whatIs text-2xl sm:text-4xl md:text-4xl lg:text-4xl xl:text-4xl">WHY CHOOSE FIELDS M.D.?</p>
                    </div>
                    <div class="flex flex-col md:flex-row justify-center items-center gap-[100px] md:gap-[100px]">
                        <div class="m-w-full rounded-lg shadow-xl bg-white">
                            <div class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{ asset('images/easy-access.png') }}" alt="product image" />
                            </div>
                            <div class="px-5 pb-5 text-center">
                                <h5 class="text-xl font-semibold tracking-wider secondaryColor mainFont">Easy Access</h5>
                            </div>
                            <div class="px-5 pb-5 text-center">
                                <p class="secondaryFont text-sm max-w-xs dark:text-black/60 flex justify center text-center">Enable parents to easily retrieve infant health data through mobile or kiosk at the barangay health center, even when staff is absent.</p>
                            </div>
                        </div>
                        <div class="m-w-full rounded-lg shadow-xl bg-white">
                            <div class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{ asset('images/data-protection.png') }}" alt="product image" />
                            </div>
                            <div class="px-5 pb-5 text-center">
                                <h5 class="text-xl font-semibold tracking-wider secondaryColor mainFont">Data Security</h5>
                            </div>
                            <div class="px-5 pb-5 text-center">
                                <p class="secondaryFont text-sm max-w-xs dark:text-black/60 flex justify center text-center">Apply strong privacy measures to protect sensitive health data, allowing access only to authorized users.</p>
                            </div>
                        </div>
                        <div class="m-w-full rounded-lg shadow-xl bg-white">
                            <div class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{ asset('images/infant-health-data.png') }}" alt="product image" />
                            </div>
                            <div class="px-5 pb-5 text-center">
                                <h5 class="text-xl font-semibold tracking-wider secondaryColor mainFont">Infant Health</h5>
                            </div>
                            <div class="px-5 pb-5 text-center">
                                <p class="secondaryFont text-sm max-w-xs dark:text-black/60 flex justify center text-center">Track infant health visits to adjust Barangay resources and also helps identify the primary focus areas for local clinics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="py-16 text-center text-sm mx-auto md:mx-[13rem]">
                <div class="flex flex-col md:flex-row justify-between items-center text-black dark:text-black/70 text-sm">
                    <div class="flex items-center w-full md:w-auto">
                        <a href="{{ url('/welcome') }}" class="flex-1 flex justify-center md:justify-start">
                                <img src="{{ asset('images/FieldsSVG.svg') }}" alt="Fields M.D. Logo"/>
                        </a>
                    </div>
                    <div class="flex flex-col md:flex-row justify-center items-center w-full md:w-auto space-y-2 md:space-y-0 md:space-x-6 md:pr-12">
                        <a href="" class="dark:hover:text-black/100">
                            <h1>About</h1>
                        </a>
                        <a href="" class="dark:hover:text-black/100">
                            <h1>Contact Us</h1>
                        </a>
                        <a href="" class="dark:hover:text-black/100">
                            <h1>Support</h1>
                        </a>
                        <a href="" class="dark:hover:text-black/100">
                            <h1>Affiliates</h1>
                        </a>
                    </div>
                </div>
                <div class="w-full my-4">
                    <hr class="border-t border-gray-500">
                </div>
                <div class="flex justify-center py:auto md:py-10 md:pt-16">
                    <div class="flex-col md:flex-row text-2xl space-y-5 dark:text-customDark/90 space-x-10">
                        <a class="dark:hover:text-customDark/100" href="https://github.com/Edisown?tab=repositories" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a class="dark:hover:text-customDark/100" href="https://eds-yukii.web.app/" target="_blank">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                        <a class="dark:hover:text-customDark/100" href="" target="_blank">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                        </a>
                        <a class="dark:hover:text-customDark/100" href="" target="_blank">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-5 md:pt-0 dark:text-black/70">
                    <p>© 2024, Fields M.D.</p>
                </div>
            </footer>      
    </body>
</html>
