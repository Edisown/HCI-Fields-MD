<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Fields M.D.</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/babyDetails.css', 'resources/js/calendar.js'])
    @else
    <link rel="stylesheet" href="{{ asset('css/babyDetails.css') }}">
    @endif
</head>
<body class="px-0 md:px-16 font-sans antialiased dark:text-white/50 min-h-screen">
    <nav class="relative mb-10 mt-10 flex justify-between items-center w-full px-5 md:px-0">
        <!-- Logo centered -->
        <div>
            <a href="{{ url('/dashboard') }}" class="flex-1 flex justify-start">
                <div class="flex justify-center items-center space-x-3">
                    <svg version="1.1" viewBox="0 0 2048 2048" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                        <path transform="translate(973)" d="m0 0h104l61 6 46 6 45 8 48 11 47 13 48 16 46 18 36 16 25 12 26 13 23 13 26 15 19 12 17 11 19 13 18 13 19 14 16 13 9 7 13 11 14 12 10 9 8 7 15 14 10 10 8 7 5 5v2h2l7 8 10 10 7 8 12 13 9 11 10 11 11 14 12 15 10 13 13 18 12 17 12 18 14 22 12 20 12 21 12 22 9 17 11 23 15 33 16 40 9 25 12 36 13 46 12 52 8 45 7 56 5 56v87l-5 63-6 48-6 37-5 26-9 37-7 27-9 30-12 36-14 37-11 26-15 33-24 48-14 24-12 21-22 34-13 19-13 18-8 11-10 13-13 16-8 10-12 14-13 15-11 12-16 17-32 32-8 7-9 9-11 9-11 10-11 9-13 11-12 9-15 12-17 12-14 10-27 18-19 12-15 9-21 12-18 10-29 15-27 13-34 15-44 17-38 13-34 10-34 9-41 9-39 7-36 5-44 5-36 3h-92l-35-3-56-6-40-6-37-7-39-9-43-12-28-9-35-12-40-16-29-13-28-13-23-12-19-10-17-10-22-13-25-16-18-12-18-13-14-10-13-10-14-11-16-13-14-12-15-13-12-11-7-7-8-7-35-35-7-8-8-8-7-8-11-13-9-10-11-14-12-15-10-13-13-18-12-17-14-21-14-22-9-15-16-28-10-18-8-16-16-33-14-32-16-41-16-47-12-42-10-40-8-40-7-45-5-42-4-46v-105l6-61 5-39 7-41 9-41 9-36 11-37 16-47 18-45 19-42 17-34 12-22 14-24 9-15 15-23 7-11 24-34 9-12 11-14 14-18 9-10 9-11 10-11 7-8 12-13 7-7 7-8 19-19 8-7 11-11 8-7 14-12 10-9 11-9 14-11 15-12 16-12 17-12 20-14 16-10 17-11 17-10 21-12 22-12 19-10 28-13 31-14 38-15 40-14 29-9 41-11 39-9 43-8 50-7 52-5z" fill="#43BFCE"/>
                        <path transform="translate(944,549)" d="m0 0h17l19 3 17 6 16 8 12 8 11 9 12 12 9 12 8 13 8 19 4 16 2 15-1 18-5 21-5 11-8 15-13 16-15 16-131 131 565 1 21 2 16 4 15 6 18 11 13 12 9 11 8 14 5 11 6 20 3 19v22l-5 25-5 15-8 16-9 13-11 12-11 9-16 9-15 6-17 4-23 2h-552l-8-1 7 8 10 9 123 123 7 8 11 14 9 15 5 12 4 15 2 15v15l-3 17-7 21-9 17-12 16-11 12-14 11-13 8-15 7-15 5-15 3h-26l-17-4-19-8-13-8-13-11-8-7-9-9-6-5-6-7-6-5-7-8-315-315-9-11-9-14-8-17-6-23-1-9v-23l4-21 5-15 9-17 9-12 12-14 338-338 8-7 9-8 12-9 14-8 13-5 17-4z" fill="#FEFEFE"/>
                    </svg>
                    <h1 class="secondaryFont mainColor">Back</h1>
                </div>
            </a>
        </div>
        <!-- Profile Dropdown -->
        <div x-data="{ open: false }" class="dark:bg-white w-40 shadow flex justify-center items-center rounded-xl">
            <div @click="open = !open" class="relative border-b-4 border-transparent py-2" :class="{'border-indigo-900 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
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


    <!-- Section 1 -->
    <section class="mx-auto md:mx-10">
        <div class="flex flex-col md:flex-row justify-center items-center md:items-start max-w-full md:space-x-14">
            <!-- column 1 -->
            <div class="flex flex-col md:w-1/3 w-full overflow-hidden md:overflow-visible space-y-6 pb-10">
                <div class="bg-white text-white shadow-xl text-center py-8 rounded-2xl">
                    <div class="flex flex-col justify-center items-center opacity-90">
                        <div class="flex bg-white rounded-xl">
                            <img class="w-40 h-40 object-cover" src="{{ asset('images/Baby1.png') }}" alt="">
                        </div>
                        <div class="flex flex-col mainFont space-y-1">
                            <h1 class="text-black text-2xl">{{ $baby->name }}</h1>
                            <p class="dark:text-black/70 text-base">Age: {{ $baby->age }}</p>
                            <div class="pt-3">
                                <button type="button" class="max-w-[140px] py-2 px-4 flex justify-center items-center bg-[#43BFCE] hover:bg-[#43BFCE] focus:ring-[#FE5694] focus:ring-offset-uploadRing text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    <svg width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1344 1472q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm256 0q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm128-224v320q0 40-28 68t-68 28h-1472q-40 0-68-28t-28-68v-320q0-40 28-68t68-28h427q21 56 70.5 92t110.5 36h256q61 0 110.5-36t70.5-92h427q40 0 68 28t28 68zm-325-648q-17 40-59 40h-256v448q0 26-19 45t-45 19h-256q-26 0-45-19t-19-45v-448h-256q-42 0-59-40-17-39 14-69l448-448q18-19 45-19t45 19l448 448q31 30 14 69z"></path>
                                    </svg>
                                    Upload
                                </button>  
                            </div>                         
                        </div>
                    </div>
                </div>
                <div class="bg-white text-white shadow-2xl text-center py-8 rounded-2xl">
                    <div class="flex flex-col space-y-5">
                        <div class="flex items-start pl-8">
                            <h1 class="text-black text-lg mainFont2">Information:</h1>
                        </div>
                        <div class="flex flex-col items-start pl-4 md:pl-8 text-black space-y-4 secondaryFont text-sm">
                            <h1 class=" space-x-14 md:space-x-14">
                                <span>Gender: </span>
                                <span class="dark:text-black/70">{{ $baby->gender }}</span>
                            </h1>
                            <h1 class=" space-x-8 md:space-x-8">
                                <span>Blood Type: </span>
                                <span class="dark:text-black/70">{{ $baby->blood_type }}</span>
                            </h1>
                            <h1 class=" space-x-12 md:space-x-12">
                                <span>Allergies: </span>
                                <span class="dark:text-black/70">{{ $baby->allergies }}</span>
                            </h1>
                            <h1 class=" space-x-12 md:space-x-12">
                                <span>Diseases: </span>
                                <span class="dark:text-black/70">{{ $baby->diseases }}</span>
                            </h1>
                            <h1 class="space-x-16 md:space-x-16">
                                <span>Height: </span>
                                <span class="dark:text-black/70">{{ $baby->height }} cm</span>
                            </h1>
                            <h1 class="space-x-16 md:space-x-16">
                                <span>Weight: </span>
                                <span class="dark:text-black/70">{{ $baby->weight }} kg</span>
                            </h1>
                            <h1 class="space-x-6 md:space-x-6">
                                <span>Date of Birth: </span>
                                <span class="dark:text-black/70">{{ $baby->date_of_birth }}</span>
                            </h1>
                            <h1 class="space-x-12 md:space-x-12">
                                <span>Last Visit: </span>
                                <span class="dark:text-black/70">{{ $baby->updated_at }}</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column 2 -->
            <div class="flex flex-col md:w-3/4 w-full overflow-hidden md:overflow-visible space-y-16">
                <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-6">
                    <div class="flex-wrap w-full bg-white text-white shadow-2xl py-8 rounded-2xl">
                        <div class="flex flex-col justify-center text-black items-center space-y-2">
                            <div class="w-20 h-20">
                                <img src="{{ asset('images/heart-rate.png') }}" alt="heart-rate">
                            </div>
                            <h1 class="mainFont">Heart Rate</h1>
                            <h2 class="mainFont">
                                <span class="text-2xl">{{ $baby->heart_rate }}</span>
                                <span class="text-lg">bpm</span>
                            </h2>
                        </div>
                    </div>
                    <div class="flex-wrap w-full bg-white text-white shadow-2xl text-center py-8 rounded-2xl">
                        <div class="flex flex-col justify-center text-black items-center space-y-2">
                            <div class="w-20 h-20">
                                <img src="{{ asset('images/temperature.png') }}" alt="temperature">
                            </div>
                            <h1 class="mainFont">Body Temperature</h1>
                            <h2 class="mainFont">
                                <span class="text-2xl">{{ $baby->body_temperature }}</span>
                                <span class="text-lg">°C</span>
                            </h2>
                        </div>
                    </div>
                    <div class="flex-wrap w-full bg-white text-white shadow-2xl text-center py-8 rounded-2xl">
                        <div class="flex flex-col justify-center text-black items-center space-y-2">
                            <div class="w-20 h-20">
                                <img src="{{ asset('images/bmi.png') }}" alt="bmi">
                            </div>
                            <h1 class="mainFont">Body Mass Index</h1>
                            <h2 class="mainFont">
                                <span class="text-2xl">{{ $baby->bmi }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="flex-wrap w-full bg-white text-white shadow-2xl text-center py-8 rounded-2xl">
                    <div class="flex flex-col pl-10 space-y-6">
                        <div class="flex items-start">
                            <h1 class="text-black mainFont text-lg">Vaccination Schedule</h1>
                        </div>
                        <div class="flex flex-col md:flex-row items-start justify-start space-y-3 md:space-y-0 md:space-x-16">
                            <!-- Vaccine -->
                            @foreach ($baby->vaccinationSchedules as $vaccine)
                            <div class="flex flex-wrap text-black space-y-2">
                                <div class="flex flex-row items-start space-x-1">
                                    <div class="w-14 h-14">
                                        <img src="{{ asset('images/immunization.png') }}" alt="vaccine">
                                    </div>
                                    <div class="flex flex-col justify-start items-start mainFont">
                                        <h1 class="">{{ $vaccine->vaccination_schedule_name }}</h1>
                                        <p class="text-gray-600 text-sm">{{ $vaccine->vaccination_schedule_date }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-full mb-8 overflow-hidden bg-white rounded-2xl shadow-2xl py-8">
                    <div class="w-full overflow-x-auto pl-10 pr-10 space-y-6">
                        <div class="flex items-between justify-between mb-4">
                            <h1 class="text-black font-bold text-lg">Dietary</h1>
                        </div>
                        <table class="w-full">
                            <thead>
                                <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 uppercase border-gray-600">
                                    <th class="px-4 py-3">Age</th>
                                    <th class="px-4 py-3">Preference</th>
                                    <th class="px-4 py-3">Recommendation</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white font-mono">
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">{{ $baby->age }}</td>
                                    <td class="px-4 py-3 border">{{ $baby->dietary_preferences }}</td>
                                    <td class="px-4 py-3 border">{{ $baby->dietary_recommendations }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section 1 -->

    <!-- Section 2 -->
    <section class="mx-auto md:mx-10 font-mono py-20 md:py-10"> 
        <div class="w-full mb-8 overflow-hidden bg-white rounded-2xl shadow-2xl">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-600">
                            <th class="py-6 text-lg font-semibold text-gray-900 text-left uppercase pl-5" 
                                colspan="3">Prescriptions</th>
                            <th>                            
                                <button id="toggleCalendar" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">
                                    Open Calendar
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 border-b border-gray-600">
                            <th class="px-4 py-3">Medical Drug</th>
                            <th class="px-4 py-3">Purpose</th>
                            <th class="px-4 py-3">Instructions</th>
                            <th class="px-4 py-3">Duration</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($baby->prescriptions as $prescriptions)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="{{ asset('images/immunization.png') }}" alt="history" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-black">{{ $prescriptions->medical_drug }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">{{ $prescriptions->purpose }}</td>
                            <td class="px-4 py-3 text-ms font-semibold border">{{ $prescriptions->instructions }}</td>
                            <td class="px-4 py-3 text-sm border">{{ $prescriptions->duration }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Modal Calendar Section (Initially Hidden) -->
                <div id="calendarModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-lg w-full">
                        <div class="flex items-center justify-between px-6 py-3 bg-gray-700">
                            <button id="prevMonth" class="bg-gray-700 text-white px-4 py-2 rounded-lg">Previous</button>
                            <h2 id="currentMonth" class="text-white"></h2>
                            <button id="nextMonth" class="bg-gray-700 text-white px-4 py-2 rounded-lg">Next</button>
                        </div>
                        <div class="grid grid-cols-7 gap-2 p-4" id="calendar">
                            <!-- Calendar Days Go Here -->
                        </div>
                        <div class="px-6 py-4">
                            <button id="closeCalendar" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                                Close Calendar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Calendar -->
            </div>
        </div>
    </section>
    <!-- End of Section 2 -->

    <!-- Section 3 -->
    <section class="mx-auto md:mx-10 font-mono py-20 md:py-10">
        <div class="w-full mb-8 overflow-hidden bg-white rounded-2xl shadow-2xl">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-600">
                            <th class="py-6 text-lg font-semibold text-gray-900 text-left uppercase pl-5" 
                            colspan="4">Vaccination History</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 border-b border-gray-600">
                            <th class="px-4 py-3">Pediatrician</th>
                            <th class="px-4 py-3">Vaccination Programs</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @if ($baby->vaccinationHistories && $baby->vaccinationHistories->isNotEmpty())
                            @foreach ($baby->vaccinationHistories as $vaccinationHistory)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="{{ asset('images/immunization.png') }}" alt="history" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-black">{{ $vaccinationHistory->pediatrician_name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-ms font-semibold border">{{ $vaccinationHistory->program_name }}</td>
                                <td class="px-4 py-3 text-xs border">
                                    @switch ($vaccinationHistory->status)
                                        @case('Done')
                                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">{{ $vaccinationHistory->status }}</span>
                                            @break
                                        @case('Rescheduled')
                                            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-sm"> {{ $vaccinationHistory->status }}</span>
                                            @break
                                        @case('Cancelled')
                                            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm">{{ $vaccinationHistory->status }}</span>
                                            @break
                                        @default
                                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">{{ $vaccinationHistory->status }}</span>
                                    @endswitch
                                </td>
                                <td class="px-4 py-3 text-sm border">{{ $vaccinationHistory->vaccination_date }}</td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 py-4">
                                No vaccination history has been recorded yet.
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End of Section 3 -->

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
</body>
</html>