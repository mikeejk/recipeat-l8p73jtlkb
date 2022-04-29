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
        <div class="pt-2 w-1/3 text-gray-600">
            <div class=" w-full rounded-lg flex" style="background-color:
            rgba(37, 37, 37, 1)">
                <button type="submit" class=" right-0 top-0 pl-4 ">
                    <svg class="text-gray-700 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
                <input class="h-10 px-5 w-96 rounded-lg text-sm focus:outline-none" style="background-color:
                rgba(37, 37, 37, 1)" type="search" name="search" placeholder="Search for recipes, chefs and more">

                <img src="images\explore_search_filter.png" class="my-2 mx-2 flex justify-end" />
            </div>

        </div>

        <div class="flex space-x-2 items-center justify-center">
            <div class="flex flex-col items-center">
                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.86 6.37009L12.93 0.830093C11.86 -0.0299066 10.13 -0.0299066 9.07002 0.820093L2.14002 6.37009C1.36002 6.99009 0.860021 8.30009 1.03002 9.28009L2.36002 17.2401C2.60002 18.6601 3.96002 19.8101 5.40002 19.8101H16.6C18.03 19.8101 19.4 18.6501 19.64 17.2401L20.97 9.28009C21.13 8.30009 20.63 6.99009 19.86 6.37009ZM11 13.5001C9.62002 13.5001 8.50002 12.3801 8.50002 11.0001C8.50002 9.62009 9.62002 8.50009 11 8.50009C12.38 8.50009 13.5 9.62009 13.5 11.0001C13.5 12.3801 12.38 13.5001 11 13.5001Z"
                        fill="white" />
                </svg>

                <svg class="mt-1" width="4" height="4" viewBox="0 0 4 4" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="white" />
                </svg>
            </div>

            <h1 class="text-white font-semibold">Home</h1>
        </div>

        <div class="flex space-x-2 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.24789 14.3999C9.23989 14.3999 9.23989 14.3999 9.23189 14.3999C8.39989 14.3919 7.69589 13.8719 7.44789 13.0799L5.88789 8.05588C5.67989 7.37588 5.85589 6.64788 6.35989 6.15188C6.85589 5.65588 7.57589 5.47986 8.24789 5.68786L13.2799 7.24787C14.0799 7.49587 14.5999 8.19988 14.6079 9.03188C14.6159 9.86388 14.1119 10.5679 13.3199 10.8319L11.9439 11.2959C11.7359 11.3679 11.5839 11.5199 11.5119 11.7199L11.0399 13.1039C10.7759 13.8959 10.0719 14.3999 9.24789 14.3999ZM7.67189 6.79988C7.43189 6.79988 7.27189 6.92788 7.19989 6.99988C7.01589 7.18388 6.95189 7.44787 7.03189 7.69587L8.5919 12.7199C8.7279 13.1599 9.1199 13.1999 9.2399 13.1999C9.3359 13.1919 9.74389 13.1679 9.88789 12.7279L10.3599 11.3439C10.5439 10.7919 10.9919 10.3439 11.5439 10.1599L12.9199 9.69587C12.9199 9.69587 12.9199 9.69587 12.9279 9.69587C13.3679 9.55187 13.3999 9.15987 13.3999 9.04787C13.3999 8.92787 13.3599 8.53588 12.9199 8.39988L7.88789 6.83987C7.80789 6.80787 7.73589 6.79988 7.67189 6.79988Z"
                    fill="#FAFAFA" />
                <path
                    d="M9.79995 18.2C5.05595 18.2 1.19995 14.344 1.19995 9.6C1.19995 4.856 5.05595 1 9.79995 1C14.544 1 18.4 4.856 18.4 9.6C18.4 14.344 14.544 18.2 9.79995 18.2ZM9.79995 2.2C5.71995 2.2 2.39995 5.52 2.39995 9.6C2.39995 13.68 5.71995 17 9.79995 17C13.88 17 17.2 13.68 17.2 9.6C17.2 5.52 13.88 2.2 9.79995 2.2Z"
                    fill="#FAFAFA" />
            </svg>
            <h1 class="text-white">Explore</h1>
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
            <h1 class="text-white">Notifications</h1>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm">3</h6>
            </div>
        </div>
    </header>

    <main class="flex py-10 mx-10  justify-between">
        <section class="w-1/5  ">
            <div class="w-full py-5 rounded-xl mb-4" style="background: rgba(20, 20, 20, 1)">
                <div class="px-4 mb-4">
                    <div class="flex justify-center items-center py-2 rounded-full">
                        @hasrole('Chef')
                            @if ($chef_questions->image == '')
                                <img class="rounded-full" src="assets/media//users/blank.png" height="100" width="100" />
                            @else
                                <img class="rounded-full" src="{{ asset('/storage/public/' . $chef_questions->image) }}"
                                    height="100" width="100" />
                            @endif
                        @endhasrole
                        @hasrole('Home-Chef|User')
                            @if ($question->image == '')
                                <img class="rounded-full" src="assets/media//users/blank.png" height="100" width="100" />
                            @else
                                <img class="rounded-full" src="{{ asset('/storage/public/' . $question->image) }}"
                                    height="100" width="100" />
                            @endif
                        @endhasrole
                    </div>
                    <h1 class="text-center text-white font-montserrat font-semibold">{{ Auth::user()->name }}</h1>
                    <h3 class="text-center text-sm text-gray-500 font-montserrat font-semibold mb-2">
                        {{ Auth::user()->email }}</h3>

                    <div class="py-4" style="background-color:rgba(32, 32, 32, 1)">
                        <div class="flex justify-center space-x-2 mb-4">
                            <svg width="16" height="16" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="7" fill="url(#paint0_linear_849_1421)" />
                                <path
                                    d="M7.33667 10.5001C7.13667 10.5001 6.82668 10.4034 6.53001 9.91676L5.94334 8.96676C5.88668 8.87342 5.71334 8.78342 5.60667 8.79009L4.49333 8.84676C3.82666 8.88009 3.59335 8.60342 3.51001 8.43676C3.42668 8.27009 3.35333 7.91343 3.78667 7.40676L4.44668 6.6401C4.51335 6.5601 4.55 6.38675 4.52 6.28675L4.18333 5.21009C4.01333 4.67009 4.20333 4.3801 4.33 4.25343C4.45667 4.12676 4.75 3.94342 5.29 4.12342L6.27334 4.44676C6.36334 4.47676 6.53001 4.45009 6.60667 4.39676L7.63334 3.65676C8.10334 3.31676 8.44333 3.40676 8.6 3.49009C8.75667 3.57343 9.02333 3.8001 9.01333 4.3801L8.98999 5.64342C8.98666 5.73676 9.06333 5.89009 9.13666 5.94676L9.96334 6.57343C10.4133 6.91676 10.43 7.26009 10.4 7.43676C10.37 7.61342 10.2367 7.93342 9.69668 8.10009L8.62 8.43676C8.52 8.46676 8.39667 8.59676 8.37 8.69676L8.11335 9.67676C7.94335 10.3201 7.61001 10.4634 7.42334 10.4901C7.40001 10.4968 7.37001 10.5001 7.33667 10.5001ZM5.61666 8.29009C5.90333 8.29009 6.22 8.46342 6.36666 8.70342L6.95333 9.65342C7.12 9.92676 7.27 10.0101 7.35 9.99676C7.42667 9.98676 7.54667 9.86009 7.63001 9.55343L7.88666 8.57343C7.95666 8.30676 8.20666 8.04343 8.46999 7.96343L9.54668 7.62676C9.75334 7.56343 9.88666 7.46009 9.90666 7.35342C9.92666 7.24676 9.83333 7.10676 9.66 6.97343L8.83334 6.34676C8.63 6.19343 8.48334 5.88676 8.48668 5.63342L8.51001 4.37009C8.51335 4.14675 8.46001 3.98009 8.36335 3.93009C8.26668 3.88009 8.10334 3.93009 7.92001 4.06009L6.89333 4.80009C6.69 4.94676 6.35334 5.0001 6.11001 4.92009L5.12667 4.59676C4.92001 4.53009 4.75335 4.53342 4.67668 4.61009C4.60001 4.68675 4.59333 4.85342 4.65666 5.06009L4.99333 6.13676C5.07666 6.40009 5.00333 6.75676 4.82333 6.96343L4.16333 7.73009C3.95333 7.97343 3.92 8.14343 3.95667 8.21343C3.99 8.28343 4.15001 8.36009 4.46668 8.34342L5.58 8.28675C5.59333 8.29009 5.60666 8.29009 5.61666 8.29009Z"
                                    fill="white" />
                                <path
                                    d="M10.3034 10.5834C10.24 10.5834 10.1767 10.5601 10.1267 10.5101L9.11669 9.50005C9.02002 9.40338 9.02002 9.24339 9.11669 9.14672C9.21336 9.05005 9.37336 9.05005 9.47002 9.14672L10.48 10.1567C10.5767 10.2534 10.5767 10.4134 10.48 10.5101C10.43 10.5601 10.3667 10.5834 10.3034 10.5834Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_849_1421" x1="6.71467" y1="5.52113" x2="10.476"
                                        y2="5.60412" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F7162D" />
                                        <stop offset="1" stop-color="#E4182A" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <h1 class="text-white text-xs" style="font-family: 'Manrope', sans-serif;">NOVICE RECIPEATER
                            </h1>
                        </div>

                        <div class="w-11/12 mx-auto rounded-md h-1" style="background-color: rgba(20, 20, 20, 1)">
                            <div class="w-3/4 rounded-md h-full bg-red-600"></div>
                        </div>
                        <div class="w-11/12 mx-auto flex justify-between py-2 text-xs">
                            <h1 class="text-gray-500">LEVEL 2</h1>
                            <h1 class="text-gray-500">25 points left</h1>
                        </div>

                        <div class="flex justify-evenly">
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-white fonr-semibold text-lg">43</h1>
                                <h3 class="text-gray-500 text-sm">Recipes</h3>
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-white fonr-semibold text-lg">3.5k</h1>
                                <h3 class="text-gray-500 text-sm">Likes</h3>
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                <h1 class="text-white fonr-semibold text-lg">16</h1>
                                <h3 class="text-gray-500 text-sm">Featured</h3>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="py-2 px-4 flex justify-between items-center" style="background-color: rgba(32, 32, 32, 1)">
                    <div>
                        <h1 class=" font-semibold text-white">Improve your profile </h1>
                        <h3 class=" font-normal text-gray-500">Get more visibility</h3>
                    </div>

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z"
                            fill="white" />
                        <path
                            d="M10.7399 16.2799C10.5499 16.2799 10.3599 16.2099 10.2099 16.0599C9.91993 15.7699 9.91993 15.2899 10.2099 14.9999L13.2099 11.9999L10.2099 8.99991C9.91993 8.70991 9.91993 8.22991 10.2099 7.93991C10.4999 7.64991 10.9799 7.64991 11.2699 7.93991L14.7999 11.4699C15.0899 11.7599 15.0899 12.2399 14.7999 12.5299L11.2699 16.0599C11.1199 16.2099 10.9299 16.2799 10.7399 16.2799Z"
                            fill="white" />
                    </svg>
                </div>

                <div class="flex justify-center items-center py-2 mt-4">
                    <a href="" class="w-28 flex justify-center items-center text-white rounded-md py-1.5 px-2"
                        style="background-color: rgba(32, 32, 32, 1)">View Profile</a>
                </div>
            </div>

            <div class="w-full py-5 px-4 rounded-xl mb-4" style="background: rgba(20, 20, 20, 1)">
                <div class="flex justify-between items-center">
                    <h1 class="text-white font-semibold">Interested Topics </h1>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99992 15.1666H5.99992C2.37992 15.1666 0.833252 13.6199 0.833252 9.99992V5.99992C0.833252 2.37992 2.37992 0.833252 5.99992 0.833252H7.33325C7.60659 0.833252 7.83325 1.05992 7.83325 1.33325C7.83325 1.60659 7.60659 1.83325 7.33325 1.83325H5.99992C2.92659 1.83325 1.83325 2.92659 1.83325 5.99992V9.99992C1.83325 13.0733 2.92659 14.1666 5.99992 14.1666H9.99992C13.0733 14.1666 14.1666 13.0733 14.1666 9.99992V8.66659C14.1666 8.39325 14.3933 8.16659 14.6666 8.16659C14.9399 8.16659 15.1666 8.39325 15.1666 8.66659V9.99992C15.1666 13.6199 13.6199 15.1666 9.99992 15.1666Z"
                            fill="#3F4044" />
                        <path
                            d="M5.66664 11.7934C5.25997 11.7934 4.88664 11.6467 4.61331 11.38C4.28664 11.0534 4.14664 10.58 4.21997 10.08L4.50664 8.07337C4.55997 7.68671 4.81331 7.18671 5.08664 6.91337L10.34 1.66004C11.6666 0.333372 13.0133 0.333372 14.34 1.66004C15.0666 2.38671 15.3933 3.12671 15.3266 3.86671C15.2666 4.46671 14.9466 5.05337 14.34 5.65337L9.08664 10.9067C8.8133 11.18 8.3133 11.4334 7.92664 11.4867L5.91997 11.7734C5.83331 11.7934 5.74664 11.7934 5.66664 11.7934ZM11.0466 2.36671L5.7933 7.62004C5.66664 7.74671 5.51997 8.04004 5.4933 8.21337L5.20664 10.22C5.17997 10.4134 5.21997 10.5734 5.31997 10.6734C5.41997 10.7734 5.57997 10.8134 5.7733 10.7867L7.77997 10.5C7.9533 10.4734 8.2533 10.3267 8.3733 10.2L13.6266 4.94671C14.06 4.51337 14.2866 4.12671 14.32 3.76671C14.36 3.33337 14.1333 2.87337 13.6266 2.36004C12.56 1.29337 11.8266 1.59337 11.0466 2.36671Z"
                            fill="#3F4044" />
                        <path
                            d="M13.2333 6.55343C13.1866 6.55343 13.14 6.54677 13.1 6.53343C11.3466 6.0401 9.95329 4.64677 9.45996 2.89343C9.38662 2.62677 9.53996 2.35343 9.80662 2.27343C10.0733 2.2001 10.3466 2.35343 10.42 2.6201C10.82 4.0401 11.9466 5.16677 13.3666 5.56677C13.6333 5.6401 13.7866 5.9201 13.7133 6.18677C13.6533 6.41343 13.4533 6.55343 13.2333 6.55343Z"
                            fill="#3F4044" />
                    </svg>
                </div>
                <div class="flex flex-wrap justify-start items-center mt-5" style="font-family: 'Manrope', sans-serif;">
                    <button class="flex items-center justify-center px-1 py-1 text-white text-xs rounded-md mb-2 mr-1"
                        style="background-color: rgba(63, 64, 68, 1);font-family: 'Manrope', sans-serif;">NORTH
                        INDIAN</button>
                    <button class="flex items-center justify-center px-1 py-1 text-white text-xs rounded-md mb-2 mr-1"
                        style="background-color: rgba(63, 64, 68, 1);font-family: 'Manrope', sans-serif;">SEAFOOD</button>
                    <button class="flex items-center justify-center px-1 py-1 text-white text-xs rounded-md mb-2 mr-1"
                        style="background-color: rgba(63, 64, 68, 1);font-family: 'Manrope', sans-serif;">TANDOORI</button>
                    <button class="flex items-center justify-center px-1 py-1 text-white text-xs rounded-md mb-2 mr-1"
                        style="background-color: rgba(63, 64, 68, 1);font-family: 'Manrope', sans-serif;">MARATHI</button>
                    <button class="flex items-center justify-center px-1 py-1 text-white text-xs rounded-md mb-2 mr-1"
                        style="background-color: rgba(63, 64, 68, 1);font-family: 'Manrope', sans-serif;">CHINESE</button>
                    <button class="flex items-center justify-center px-1 py-1 text-white text-xs rounded-md mb-2 mr-1"
                        style="background-color: rgba(63, 64, 68, 1);font-family: 'Manrope', sans-serif;">SOUTH
                        INDIAN</button>
                </div>
            </div>

            <div class="w-full py-5 px-4 rounded-xl" style="background: rgba(20, 20, 20, 1)">
                <div class="flex justify-between items-center">
                    <h1 class="text-white font-semibold">Diet Preferences </h1>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <h1 class="text-white ">Vegan Diet</h1>

                    <div class="flex justify-between space-x-2">
                        <h1 class="text-gray-500 text-xs">Private</h1>
                        <label class="flex items-center">
                            <input
                                class="relative w-10 h-5 transition-all duration-200 ease-in-out bg-black rounded-full shadow-inner outline-none appearance-none "
                                type="checkbox" checked />

                        </label>

                    </div>

                </div>
            </div>
        </section>

        <section class="w-1/2 py-5 ">

            <div class="flex justify-center items-center">
                <button
                    class="flex items-center justify-center px-4 py-4 w-1/2 text-white text-lg font-semibold mb-2 space-x-2"
                    style="background-color: rgba(20, 20, 20, 1)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.6397 22.2377H2.93251C1.99413 22.2377 1.22192 21.4655 1.22192 20.5271V7.8199C1.22192 3.49945 3.49945 1.22192 7.8199 1.22192H15.6397C19.9602 1.22192 22.2377 3.49945 22.2377 7.8199V15.6397C22.2377 19.9602 19.9602 22.2377 15.6397 22.2377ZM7.8199 2.68814C4.32053 2.68814 2.68814 4.32053 2.68814 7.8199V20.5271C2.68814 20.664 2.79566 20.7715 2.93251 20.7715H15.6397C19.1391 20.7715 20.7715 19.1391 20.7715 15.6397V7.8199C20.7715 4.32053 19.1391 2.68814 15.6397 2.68814H7.8199Z"
                            fill="#FAFAFA" />
                        <path
                            d="M16.617 10.0192H6.84224C6.44147 10.0192 6.10913 9.68685 6.10913 9.28609C6.10913 8.88532 6.44147 8.55298 6.84224 8.55298H16.617C17.0178 8.55298 17.3501 8.88532 17.3501 9.28609C17.3501 9.68685 17.0178 10.0192 16.617 10.0192Z"
                            fill="#FAFAFA" />
                        <path
                            d="M13.6846 14.9066H6.84224C6.44147 14.9066 6.10913 14.5743 6.10913 14.1735C6.10913 13.7728 6.44147 13.4404 6.84224 13.4404H13.6846C14.0853 13.4404 14.4177 13.7728 14.4177 14.1735C14.4177 14.5743 14.0853 14.9066 13.6846 14.9066Z"
                            fill="#FAFAFA" />
                    </svg>
                    <span> Post an Update</span>
                </button>
                <button
                    class="flex items-center justify-center px-4 py-4 w-1/2 text-white text-lg font-semibold  mb-2 space-x-2"
                    style="background: rgba(37, 37, 37, 1);">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.288 12.182H7.64433C7.25259 12.182 6.92773 11.8571 6.92773 11.4654C6.92773 11.0736 7.25259 10.7488 7.64433 10.7488H15.288C15.6798 10.7488 16.0046 11.0736 16.0046 11.4654C16.0046 11.8571 15.6798 12.182 15.288 12.182Z"
                            fill="#FAFAFA" />
                        <path
                            d="M11.4662 16.0036C11.0745 16.0036 10.7496 15.6788 10.7496 15.2871V7.64335C10.7496 7.25161 11.0745 6.92676 11.4662 6.92676C11.858 6.92676 12.1828 7.25161 12.1828 7.64335V15.2871C12.1828 15.6788 11.858 16.0036 11.4662 16.0036Z"
                            fill="#FAFAFA" />
                        <path
                            d="M14.3326 21.7365H8.59978C3.41162 21.7365 1.19495 19.5199 1.19495 14.3317V8.59892C1.19495 3.41076 3.41162 1.19409 8.59978 1.19409H14.3326C19.5207 1.19409 21.7374 3.41076 21.7374 8.59892V14.3317C21.7374 19.5199 19.5207 21.7365 14.3326 21.7365ZM8.59978 2.62729C4.1951 2.62729 2.62814 4.19424 2.62814 8.59892V14.3317C2.62814 18.7364 4.1951 20.3033 8.59978 20.3033H14.3326C18.7372 20.3033 20.3042 18.7364 20.3042 14.3317V8.59892C20.3042 4.19424 18.7372 2.62729 14.3326 2.62729H8.59978Z"
                            fill="#FAFAFA" />
                    </svg>

                    <span>Create a Recipe</span>
                </button>
            </div>

            <main class="py-4">
                @if (count($recipe) > 0)
                    @foreach ($recipe as $recipes)
                        <div class="flex space-x-4 items-center">
                            <div class="rounded-full h-14 w-14" alt="user">
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
                            </div>
                            <div>
                                <h1 class="text-white font-semibold break-words ">{{ $recipes->user->name }}</h1>
                                <h3 class="text-gray-500 text-sm break-words">
                                    @if ($recipes->user->hasrole('Chef'))
                                        {{ DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('designation')->first() }}
                                    @elseif ($recipes->user->hasrole('Home-Chef'))
                                        {{ DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('mail')->first() }}
                                    @else
                                        <h5 class="text-sm text-gray-400">User</h5>
                                    @endif
                                </h3>
                            </div>
                        </div>

                        <div class="pl-12 mt-4 ">
                            <div class="relative w-full h-full rounded-md">
                                <img src="{{ $recipes->getFirstMediaUrl('cover') }}"
                                    class="w-full h-full flex object-cover">
                                <div class="absolute w-11/12 mx-4 py-2.5 bottom-4 inset-x-2 flex justify-between px-2"
                                    style="background: rgba(255, 255, 255, 0.3)">
                                    <h1 class="text-white font-semibold">{{ $recipes->recipe_name }}</h1>
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
                            </div>

                            <div class="flex justify-start space-x-4 py-2">
                                <div class=" py-1 rounded-md flex items-center justify-center px-1"
                                    style="background: rgba(255, 255, 255, 0.3)">
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
                                    <h1 class="text-xs text-white px-2">{{ $recipes->cooking_time }} mins</h1>
                                </div>
                                <div class="py-1 rounded-md flex items-center justify-center px-1 space-x-2"
                                    style="background: rgba(255, 255, 255, 0.3)">

                                    <h1 class="text-xs text-white px-2">{{ count($recipes->Recipe_Ingredient) }}
                                        Ingredients</h1>
                                </div>
                                <div class="py-1 rounded-md flex items-center justify-center px-1 space-x-2"
                                    style="background: rgba(255, 255, 255, 0.3)">
                                    <h1 class=" text-xs text-white px-2">For Sweet tastebuds</h1>
                                </div>
                            </div>

                            <div class="flex py-2 justify-between px-2">
                                <div class="flex space-x-4">
                                    <div class="flex items-center space-x-2">
                                        <svg width="21" height="19" viewBox="0 0 21 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.8452 0.867432C13.076 0.867432 11.4925 1.72761 10.5052 3.04721C9.51799 1.72761 7.93448 0.867432 6.16524 0.867432C3.16439 0.867432 0.730469 3.31113 0.730469 6.33153C0.730469 7.49473 0.916189 8.56995 1.23876 9.56698C2.78317 14.4544 7.54349 17.377 9.89921 18.1786C10.2315 18.2959 10.7789 18.2959 11.1113 18.1786C13.467 17.377 18.2273 14.4544 19.7717 9.56698C20.0943 8.56995 20.28 7.49473 20.28 6.33153C20.28 3.31113 17.8461 0.867432 14.8452 0.867432Z"
                                                fill="#ED1A3D" />
                                        </svg>
                                        <h2 class="font-normal text-sm" style="color:#ED1A3D;">
                                            {{ DB::table('likes')->join('recipes', 'recipes.id', '=', 'likes.likeable_id')->where('recipes.id', $recipes->id)->count() }}
                                        </h2>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.0469 11.8339H9.20454C8.80378 11.8339 8.47144 11.5015 8.47144 11.1008C8.47144 10.7 8.80378 10.3677 9.20454 10.3677H16.0469C16.4477 10.3677 16.78 10.7 16.78 11.1008C16.78 11.5015 16.4477 11.8339 16.0469 11.8339Z"
                                                fill="#292D32" />
                                            <path
                                                d="M16.5356 22.6546C16.2032 22.6546 15.8709 22.5569 15.5874 22.3712L11.4234 19.5951H7.73829C4.37577 19.5951 2.1178 17.3371 2.1178 13.9746V8.10975C2.1178 4.74723 4.37577 2.48926 7.73829 2.48926H17.5131C20.8756 2.48926 23.1336 4.74723 23.1336 8.10975V13.9746C23.1336 17.083 21.1982 19.253 18.2462 19.556V20.944C18.2462 21.5794 17.904 22.1561 17.3469 22.4493C17.0927 22.5862 16.8093 22.6546 16.5356 22.6546ZM7.73829 3.94569C5.2164 3.94569 3.58401 5.57808 3.58401 8.09997V13.9648C3.58401 16.4867 5.2164 18.1191 7.73829 18.1191H11.6482C11.7948 18.1191 11.9317 18.1582 12.0588 18.2462L16.4085 21.1395C16.516 21.208 16.6138 21.1787 16.6627 21.1493C16.7115 21.12 16.7897 21.0613 16.7897 20.9343V18.8522C16.7897 18.4515 17.1221 18.1191 17.5229 18.1191C20.0447 18.1191 21.6771 16.4867 21.6771 13.9648V8.09997C21.6771 5.57808 20.0447 3.94569 17.5229 3.94569H7.73829Z"
                                                fill="#292D32" />
                                        </svg>

                                        <h2 class="font-normal text-sm" style="color:#292D32;">
                                            {{ DB::table('comments')->join('recipes', 'recipes.id', '=', 'comments.commentable_id')->where('recipes.id', $recipes->id)->count() }}
                                        </h2>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-1">
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
                                    <h2 class="font-normal text-sm" style="color:rgba(41, 45, 50, 1);">Add to
                                        Collection</h2>
                                </div>
                            </div>

                            <div class="py-2 px-2">
                                <p class="text-white">{{ $recipes->description }}</p>
                                <h3 class="text-sm py-1" style="color: #76777E;">
                                    {{ $recipes->created_at->format('l, d M Y') }}</h3>
                            </div>

                            <div class="flex justify-between items-center py-2 space-x-2">
                                <div class="border-b w-10/12 text-white flex justify-between">
                                    <input type="text" name=""
                                        class="border-0 w-10/12 focus:outline-none bg-transparent px-1 placeholder-gray-500"
                                        placeholder="Add a Comment">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.00004 17.0399C6.99754 17.0399 4.98754 16.3199 3.46504 14.8724C1.86754 13.3574 0.967544 11.3174 0.937544 9.12738C0.907544 6.92988 1.74754 4.86738 3.30004 3.31488C6.44254 0.172383 11.5575 0.172383 14.7 3.31488C16.2525 4.86738 17.0925 6.92988 17.0625 9.12738C17.0325 11.3249 16.1325 13.3649 14.535 14.8724C13.0125 16.3199 11.0025 17.0399 9.00004 17.0399ZM9.00004 2.08492C7.22254 2.08492 5.44504 2.75988 4.09504 4.10988C2.76004 5.44488 2.04004 7.22241 2.06254 9.11241C2.08504 11.0024 2.85754 12.7574 4.23754 14.0549C6.86254 16.5449 11.1375 16.5374 13.7625 14.0549C15.135 12.7574 15.9075 10.9949 15.9375 9.11241C15.9675 7.22991 15.24 5.44488 13.905 4.10988C12.555 2.75988 10.7775 2.08492 9.00004 2.08492Z"
                                            fill="#292A2C" />
                                        <path
                                            d="M8.99982 13.7399C7.81482 13.7399 6.63731 13.3124 5.73731 12.4649C5.51231 12.2474 5.50481 11.8949 5.71481 11.6699C5.93231 11.4449 6.28481 11.4374 6.50981 11.6474C7.88231 12.9449 10.1173 12.9449 11.4898 11.6474C11.7148 11.4374 12.0748 11.4449 12.2848 11.6699C12.4948 11.8949 12.4873 12.2549 12.2623 12.4649C11.3623 13.3124 10.1848 13.7399 8.99982 13.7399Z"
                                            fill="#292A2C" />
                                        <circle cx="6" cy="6.75" r="0.75" fill="#292A2C" />
                                        <circle cx="12" cy="6.75" r="0.75" fill="#292A2C" />
                                    </svg>
                                </div>
                                <button class="flex justify-center items-center px-4 py-2 rounded-md"
                                    style="background-color:#202020;color: #FAFAFA;">Comment
                                </button>

                            </div>

                        </div>
                    @endforeach
                @else
                    <h1 class="text-white">No recipes Found</h1>
                @endif



            </main>

        </section>

        <section class="w-1/4  ">
            <div class="rounded-xl " style="background: rgba(20, 20, 20, 1)">
                <div class="mx-4 py-5">
                    <div class="flex justify-between">
                        <h1 class="text-white font-semibold">My Collections</h1>
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
                        <div class="flex justify-between space-x-2 items-center py-5">
                            @foreach ($collections as $collection)
                                <div class="py-2 px-2 rounded-lg w-1/3 border border-gray-700"
                                    style="background-color: #202020">
                                    <div class="flex justify-center -mt-5 mb-2">
                                        <img src="https://www.thespruceeats.com/thmb/cO72JFFH0TCAufENSxUfqE8TmKw=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/vegan-tofu-tikka-masala-recipe-3378484-hero-01-d676687a7b0a4640a55be669cba73095.jpg"
                                            class="h-16 w-16 rounded-full" alt="recipe">
                                    </div>

                                    <h1 class="text-white font-semibold flex justify-center">
                                        {{ $collection->pin_name }}</h1>
                                    <h1 class="text-gray-500 flex text-sm justify-center items-center">3 Recipes
                                        <svg class="mt-1  text-xl" width="12" height="12" viewBox="0 0 4 8"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                                                fill="#454545" />
                                        </svg>
                                    </h1>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <h1 class="text-white">No Collection Found</h1>
                    @endif

                    <div class="flex justify-between mb-4">
                        <h1 class="text-white font-semibold">My Tastebuds</h1>
                        <h1 class="text-gray-500 text-xs items-center flex">See More
                            <svg class="ml-1 mt-1 text-xl" width="14" height="14" viewBox="0 0 4 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.57143 3.57113C3.57143 3.68746 3.53214 3.80328 3.45305 3.89767L0.901848 6.95895C0.721733 7.17528 0.399771 7.20487 0.183429 7.02425C-0.0329129 6.84415 -0.0619966 6.52271 0.118118 6.30587L2.40196 3.56552L0.200267 0.829751C0.0237236 0.610359 0.05842 0.288925 0.277824 0.112391C0.497227 -0.0641427 0.818169 -0.0294485 0.995222 0.189943L3.45866 3.25123C3.53367 3.34459 3.57143 3.45786 3.57143 3.57113Z"
                                    fill="#454545" />
                            </svg>
                        </h1>
                    </div>

                    <div class="flex justify-between items-center py-4  w-full">
                        <div class="bg-no-repeat  flex justify-center h-16 w-16 bg-contain"
                            style="background-image: url(images/bgPad_Home.png)">
                            <img src="images\cake_Home.png" class="-mt-5 ">
                        </div>
                        <div>
                            <h1 class="text-white font-semibold mt-4">Vs</h1>
                        </div>
                        <div class="bg-no-repeat  flex justify-center h-16 w-16 bg-contain"
                            style="background-image: url(images/bgPad_Home.png)">
                            <img src="images\redChilly_Home.png" class="-mt-5">

                        </div>
                    </div>

                    <div class="flex space-x-1 mb-2">
                        <div class="w-1/2 h-2 rounded-l-md" style="background-color:rgba(34, 34, 35, 1);">
                            <div class="w-full h-full rounded-l-md"
                                style="background:linear-gradient(89.96deg, #F7162D -1.2%, rgba(255, 255, 255, 0.28) -1.19%, #FFFFFF 120.74%);">
                            </div>
                        </div>
                        <div class="w-1/2 h-2 rounded-r-md" style="background-color:rgba(34, 34, 35, 1);">
                            <div class="w-3/4 h-full rounded-r-md"
                                style="background:linear-gradient(89.96deg, #F7162D -1.2%, rgba(255, 255, 255, 0.28) -1.19%, #FFFFFF 120.74%);">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between mb-6">
                        <h2 class="text-gray-500 text-xs">SWEET</h2>
                        <h2 class="text-gray-500 text-xs">SPICY</h2>

                    </div>

                    <div class="py-4 flex flex-col items-center justify-center rounded-lg px-4"
                        style="background: rgba(32, 32, 32, 1);">
                        <h1 class="text-sm text-white">Well, looks like you have a sweet tooth !</h1>
                        <p class="mt-2 text-xs text-gray-500 text-center">More than 2.5k people’s tastebuds feel the
                            sweetness
                            when they try out your recipes</p>
                    </div>


                    <div class="flex justify-between py-6">
                        <h1 class="text-white font-semibold">Accounts to Follow</h1>
                        <h1 class="text-gray-500 text-xs items-center flex underline">Refresh
                        </h1>
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
                        <button
                            class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>
                    </div>

                    <div class="flex justify-between items-center py-4">
                        <div class="flex space-x-4 items-center">
                            <img src="https://www.joancanto.com/wp-content/uploads/2017/04/H10B1582-Edit.jpg"
                                class="rounded-lg h-14 w-14" alt="user">
                            <div>
                                <h1 class="text-white font-semibold break-words ">Rajamurugan</h1>
                                <h3 class="text-gray-500 text-sm break-words">@rajamurugan</h3>
                            </div>
                        </div>
                        <button
                            class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>
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
                        <button
                            class="bg-gray-100 text-gray-800 py-1.5 px-4 text-center w-20 rounded-md text-sm font-semibold">Follow</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

</body>
