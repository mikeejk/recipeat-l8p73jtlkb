<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <style>
        input:before {
            content: '';
            position: absolute;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            top: 0;
            left: 0;
            transform: scale(1.1);
            box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.2);
            background-color: #3F4044;
            transition: .2s ease-in-out;
        }

        input:checked {
            @apply: bg-gray-400;
            background-color: #000000;
        }

        input:checked:before {
            left: 1.25rem;
        }

    </style>
</head>

<body class="antialiased bg-black">

    <header class="flex justify-evenly py-7 items-center" style="background-color: rgba(20, 20, 20, 1)">

        <div class="flex space-x-4">
            <i class="fas fa-bars text-white text-3xl"></i>
            <img src="images\explore_header_logo.png" alt="logo" class="">
        </div>

        <!-- Search Bar -->
        @include('searchBar')

        <div class="flex space-x-2 items-center justify-center">
            <a href="/HomePage" class="flex">
                <div class="flex flex-col items-center">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.0799 18.0482H5.11988C3.66388 18.0482 2.33588 16.9282 2.09588 15.4882L1.03188 9.12018C0.863882 8.12818 1.34389 6.85619 2.13589 6.22419L7.67989 1.78415C8.75189 0.920147 10.4399 0.928155 11.5199 1.79215L17.0639 6.22419C17.8479 6.85619 18.3279 8.12818 18.1679 9.12018L17.1039 15.4882C16.8639 16.9042 15.5119 18.0482 14.0799 18.0482ZM9.59189 2.35216C9.16789 2.35216 8.74388 2.48014 8.43188 2.72814L2.88789 7.16818C2.43189 7.53618 2.11989 8.35214 2.21589 8.92814L3.27989 15.2962C3.42389 16.1362 4.26388 16.8482 5.11988 16.8482H14.0799C14.9359 16.8482 15.7759 16.1362 15.9199 15.2881L16.9839 8.92018C17.0799 8.34418 16.7599 7.52017 16.3119 7.16017L10.7679 2.72814C10.4479 2.48014 10.0239 2.35216 9.59189 2.35216Z"
                            fill="white" />
                        <path
                            d="M9.6 13C8.168 13 7 11.832 7 10.4C7 8.96805 8.168 7.80005 9.6 7.80005C11.032 7.80005 12.2 8.96805 12.2 10.4C12.2 11.832 11.032 13 9.6 13ZM9.6 9.00005C8.832 9.00005 8.2 9.63205 8.2 10.4C8.2 11.168 8.832 11.8 9.6 11.8C10.368 11.8 11 11.168 11 10.4C11 9.63205 10.368 9.00005 9.6 9.00005Z"
                            fill="white" />
                    </svg>
                </div>

                <h1 class=" text-white">Home</h1>
            </a>
        </div>

        <div class="flex space-x-2 items-center">
            <a href="/exploreRecipe" class="flex">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.24789 14.3999C9.23989 14.3999 9.23989 14.3999 9.23189 14.3999C8.39989 14.3919 7.69589 13.8719 7.44789 13.0799L5.88789 8.05588C5.67989 7.37588 5.85589 6.64788 6.35989 6.15188C6.85589 5.65588 7.57589 5.47986 8.24789 5.68786L13.2799 7.24787C14.0799 7.49587 14.5999 8.19988 14.6079 9.03188C14.6159 9.86388 14.1119 10.5679 13.3199 10.8319L11.9439 11.2959C11.7359 11.3679 11.5839 11.5199 11.5119 11.7199L11.0399 13.1039C10.7759 13.8959 10.0719 14.3999 9.24789 14.3999ZM7.67189 6.79988C7.43189 6.79988 7.27189 6.92788 7.19989 6.99988C7.01589 7.18388 6.95189 7.44787 7.03189 7.69587L8.5919 12.7199C8.7279 13.1599 9.1199 13.1999 9.2399 13.1999C9.3359 13.1919 9.74389 13.1679 9.88789 12.7279L10.3599 11.3439C10.5439 10.7919 10.9919 10.3439 11.5439 10.1599L12.9199 9.69587C12.9199 9.69587 12.9199 9.69587 12.9279 9.69587C13.3679 9.55187 13.3999 9.15987 13.3999 9.04787C13.3999 8.92787 13.3599 8.53588 12.9199 8.39988L7.88789 6.83987C7.80789 6.80787 7.73589 6.79988 7.67189 6.79988Z"
                        fill="#FAFAFA" />
                    <path
                        d="M9.79995 18.2C5.05595 18.2 1.19995 14.344 1.19995 9.6C1.19995 4.856 5.05595 1 9.79995 1C14.544 1 18.4 4.856 18.4 9.6C18.4 14.344 14.544 18.2 9.79995 18.2ZM9.79995 2.2C5.71995 2.2 2.39995 5.52 2.39995 9.6C2.39995 13.68 5.71995 17 9.79995 17C13.88 17 17.2 13.68 17.2 9.6C17.2 5.52 13.88 2.2 9.79995 2.2Z"
                        fill="#FAFAFA" />
                </svg>
                <h1 class="text-white">Explore</h1>
            </a>
        </div>

        <div class="flex space-x-2 items-center">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.5 18.248C9.94799 18.248 9.42799 17.968 9.05999 17.48L7.85999 15.88C7.83599 15.848 7.73999 15.808 7.69999 15.8H7.29999C3.96399 15.8 1.89999 14.896 1.89999 10.4V6.4C1.89999 2.864 3.76399 1 7.29999 1H13.7C17.236 1 19.1 2.864 19.1 6.4V10.4C19.1 13.936 17.236 15.8 13.7 15.8H13.3C13.236 15.8 13.18 15.832 13.14 15.88L11.94 17.48C11.572 17.968 11.052 18.248 10.5 18.248ZM7.29999 2.2C4.43599 2.2 3.09999 3.536 3.09999 6.4V10.4C3.09999 14.016 4.33999 14.6 7.29999 14.6H7.69999C8.10799 14.6 8.57199 14.832 8.81999 15.16L10.02 16.76C10.3 17.128 10.7 17.128 10.98 16.76L12.18 15.16C12.444 14.808 12.86 14.6 13.3 14.6H13.7C16.564 14.6 17.9 13.264 17.9 10.4V6.4C17.9 3.536 16.564 2.2 13.7 2.2H7.29999Z"
                    fill="#FAFAFA" />
                <path
                    d="M14.5 7.00005H6.49999C6.17199 7.00005 5.89999 6.72805 5.89999 6.40005C5.89999 6.07205 6.17199 5.80005 6.49999 5.80005H14.5C14.828 5.80005 15.1 6.07205 15.1 6.40005C15.1 6.72805 14.828 7.00005 14.5 7.00005Z"
                    fill="#FAFAFA" />
                <path
                    d="M11.3 11H6.49999C6.17199 11 5.89999 10.728 5.89999 10.4C5.89999 10.072 6.17199 9.80005 6.49999 9.80005H11.3C11.628 9.80005 11.9 10.072 11.9 10.4C11.9 10.728 11.628 11 11.3 11Z"
                    fill="#FAFAFA" />
            </svg>

            <h1 class="text-white">Inbox</h1>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm">3</h6>
            </div>
        </div>

        <div class="flex space-x-2 items-center">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.41488 15.2752C7.68125 15.2752 5.94762 14.9999 4.30327 14.4493C3.67827 14.2335 3.20208 13.7946 2.99375 13.2216C2.77798 12.6487 2.85238 12.0163 3.19464 11.4508L4.0503 10.0297C4.22887 9.73206 4.39256 9.13682 4.39256 8.78712V6.63682C4.39256 3.86897 6.64702 1.6145 9.41488 1.6145C12.1827 1.6145 14.4372 3.86897 14.4372 6.63682V8.78712C14.4372 9.12938 14.6009 9.73206 14.7795 10.0371L15.6277 11.4508C15.9476 11.9865 16.0071 12.6338 15.7914 13.2216C15.5756 13.8094 15.1068 14.2559 14.519 14.4493C12.8821 14.9999 11.1485 15.2752 9.41488 15.2752ZM9.41488 2.73057C7.26458 2.73057 5.50863 4.47908 5.50863 6.63682V8.78712C5.50863 9.33028 5.28542 10.1338 5.01012 10.6026L4.15446 12.0237C3.99077 12.299 3.94613 12.5892 4.04286 12.8347C4.13214 13.0877 4.35536 13.2812 4.66042 13.3853C7.77054 14.427 11.0667 14.427 14.1768 13.3853C14.4446 13.296 14.653 13.0952 14.7497 12.8273C14.8464 12.5594 14.8241 12.2693 14.6753 12.0237L13.8196 10.6026C13.5369 10.119 13.3211 9.32283 13.3211 8.77968V6.63682C13.3211 4.47908 11.5726 2.73057 9.41488 2.73057Z"
                    fill="white" />
                <path
                    d="M10.7988 2.9315C10.7467 2.9315 10.6946 2.92406 10.6426 2.90918C10.4268 2.84966 10.2185 2.80501 10.0176 2.77525C9.38512 2.69341 8.775 2.73805 8.20208 2.90918C7.99375 2.97614 7.77054 2.90918 7.62917 2.75293C7.4878 2.59668 7.44315 2.37347 7.525 2.17257C7.83006 1.39132 8.57411 0.87793 9.42232 0.87793C10.2705 0.87793 11.0146 1.38388 11.3196 2.17257C11.394 2.37347 11.3568 2.59668 11.2155 2.75293C11.1039 2.87198 10.9476 2.9315 10.7988 2.9315Z"
                    fill="white" />
                <path
                    d="M9.41488 16.9716C8.67827 16.9716 7.96399 16.674 7.44315 16.1531C6.92232 15.6323 6.6247 14.918 6.6247 14.1814H7.74077C7.74077 14.6204 7.91935 15.0519 8.23185 15.3644C8.54434 15.6769 8.97589 15.8555 9.41488 15.8555C10.3375 15.8555 11.089 15.104 11.089 14.1814H12.2051C12.2051 15.7216 10.9551 16.9716 9.41488 16.9716Z"
                    fill="white" />
            </svg>
            <a href="/notifications" class="text-white">Notifications</a>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm">{{ count(auth()->user()->unreadnotifications) }}</h6>
            </div>
        </div>
    </header>
    <section class="flex" style="background:rgba(255, 255, 255, 0.1);">
        <div class="w-3/12 flex justify-start items-center space-x-8 py-1 px-10 font-montserrat">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.57 18.8201C9.76 18.8201 9.95 18.7501 10.1 18.6001C10.39 18.3101 10.39 17.8301 10.1 17.5401L4.56 12.0001L10.1 6.46012C10.39 6.17012 10.39 5.69012 10.1 5.40012C9.81 5.11012 9.33 5.11012 9.04 5.40012L2.97 11.4701C2.68 11.7601 2.68 12.2401 2.97 12.5301L9.04 18.6001C9.19 18.7501 9.38 18.8201 9.57 18.8201Z"
                    fill="white" />
                <path
                    d="M3.67 12.75H20.5C20.91 12.75 21.25 12.41 21.25 12C21.25 11.59 20.91 11.25 20.5 11.25H3.67C3.26 11.25 2.92 11.59 2.92 12C2.92 12.41 3.26 12.75 3.67 12.75Z"
                    fill="white" />
            </svg>
            <div class="">
                <h2 class="text-gray-400 text-sm">You Searced for </h2>
                <h1 class="text-white font-semibold text-lg">{{ $t }}</h1>
            </div>

        </div>
        <div class="w-9/12  py-5">
            {{-- <form action="/searchResults" method="post"> --}}
                <div class="flex justify-evenly">
                    <h1 class="text-white">Sort by</h1>
                    <button type="radio" class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: white;">
                        <h1 class="text-gray-800">Easy to cook</h1>
                    </button>

                    <button class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">Low cooking time</h1>
                    </button>

                    <button class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">Fewer Ingredients</h1>
                    </button>

                    <button value="chef" class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">From Top Chefs</h1>
                    </button>

                    <button class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">Sweet</h1>
                    </button>

                    <button value="high" class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">Spicy</h1>
                    </button>

                    <button class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">Sour</h1>
                    </button>

                    <button class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                        style="background: #141414;">
                        <h1 class="text-white">Bitter</h1>
                    </button>
                </div>
            {{-- </form> --}}
        </div>

    </section>

    <main class="mx-10 flex space-x-8 py-5">

        <section class="w-7/12  py-4">
            <div class="flex justify-between mb-4">
                <h1 class="text-white font-semibold text-lg tracking-wider">Top Recipes</h1>
            </div>
            @if (isset($recipe))
                <div class="flex flex-wrap items-center">
                    @if (count($recipe) > 0)
                        @foreach ($recipe as $recipes)
                            <div class="w-1/2 h-auto flex flex-col rounded-md px-2 py-2">
                                <div class="py-2 flex space-x-2">
                                    @if ($recipes->user->hasrole('Chef'))
                                        @if (!empty(
                                            DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()
                                        ))
                                            <img src="{{ asset('storage/public/' .DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()) }}"
                                                class="h-12 w-12 rounded-full">
                                        @else
                                            <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                                                class="h-12 w-12 rounded-full">
                                        @endif
                                    @else
                                        @if (!empty(
                                            DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()
                                        ))
                                            <img src="{{ asset('storage/public/' .DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()) }}"
                                                class="h-12 w-12 rounded-full">
                                        @else
                                            <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                                                class="h-12 w-12 rounded-full">
                                        @endif

                                        {{-- <img src="{{ asset('storage/public/' .DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()) }}"
                                        class="h-12 w-12 rounded-full"> --}}
                                    @endif


                                    <div class="flex flex-col  justify-center text-white">
                                        <p class="font-semibold">{{ $recipes->user->name }}
                                            {{-- {{ dd($recipes->chef_questions()) }} --}}
                                        </p>

                                        @if ($recipes->user->hasrole('Chef'))
                                            {{ DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('designation')->first() }}
                                        @elseif ($recipes->user->hasrole('Home-Chef'))
                                            {{ DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('mail')->first() }}
                                        @else
                                            <h5 class="text-sm text-gray-400">User</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <img class="h-72 rounded-md w-full"
                                        src="{{ $recipes->getFirstMediaUrl('cover') }}" alt="recipe">
                                </div>
                                <div class="flex justify-between items-center backdrop-blur-lg py-2 px-4 w-full"
                                    style="background:rgba(255, 255, 255, 0.1);">
                                    <p class="text-white">{{ $recipes->recipe_name }}</p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.43 18.8201C14.24 18.8201 14.05 18.7501 13.9 18.6001C13.61 18.3101 13.61 17.8301 13.9 17.5401L19.44 12.0001L13.9 6.46012C13.61 6.17012 13.61 5.69012 13.9 5.40012C14.19 5.11012 14.67 5.11012 14.96 5.40012L21.03 11.4701C21.32 11.7601 21.32 12.2401 21.03 12.5301L14.96 18.6001C14.81 18.7501 14.62 18.8201 14.43 18.8201Z"
                                            fill="white" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="flex justify-between space-x-2">
                                    <div class="flex justify-start space-x-1 py-2">
                                        <div class="py-1 rounded-md flex items-center justify-center px-1 space-x-1"
                                            style="background: rgba(255, 255, 255, 0.2);">
                                            <svg width="20" height="20" viewBox="0 0 13 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                                    fill="white" />
                                                <path
                                                    d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                                    fill="white" />
                                                <path
                                                    d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                                    fill="white" />
                                            </svg>
                                            <h1 class="text-xs text-white">{{ $recipes->cooking_time }} mins</h1>
                                        </div>

                                        <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                            style="background: rgba(255, 255, 255, 0.2);">

                                            <h1 class="text-xs text-white">
                                                {{ DB::table('recipe__ingredients')->join('recipes', 'recipes.id', '=', 'recipe__ingredients.recipe_id')->where('recipes.id', $recipes->id)->count() }}
                                                Ingredients</h1>
                                            {{-- SELECT PINBOARD_ID,COUNT(PINBOARD_ID) FROM PIN_RECIPES LEFT JOIN PINBOARDS ON PIN_RECIPES.PINBOARD_ID=PINBOARDS.ID WHERE PIN_RECIPES.USER_ID= 3  GROUP BY PIN_RECIPES.PINBOARD_ID --}}


                                        </div>

                                        <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                            style="background: rgba(255, 255, 255, 0.2);">
                                            <h1 class=" text-xs text-white">
                                                @if ($recipes->bud_sweet == 'High')
                                                    For
                                                    Sweet tastebuds
                                                @elseif($recipes->bud_sour == 'High')
                                                    For Sour tastebuds
                                                @elseif($recipes->bud_salt == 'High')
                                                    For salty tastebuds
                                                @elseif($recipes->bud_spicy == 'High')
                                                    For Spicy tastebuds
                                                @elseif($recipes->bud_astringent == 'High')
                                                    For astringent tastebuds
                                                @else($recipes->bud_bitter =="High")
                                                    For bitter tastebuds
                                                @endif

                                            </h1>
                                        </div>
                                    </div>
                                    <form action="/searchResults/{recipes->id}" method="post" class="flex items-center">
                                        @csrf
                                        <div class="flex items-center text-xs bg-black">
                                            <button type="submit">
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                                        fill="#292D32" />
                                                    <path
                                                        d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                                        fill="#292D32" />
                                                    <path
                                                        d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                                        fill="#292D32" />
                                                </svg>
                                            </button>
                                            <input type="hidden" name="recipe_id" id="recipe_id"
                                                value="{{ $recipes->id }}" />
                                            <select name="pinboard_id" id="pinboard_id"
                                                value="{{ isset($_GET['pinboard_id']) ? $_GET['pinboard_id'] : '' }} " class="bg-black text-white">
                                                <option disabled selected value="">Add To Collection</option>
                                                <option value="1">MyFavourite</option>
                                                <option value="2">FamilyFav</option>
                                                <option value="3">FavDesert</option>
                                                <option value="4">FavDinner</option>
                                            </select>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="w-full">
                            <img src="https://www.masho.com/commonincludes/images/icons/floatfoot/nosearch.svg"
                                class="w-full h-full">
                            <h1 class="mt-4 text-center text-xl font-bold text-white">No Results Found</h1>
                        </div>
                    @endif

                    {{-- <div class="w-1/2 h-auto flex flex-col rounded-md px-2 py-2">
                    <div class="py-2 flex space-x-2">
                        <img src="https://assets.bizjournals.com/static/img/potm/marketing/team-success-img.jpg"
                            class="h-12 w-12 rounded-full">
                        <div class="flex flex-col  justify-center text-white">
                            <p class="font-semibold">Mikee JK</p>
                            <h5 class="text-sm text-gray-400">Executive Chef, India</h5>
                        </div>
                    </div>
                    <div class="mt-4">
                        <img class="h-72 rounded-md w-full"
                            src="https://img.taste.com.au/I1LuBTWr/taste/2020/04/may20_coconut-panna-cotta-160733-1.jpg">
                    </div>
                    <div class="flex justify-between items-center backdrop-blur-lg py-2 px-4 w-full"
                        style="background:rgba(255, 255, 255, 0.1);">
                        <p class="text-white">Coconut Panna Cotta</p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.43 18.8201C14.24 18.8201 14.05 18.7501 13.9 18.6001C13.61 18.3101 13.61 17.8301 13.9 17.5401L19.44 12.0001L13.9 6.46012C13.61 6.17012 13.61 5.69012 13.9 5.40012C14.19 5.11012 14.67 5.11012 14.96 5.40012L21.03 11.4701C21.32 11.7601 21.32 12.2401 21.03 12.5301L14.96 18.6001C14.81 18.7501 14.62 18.8201 14.43 18.8201Z"
                                fill="white" />
                            <path
                                d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div class="flex justify-start space-x-1 py-2">
                            <div class="py-1 rounded-md flex items-center justify-center px-1 space-x-1"
                                style="background: rgba(255, 255, 255, 0.2);">
                                <svg width="20" height="20" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                        fill="white" />
                                    <path
                                        d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                        fill="white" />
                                    <path
                                        d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                        fill="white" />
                                </svg>
                                <h1 class="text-xs text-white">20 mins</h1>
                            </div>
                            <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                style="background: rgba(255, 255, 255, 0.2);">

                                <h1 class="text-xs text-white">8 Ingredients</h1>
                            </div>
                            <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                style="background: rgba(255, 255, 255, 0.2);">
                                <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                    fill="#292D32" />
                                <path
                                    d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                    fill="#292D32" />
                                <path
                                    d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                    fill="#292D32" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-1/2 h-auto flex flex-col rounded-md px-2 py-2">
                    <div class="py-2 flex space-x-2">
                        <img src="https://assets.bizjournals.com/static/img/potm/marketing/team-success-img.jpg"
                            class="h-12 w-12 rounded-full">
                        <div class="flex flex-col  justify-center text-white">
                            <p class="font-semibold">Priya Govindharaj</p>
                            <h5 class="text-sm text-gray-400">Executive Chef, D’Italia</h5>
                        </div>
                    </div>
                    <div class="mt-4">
                        <img class="h-72 rounded-md w-full"
                            src="https://www.wholesomeyum.com/wp-content/uploads/2020/09/wholesomeyum-keto-flan-recipe-33.jpg">
                    </div>
                    <div class="flex justify-between items-center backdrop-blur-lg py-2 px-4 w-full"
                        style="background:rgba(255, 255, 255, 0.1);">
                        <p class="text-white">Keto flan recipe</p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.43 18.8201C14.24 18.8201 14.05 18.7501 13.9 18.6001C13.61 18.3101 13.61 17.8301 13.9 17.5401L19.44 12.0001L13.9 6.46012C13.61 6.17012 13.61 5.69012 13.9 5.40012C14.19 5.11012 14.67 5.11012 14.96 5.40012L21.03 11.4701C21.32 11.7601 21.32 12.2401 21.03 12.5301L14.96 18.6001C14.81 18.7501 14.62 18.8201 14.43 18.8201Z"
                                fill="white" />
                            <path
                                d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div class="flex justify-start space-x-1 py-2">
                            <div class="py-1 rounded-md flex items-center justify-center px-1 space-x-1"
                                style="background: rgba(255, 255, 255, 0.2);">
                                <svg width="20" height="20" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                        fill="white" />
                                    <path
                                        d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                        fill="white" />
                                    <path
                                        d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                        fill="white" />
                                </svg>
                                <h1 class="text-xs text-white">20 mins</h1>
                            </div>
                            <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                style="background: rgba(255, 255, 255, 0.2);">

                                <h1 class="text-xs text-white">8 Ingredients</h1>
                            </div>
                            <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                style="background: rgba(255, 255, 255, 0.2);">
                                <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                    fill="#292D32" />
                                <path
                                    d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                    fill="#292D32" />
                                <path
                                    d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                    fill="#292D32" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-1/2 h-auto flex flex-col rounded-md px-2 py-2">
                    <div class="py-2 flex space-x-2">
                        <img src="https://assets.bizjournals.com/static/img/potm/marketing/team-success-img.jpg"
                            class="h-12 w-12 rounded-full">
                        <div class="flex flex-col  justify-center text-white">
                            <p class="font-semibold">Nitin Chaudhary</p>
                            <h5 class="text-sm text-gray-400">Executive Chef, D’Italia</h5>
                        </div>
                    </div>
                    <div class="mt-4">
                        <img class="h-72 rounded-md w-full"
                            src="https://lh3.googleusercontent.com/5HKWdQBqIedWousrI6w13XYPYZhCX5suhjvD7_TQF-Ywnw0qR50YCgD13S3qKghciWrYKXwpSK_ysvSWU-DSJA=w1280-h1280-c-rj-v1-e365">
                    </div>
                    <div class="flex justify-between items-center backdrop-blur-lg py-2 px-4 w-full"
                        style="background:rgba(255, 255, 255, 0.1);">
                        <p class="text-white">Carrot Velvet Cake</p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.43 18.8201C14.24 18.8201 14.05 18.7501 13.9 18.6001C13.61 18.3101 13.61 17.8301 13.9 17.5401L19.44 12.0001L13.9 6.46012C13.61 6.17012 13.61 5.69012 13.9 5.40012C14.19 5.11012 14.67 5.11012 14.96 5.40012L21.03 11.4701C21.32 11.7601 21.32 12.2401 21.03 12.5301L14.96 18.6001C14.81 18.7501 14.62 18.8201 14.43 18.8201Z"
                                fill="white" />
                            <path
                                d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div class="flex justify-between space-x-2">
                        <div class="flex justify-start space-x-1 py-2">
                            <div class="py-1 rounded-md flex items-center justify-center px-1 space-x-1"
                                style="background: rgba(255, 255, 255, 0.2);">
                                <svg width="20" height="20" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                        fill="white" />
                                    <path
                                        d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                        fill="white" />
                                    <path
                                        d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                        fill="white" />
                                </svg>
                                <h1 class="text-xs text-white">20 mins</h1>
                            </div>
                            <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                style="background: rgba(255, 255, 255, 0.2);">

                                <h1 class="text-xs text-white">8 Ingredients</h1>
                            </div>
                            <div class="py-1 rounded-md flex items-center justify-center px-1 "
                                style="background: rgba(255, 255, 255, 0.2);">
                                <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                    fill="#292D32" />
                                <path
                                    d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                    fill="#292D32" />
                                <path
                                    d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                    fill="#292D32" />
                            </svg>
                        </div>
                    </div>
                </div> --}}
                </div>
            @else
                <div class="w-full">
                    <img src="https://www.masho.com/commonincludes/images/icons/floatfoot/nosearch.svg"
                        class="w-full h-full">
                    <h1 class="mt-4 text-center text-xl font-bold text-white">No Results Found</h1>
                </div>
            @endif
        </section>
        <section class="w-5/12  py-4">
            <div class="flex justify-between">
                <h1 class="text-white font-semibold text-lg">My Collections</h1>
                <h1 class="text-gray-500 text-xs items-center flex">View All
                    <svg class="ml-1 text-xl" width="14" height="14" viewBox="0 0 4 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                            fill="#454545" />
                    </svg>
                </h1>
            </div>

            @if (count($collections) > 0)
                <div class="flex justify-between space-x-4 items-center py-5">
                     @foreach ($collections as $collection)
                         @if ($collection->id == 1)
                            <a href="/myfavourite"
                                class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                            @elseif($collection->id == 2)
                                <a href="/familyfav"
                                    class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                                @elseif($collection->id == 3)
                                    <a href="/favdesert"
                                        class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                                    @else
                                        <a href="/favdinner"
                                            class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                        @endif
                    {{-- @switch($collection->id)
                        @case(1)
                        <a href="/myfavourite"
                        class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                        @break

                        @case(2)
                        <a href="/familyfav"
                        class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                        @break
                        @case(3)
                        <a href="/favdesert"
                        class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                        @case(3)
                        <a href="/favdinner"
                        class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                        @default
                            InActive
                    @endswitch --}}
                     <div class="flex justify-center -mt-5 mb-2">
                        <img src="https://www.thespruceeats.com/thmb/cO72JFFH0TCAufENSxUfqE8TmKw=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/vegan-tofu-tikka-masala-recipe-3378484-hero-01-d676687a7b0a4640a55be669cba73095.jpg"
                            class="h-16 w-16 rounded-full" alt="recipe">
                    </div>
                    <h1 class="text-white font-semibold flex justify-center"> {{ $collection->pin_name }}
                    </h1>
                    <h1 class="text-gray-500 flex text-sm justify-center items-center">
                        {{ DB::table('pin_recipes')->join('pinboards', 'pinboards.id', '=', 'pin_recipes.pinboard_id')->where('pinboards.id', $collection->id)->where('pin_recipes.user_id', auth()->user()->id)->count() }}
                        <h1 class="text-gray-500 flex text-sm justify-center items-center">
                            Recipes
                            <svg class="mt-1  text-xl" width="12" height="12" viewBox="0 0 4 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                                    fill="#454545" />
                            </svg>
                        </h1>
                        <h1 class="text-white  flex justify-center mt-2 text-xs">By @wdmorrisjr</h1>
                        </a>
            @endforeach
        @else
            <h1 class="text-white">No Collection Found</h1>
            @endif

            {{-- <div class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                    <div class="flex justify-center -mt-5 mb-2">
                        <img src="https://img-global.cpcdn.com/recipes/c5fc07a2fc2d25eb/1200x630cq70/photo.jpg"
                            class="h-16 w-16 rounded-full" alt="recipe">
                    </div>

                    <p class="text-white font-semibold flex justify-center text-ellipsis">Breakfasts</p>
                    <h1 class="text-gray-500 flex text-sm justify-center items-center">5 Recipes
                        <svg class="mt-1  text-xl" width="12" height="12" viewBox="0 0 4 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                                fill="#454545" />
                        </svg>
                    </h1>
                    <h1 class="text-white  flex justify-center mt-2 text-xs">By @wdmorrisjr</h1>
                </div> --}}

            {{-- <div class="py-2 px-1 rounded-lg w-1/3  border border-gray-700 hover:bg-gray-700 bg-slate-900">
                    <div class="flex justify-center -mt-5 mb-2">
                        <img src="https://media.istockphoto.com/photos/delicious-panna-cotta-with-berries-picture-id182026106?k=20&m=182026106&s=612x612&w=0&h=-12CnyO0be_A88616ir0fAWV4Y6ay0WDzquv2crWSNU="
                            class="h-16 w-16 rounded-full" alt="recipe">
                    </div>

                    <h1 class="text-white font-semibold flex justify-center">Desserts</h1>
                    <h1 class="text-gray-500 flex text-sm justify-center items-center">7 Recipes
                        <svg class="mt-1 text-xl" width="12" height="12" viewBox="0 0 4 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                                fill="#454545" />
                        </svg>
                    </h1>
                    <h1 class="text-white  flex justify-center mt-2 text-xs">By @wdmorrisjr</h1> --}}
            {{-- </div> --}}

            {{-- <div class="py-2 px-1 rounded-lg w-1/3 border border-gray-700 hover:bg-gray-700 bg-slate-900">
                    <div class="flex justify-center -mt-5 mb-2">
                        <img src="https://www.thespruceeats.com/thmb/cO72JFFH0TCAufENSxUfqE8TmKw=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/vegan-tofu-tikka-masala-recipe-3378484-hero-01-d676687a7b0a4640a55be669cba73095.jpg"
                            class="h-16 w-16 rounded-full" alt="recipe">
                    </div>

                    <h1 class="text-white font-semibold flex justify-center">Oriental</h1>
                    <h1 class="text-gray-500 flex text-sm justify-center items-center">3 Recipes
                        <svg class="mt-1  text-xl" width="12" height="12" viewBox="0 0 4 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                                fill="#454545" />
                        </svg>
                    </h1>
                    <h1 class="text-white  flex justify-center mt-2 text-xs">By @wdmorrisjr</h1>
                </div> --}}
            </div>

            <div class="py-4">
                <div class="flex justify-between mb-4">
                    <h1 class="text-white font-semibold text-lg">Related Chefs</h1>
                </div>

                <div class="flex justify-between items-center py-4">
                    <div class="flex space-x-4 items-center">
                        <img src="https://www.joancanto.com/wp-content/uploads/2017/04/H10B2913.jpg"
                            class="rounded-lg h-14 w-14" alt="user">
                        <div>
                            <h1 class="text-white font-semibold break-words">David Morris</h1>
                            <h3 class="text-gray-500 text-sm break-words">@wdmorrisjr</h3>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">43</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Recipes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">3.5K</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Likes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">16</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Featured</h3>
                    </div>
                    <button
                        class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>

                    <button class="border text-gray-200 py-2 text-center w-20 rounded-md text-xs font-semibold">View
                        Profile</button>
                </div>

                <div class="flex justify-between items-center py-4">
                    <div class="flex space-x-4 items-center">
                        <img src="https://www.joancanto.com/wp-content/uploads/2017/04/H10B2913.jpg"
                            class="rounded-lg h-14 w-14" alt="user">
                        <div>
                            <h1 class="text-white font-semibold break-words">David Morris</h1>
                            <h3 class="text-gray-500 text-sm break-words">@wdmorrisjr</h3>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">43</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Recipes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">3.5K</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Likes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">16</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Featured</h3>
                    </div>
                    <button
                        class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>

                    <button class="border text-gray-200 py-2 text-center w-20 rounded-md text-xs font-semibold">View
                        Profile</button>
                </div>

                <div class="flex justify-between items-center py-4">
                    <div class="flex space-x-4 items-center">
                        <img src="https://www.joancanto.com/wp-content/uploads/2017/04/H10B2913.jpg"
                            class="rounded-lg h-14 w-14" alt="user">
                        <div>
                            <h1 class="text-white font-semibold break-words">David Morris</h1>
                            <h3 class="text-gray-500 text-sm break-words">@wdmorrisjr</h3>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">43</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Recipes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">3.5K</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Likes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">16</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Featured</h3>
                    </div>
                    <button
                        class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>

                    <button class="border text-gray-200 py-2 text-center w-20 rounded-md text-xs font-semibold">View
                        Profile</button>
                </div>

                <div class="flex justify-between items-center py-4">
                    <div class="flex space-x-4 items-center">
                        <img src="https://www.joancanto.com/wp-content/uploads/2017/04/H10B2913.jpg"
                            class="rounded-lg h-14 w-14" alt="user">
                        <div>
                            <h1 class="text-white font-semibold break-words">David Morris</h1>
                            <h3 class="text-gray-500 text-sm break-words">@wdmorrisjr</h3>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">43</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Recipes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">3.5K</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Likes</h3>
                    </div>
                    <div>
                        <h1 class="text-white font-semibold break-words text-center">16</h1>
                        <h3 class="text-gray-500 text-xs break-words text-center">Featured</h3>
                    </div>
                    <button
                        class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>

                    <button class="border text-gray-200 py-2 text-center w-20 rounded-md text-xs font-semibold">View
                        Profile</button>
                </div>
            </div>



        </section>

    </main>

</body>

</html>
