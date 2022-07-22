<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- end:: Custom Stylesheets -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <style>
        body {}

        [role="tab"].active {
            @apply text-red-600 border-red-600 dark: text-red-500 dark:border-red-500 hover:text-red-600 hover:border-red-600 dark:hover:text-red-500 dark:hover:border-red-500;
        }

        a {
            text-decoration: none !important;
            color: inherit !important;
        }

        .pagination {
            color: inherit !important;
        }

        .backSVG {
            position: ;
            background-position: left top 35%;

            /* background: linear-gradient(127.92deg, #343438 2.3%, rgba(30, 30, 33, 0.76) 103.43%); */

        }

        /* .img {
            position: absolute;
            ;
            width: 286px;
            height: 238px;
            left: 65%;
        } */

        #section2 {
            background-image: linear-gradient(170.96deg, #000000 0.64%, rgba(0, 0, 0, 0.56) 400.12%), url('images/Vector 1 (4).png'), url('images/Group 11 (2).png'), url('images/Vector 1 (3).png');
            background-position: 0% 0%, right 0.5% bottom 26%, left top -35%, right top -10%;
            background-size: cover, 300px, 510px, 160px;
        }
    </style>
    <!--Style For -->
    <style>
        input:checked~.dot {
            transform: translateX(100%);
            background-color: #28b3f3;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animate-fadeIn {
            -webkit-animation: fadeIn 2s ease-in forwards;
            animation: fadeIn 3s ease-in forwards;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {

            text-decoration: none;
            font-size: 25px;
            color: #818181;

            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>

<body class="antialiased overflow-x-hidden">
    <section id="section1" class="flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
        style="background-image:linear-gradient(179.62deg, rgba(66, 61, 61, 0) 1.26%, rgba(21, 17, 17, 0.86) 28.9%, #151111 51.41%, rgba(21, 17, 17, 0.86) 76.13%, rgba(31, 27, 27, 0) 106.38%),url(images/1.jpg);">

        <nav class="flex space-x-20 justify-around items-center py-3 text-white font-montserrat text-white text-base">
            <a href="" class="uppercase">Home</a>
            <a href="exploreRecipe" class="uppercase">Explore</a>
            <a href="" class="uppercase"> <img src="assets/media/logos/logo-5.png" alt="logo"
                    class="h-28 w-28" /></a>
            <a href="" class="uppercase">About</a>
            <a href="/login" class="px-2 py-2 bg-red-600 flex justify-center items-center rounded-md">Login / Sign
                Up</a>
        </nav>

        <div class="pt-20 w-full mx-auto  flex flex-col items-center justify-center" x-data="{
            text: '',
            textArray: ['Chef?', ' Recipes?', 'Ingredients?', 'Cuisines?', 'Something new?'],
            textIndex: 0,
            charIndex: 0,
            pauseEnd: 1500,
            cursorSpeed: 420,
            pauseStart: 20,
            typeSpeed: 110,
            direction: 'forward'
        }"
            x-init="(() => {
            
                let typingInterval = setInterval(startTyping, $data.typeSpeed);
            
                function startTyping() {
                    let current = $data.textArray[$data.textIndex];
                    if ($data.charIndex > current.length) {
                        $data.direction = 'backward';
                        clearInterval(typingInterval);
                        setTimeout(function() {
                            typingInterval = setInterval(startTyping, $data.typeSpeed);
                        }, $data.pauseEnd);
                    }
            
                    $data.text = current.substring(0, $data.charIndex);
                    if ($data.direction == 'forward') {
                        $data.charIndex += 1;
                    } else {
                        if ($data.charIndex == 0) {
                            $data.direction = 'forward';
                            clearInterval(typingInterval);
                            setTimeout(function() {
            
                                $data.textIndex += 1;
                                if ($data.textIndex >= $data.textArray.length) {
                                    $data.textIndex = 0;
                                }
            
                                typingInterval = setInterval(startTyping, $data.typeSpeed);
                            }, $data.pauseStart);
                        }
                        $data.charIndex -= 1;
                    }
            
                }
            
                setInterval(function() {
                    if ($refs.cursor.classList.contains('hidden')) {
                        $refs.cursor.classList.remove('hidden');
                    } else {
                        $refs.cursor.classList.add('hidden');
                    }
                }, $data.cursorSpeed);
            })()">
            <h1 class="text-5xl font-bold text-white">Are you searching for <span class="text-red-600 "
                    x-text="text"></span></h1>
             <form action="/mainDashboard"class="w-full" method="GET" role="search">
                {{ csrf_field() }} 
                <div class="flex justify-center py-5 w-full mx-auto">

                    <div class=" md:w-3/4">
                        <div class="input-group relative flex flex-wrap items-stretch w-8/12 mx-auto py-2 mb-2">
                            <button
                                class="btn inline-block px-6 py-2.5 bg-white text-white font-medium text-xs rounded-l-md flex items-center"
                                type="submit"id="button-addon2">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                    class="w-6 text-gray-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                    </path>
                                </svg>
                            </button>
                            <input type="search" name="term" id="term"
                                value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}"
                                class="form-control relative flex-auto min-w-0 block w-full px-3 py-8 text-base font-normal text-gray-700 bg-white border-0 m-0 focus:outline-none focus:ring-0 "
                                placeholder='" Chicken Tikka Masala "' aria-label="Search"
                                aria-describedby="button-addon2">
                            <a href=""
                                class="bg-white rounded-r-md px-4 text-gray-600 flex items-center justify-center">
                                <button
                                    class="bg-gray-100 text-gray-500  px-2 py-2 rounded-md flex justify-between items-center">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="20" height="20" viewBox="0 0 172 172" style=" fill:#ffffff;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#95a5a6">
                                                <path
                                                    d="M86,24.08c-6.36937,0 -11.7175,4.42094 -13.26281,10.32h-62.41719c-1.23625,-0.01344 -2.39187,0.63156 -3.02344,1.70656c-0.61813,1.075 -0.61813,2.39187 0,3.46687c0.63156,1.075 1.78719,1.72 3.02344,1.70656h62.41719c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h62.41719c1.23625,0.01344 2.39188,-0.63156 3.02344,-1.70656c0.61813,-1.075 0.61813,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656h-62.41719c-1.54531,-5.89906 -6.89344,-10.32 -13.26281,-10.32zM86,30.96c3.73563,0 6.67844,2.87563 6.83969,6.57094c-0.01344,0.20156 -0.01344,0.41656 0,0.63156c-0.16125,3.68188 -3.10406,6.5575 -6.83969,6.5575c-3.73562,0 -6.67844,-2.87562 -6.83969,-6.57094c0.01344,-0.20156 0.01344,-0.41656 0,-0.63156c0.16125,-3.68187 3.10406,-6.5575 6.83969,-6.5575zM134.16,72.24c-6.36937,0 -11.7175,4.42094 -13.26281,10.32h-110.57719c-1.23625,-0.01344 -2.39187,0.63156 -3.02344,1.70656c-0.61813,1.075 -0.61813,2.39187 0,3.46687c0.63156,1.075 1.78719,1.72 3.02344,1.70656h110.57719c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h14.25719c1.23625,0.01344 2.39188,-0.63156 3.02344,-1.70656c0.61813,-1.075 0.61813,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656h-14.25719c-1.54531,-5.89906 -6.89344,-10.32 -13.26281,-10.32zM134.16,79.12c3.73563,0 6.67844,2.87563 6.83969,6.57094c-0.01344,0.20156 -0.01344,0.41656 0,0.63156c-0.16125,3.68188 -3.10406,6.5575 -6.83969,6.5575c-3.73562,0 -6.67844,-2.87562 -6.83969,-6.57094c0.01344,-0.20156 0.01344,-0.41656 0,-0.63156c0.16125,-3.68187 3.10406,-6.5575 6.83969,-6.5575zM48.16,120.4c-6.36937,0 -11.7175,4.42094 -13.26281,10.32h-24.57719c-1.23625,-0.01344 -2.39187,0.63156 -3.02344,1.70656c-0.61813,1.075 -0.61813,2.39187 0,3.46687c0.63156,1.075 1.78719,1.72 3.02344,1.70656h24.57719c1.54531,5.89906 6.89344,10.32 13.26281,10.32c6.36938,0 11.7175,-4.42094 13.26281,-10.32h100.25719c1.23625,0.01344 2.39188,-0.63156 3.02344,-1.70656c0.61813,-1.075 0.61813,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656h-100.25719c-1.54531,-5.89906 -6.89344,-10.32 -13.26281,-10.32zM48.16,127.28c3.73563,0 6.67844,2.87563 6.83969,6.57094c-0.01344,0.20156 -0.01344,0.41656 0,0.63156c-0.16125,3.68188 -3.10406,6.5575 -6.83969,6.5575c-3.73562,0 -6.67844,-2.87562 -6.83969,-6.57094c0.01344,-0.20156 0.01344,-0.41656 0,-0.63156c0.16125,-3.68187 3.10406,-6.5575 6.83969,-6.5575z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    Filter
                                </button>
                            </a>
                        </div>
                        <p class="w-3/4 mx-auto text-white text-lg text-center leading-relaxed mb-4">An endless
                            repository
                            of
                            recipes, chefs, ingredients and everything related to food</p>
                        <div class="w-3/4 mx-auto py-16 space-y-4 flex flex-col justify-center items-center">
                            <h1 class="text-4xl text-white font-bold counter">+ <span id="value"
                                    class="count">{{ $recipe_count }}</span>
                            </h1>
                            <h3 class="text-xs text-white tracking-wide leading-loose uppercase">Recipes , Chefs &
                                Foodies
                            </h3>

                        </div>
                    </div>
                </div>
             </form> 
        </div>
    </section>

    <section id="section2" class="bg-no-repeat py-10 ">
        <div class="w-3/4 mx-auto flex items-center justify-center">
            <div class="w-1/2 py-5 mx-2 radial"
                style="background: radial-gradient(47.58% 50% at 50% 50%, rgba(222, 222, 222, 0.25) 0%, rgba(222, 222, 222, 0) 100%);">
                <h1 class="text-5xl text-white font-bold leading-tight mb-4">
                    Bringing
                    <br>the world <br> <span class="text-red-600">to your table</span>
                </h1>
                <p class="text-lg text-white font-medium mb-4">Recipeat is a community platform that brings together
                    ingredients, recipes, and chefs.</p>
                <p class="text-base text-gray-300 font-normal mb-4">With Recipeat, you can browse quality recipe
                    content
                    tailored to your diet
                    and tastebuds. Connect with friends, food bloggers, chefs and home chefs to gain access to their
                    personalised content</p>
                <a href=""
                    class="w-32 rounded-md flex items-center justify-center px-2 py-2 bg-red-600 text-white text-sm uppercase">explore</a>
            </div>
            <div class="w-1/2  justify-center items-center flex flex-row">
                <div class="w-1/2 space-y-6 flex flex-col  items-center">
                    <div class="w-10/12 flex flex-col">
                        <div class="rounded-md flex flex-col items-center justify-center py-5 shadow-2xl"
                            style="background:linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                            <div class="w-20 h-2 rounded-2xl bg-black mb-4"></div>
                            <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                                style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                                <img
                                    src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/48/ffffff/external-collection-audio-and-video-flatart-icons-outline-flatarticons.png" />
                            </div>
                            <p class="text-base text-white px-10 text-center">Recipe collections and taste buds</p>
                        </div>
                    </div>
                    <div class="w-10/12 flex flex-col">
                        <div class="rounded-md flex flex-col items-center justify-center py-5 shadow-2xl"
                            style="background:linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                            <div class="w-20 h-2 rounded-2xl bg-black mb-4"></div>
                            <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                                style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                                <img
                                    src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/48/ffffff/external-lock-delivery-kiranshastry-lineal-kiranshastry.png" />
                            </div>
                            <p class="text-base text-white px-10 text-center">Showcase your skills</p>
                        </div>
                    </div>
                </div>

                <div class="w-1/2 space-y-6 flex flex-col  items-center mt-20">
                    <div class="w-10/12 flex flex-col">
                        <div class="rounded-md flex flex-col items-center justify-center py-5 shadow-2xl"
                            style="background:linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                            <div class="w-20 h-2 rounded-2xl bg-black mb-4"></div>
                            <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                                style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                                <img
                                    src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-vitaly-gorbachev/48/ffffff/external-user-internet-security-vitaliy-gorbachev-lineal-vitaly-gorbachev.png" />
                            </div>
                            <p class="text-base text-white px-10 text-center">Build your community</p>
                        </div>
                    </div>
                    <div class="w-10/12 flex flex-col">
                        <div class="rounded-md flex flex-col items-center justify-center py-5 shadow-2xl"
                            style="background:linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                            <div class="w-20 h-2 rounded-2xl bg-black mb-4"></div>
                            <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                                style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                                <img
                                    src="https://img.icons8.com/external-wanicon-lineal-wanicon/48/ffffff/external-users-cloud-technology-wanicon-lineal-wanicon.png" />
                            </div>
                            <p class="text-base text-white px-10 text-center">Expand your network</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-3/4 mx-auto ">
            <div class="container mx-auto p-4" x-data="{ tab: 'tab2' }">
                <ul class="flex justify-around shadow-2xl py-3 mt-6 mb-4" style="background: #1F1F23;">
                    <li class="-mb-px mr-1">
                        <a class="inline-block rounded-md py-2 px-4 text-white font-medium " href="#"
                            :class="{ 'bg-gray-600 text-black': tab == 'tab1' }" @click.prevent="tab = 'tab1'">For
                            Wishful Chefs</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="inline-block rounded-md py-2 px-4 text-white font-medium" href="#"
                            :class="{ 'bg-gray-600 text-black': tab == 'tab2' }" @click.prevent="tab = 'tab2'">For Home
                            Chefs</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="inline-block rounded-md py-2 px-4 text-white font-medium" href="#"
                            :class="{ 'bg-gray-600 text-black ': tab == 'tab3' }" @click.prevent="tab = 'tab3'">For Pro
                            Chefs</a>
                    </li>
                </ul>
                <div class="content  px-4 py-20">
                    <div x-show="tab == 'tab1'">
                        <div class="w-full mx-auto flex items-start justify-center ">
                            <div class="w-1/2 flex justify-start items-center">
                                <div class=" lg:w-5/6 flex justify-start  md:w-1/2 w-5/6">
                                    <div class="w-full h-full">
                                        <img class="md:w-80 md:h-80 " src="images\Group 4.png" alt="user image" />
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 flex flex-col justify-center ">
                                <h2 class="text-3xl text-white mb-2 text-left">Discover the Culinary world</h2>
                                <h1 class="text-red-600 text-4xl font-semibold mb-2">with Recipeat</h1>
                                <p class="text-gray-400 mb-4 text-lg">You can search for people, food content, and
                                    ingredients with our explore feature. Saving those hidden restaurant gems in your
                                    locality by taking a picture and adding it to your Recipeat profile</p>

                                <a href=""
                                    class="flex  w-32 rounded-md text-base items-center justify-center px-2 py-2 text-white bg-red-600">Join
                                    Recipeat</a>

                            </div>

                        </div>
                    </div>
                    <div x-show="tab == 'tab2'">
                        <div class="w-full mx-auto flex items-start justify-center ">
                            <div class="w-1/2 flex flex-col justify-start ">
                                <h2 class="text-2xl text-white mb-2 text-left">Foster an audience and</h2>
                                <h1 class="text-red-600 text-4xl font-semibold mb-2">Grow your brand</h1>
                                <p class="text-gray-400 mb-4 text-base">As a home chef, Recipeat is the perfect
                                    platform
                                    for you
                                    to grow your own personal food brand. Create exclusive content that caters to a
                                    large audience of food lovers! Expand your circle by finding partnerships and
                                    collaborating with others</p>

                                <a href=""
                                    class="flex  w-32 rounded-md text-base items-center justify-center px-2 py-2 text-white bg-red-600">Join
                                    Recipeat</a>

                            </div>
                            <div class="w-1/2 flex justify-end items-end">
                                <div class=" lg:w-5/6 flex justify-end md:w-1/2 w-5/6">
                                    <div class="w-full h-full flex justify-end">
                                        <img class="md:w-80 md:h-80" src="images\Group 8.png" alt="user image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab == 'tab3'">
                        <div class="w-full mx-auto flex items-start justify-center ">
                            <div class="w-1/2 flex justify-start items-center">
                                <div class=" lg:w-5/6 flex justify-start  md:w-1/2 w-5/6">
                                    <div class=" w-full h-full">
                                        <img class="md:w-80 md:h-80" src="images\Group 2.png" alt="user image" />
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 flex flex-col justify-center ">
                                <h2 class="text-2xl text-white mb-2 text-left">Network with chefs and create</h2>
                                <h1 class="text-red-600 text-4xl font-semibold mb-2">your dream portfolio</h1>
                                <p class="text-gray-400 mb-4 text-base">As a chef the problems you face in this
                                    industry's landscape is the opportunity to share your skills with others and grow
                                    your network. Recipeat helps chefs create a professional digital portfolio to share
                                    with others, as well as connect with other chefs globally</p>

                                <a href=""
                                    class="flex  w-32 rounded-md text-base items-center justify-center px-2 py-2 text-white bg-red-600">Join
                                    Invite list</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="section3" class="py-20 bg-black">
        <div class="w-3/4 mx-auto flex justify-center">
            <div class="w-5/12 flex flex-col  justify-start h-40">
                <h1 class="text-5xl text-white font-semibold mb-3">Recip<span class="text-red-600">eat</span></h1>
                <h1 class="text-4xl text-white font-semibold mb-4">FAQ'S</h1>
                <a href=""
                    class="border w-28 px-1 py-1.5 rounded-md flex items-center text-sm justify-center text-white">See
                    More</a>
                <p class="mt-5 text-base text-gray-400">Don’t see your question? Do write to us!</p>
            </div>
            <div class="w-7/12 h-full flex justify-center">
                <div class="h-fit">
                    <div class=" w-full mx-auto " x-data="{ selected: null }">
                        <ul class="shadow-box">
                            <li class="relative border-b border-gray-200">
                                <button type="button" class="w-full  py-3 text-left"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between text-white">
                                        <span class="text-base font-medium">
                                            What does Recipeat do ?</span>
                                        <i class="fas fa-angle-down text-white"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-3">
                                        <div
                                            class="px-2 py-2 rounded flex flex-col md:items-start md:text-left items-center text-center">
                                            <p class="mb-4 text-sm leading-relaxed text-justify">RR Traders in Trichy
                                                is a
                                                top player in
                                                the category Rice Wholesalers in the Trichy. '
                                                'This well-known establishment acts as a one-stop destination
                                                servicing customers both local and from other '
                                                'parts of Trichy.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="relative  border-b border-gray-200">
                                <button type="button" class="w-full py-3 text-left"
                                    @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between text-white">
                                        <span class="text-base font-medium">
                                            How do I become a part of the Recipeat community ?</span>
                                        <i class="fas fa-angle-down text-white"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden bg-white transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <div
                                            class="px-2 py-2 rounded flex flex-col md:items-start md:text-left items-center text-center">
                                            <p class="mb-4 text-sm leading-relaxed text-justify">We are providing
                                                custom
                                                ERP
                                                solutions to
                                                schools and institutions for more than 5
                                                years. We manage Human Resources,
                                                Inventory Management and Financial
                                                Management.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="relative  border-b border-gray-200">
                                <button type="button" class="w-full py-3 text-left"
                                    @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between text-white">
                                        <span class="text-base font-medium">
                                            Can I learn to cook through Recipeat?</span>
                                        <i class="fas fa-angle-down text-white"></i>
                                    </div>
                                </button>
                                <div class="relative bg-white overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container3"
                                    x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                    <div class="p-3">
                                        <div
                                            class="px-2 py-2 rounded  flex flex-col md:items-start md:text-left items-center text-center">
                                            <p class="mb-4 text-sm leading-relaxed text-justify">Recipeat is a web
                                                based
                                                service, which offers our users personalised recipes based
                                                on their available ingredients and their specific eating habits and
                                                diets. </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="relative  border-b border-gray-200">
                                <button type="button" class="w-full py-3 text-left"
                                    @click="selected !== 4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between text-white">
                                        <span class="text-base font-medium">
                                            Is Recipeat a free to use platform?</span>
                                        <i class="fas fa-angle-down text-white"></i>
                                    </div>
                                </button>
                                <div class="relative bg-white overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container4"
                                    x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                    <div class="p-3">
                                        <div
                                            class="px-2 py-2 rounded  flex flex-col md:items-start md:text-left items-center text-center">
                                            <p class="mb-4 text-sm leading-relaxed text-justify">Recipeat is a web
                                                based
                                                service, which offers our users personalised recipes based
                                                on their available ingredients and their specific eating habits and
                                                diets. Recipeat enables users to
                                                search recipes solely based on what ingredients users have at home.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section4" class="w-full ">
        <div class="w-full mx-auto backSVG bg-no-repeat bg-fill" style="background-image: url(images/arrow1.svg)">
            <div class="w-3/4 mx-auto py-20">
                <h1 class="text-red-600 text-4xl font-semibold mb-5 ">Recipeat <span
                        class="text-black">resources</span></h1>
                <div class="flex justify-start items-start w-full py-10">
                    <div class="w-5/12 flex flex-col -mt-16 space-y-4">
                        <div class="w-full bg-fill  bg-no-repeat lg:h-60 -mx-7  rounded-b-lg"
                            style="background-image: url(images/card1.png)">
                            <div class="flex flex-col justify-center items-start py-10 px-5">
                                <h3 class="uppercase text-xs text-white mb-3">kitchen secrets</h3>
                                <h1 class="text-3xl text-white font-semibold leading-10 tracking-wider">Recipeat’s best
                                    everyday cooking
                                    tips</h1>
                                <div class="flex justify-end items-end w-full ">
                                    <svg width="51" height="24" viewBox="0 0 51 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M50.0607 13.0607C50.6464 12.4749 50.6464 11.5251 50.0607 10.9393L40.5147 1.3934C39.9289 0.807615 38.9792 0.807615 38.3934 1.3934C37.8076 1.97919 37.8076 2.92894 38.3934 3.51472L46.8787 12L38.3934 20.4853C37.8076 21.0711 37.8076 22.0208 38.3934 22.6066C38.9792 23.1924 39.9289 23.1924 40.5147 22.6066L50.0607 13.0607ZM-1.31134e-07 13.5L49 13.5L49 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z"
                                            fill="#F9FBFC" />
                                    </svg>
                                </div>

                            </div>

                        </div>

                        <div class="w-full bg-fill  lg:h-64 -mx-7 bg-no-repeat rounded-b-lg"
                            style="background-image: url(images/card2.png)">
                            <div class="flex flex-col justify-center items-start lg:py-10 md:py-20 px-5">
                                <h3 class="uppercase text-xs text-white mb-3">kitchen secrets</h3>
                                <h1 class="lg:text-3xl md:text-2xl text-white font-bold leading-10 mr-3">Hacks 95%
                                    people
                                    don’t know!</h1>
                                <div class="flex justify-end items-end w-full ">
                                    <svg width="51" height="24" viewBox="0 0 51 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M50.0607 13.0607C50.6464 12.4749 50.6464 11.5251 50.0607 10.9393L40.5147 1.3934C39.9289 0.807615 38.9792 0.807615 38.3934 1.3934C37.8076 1.97919 37.8076 2.92894 38.3934 3.51472L46.8787 12L38.3934 20.4853C37.8076 21.0711 37.8076 22.0208 38.3934 22.6066C38.9792 23.1924 39.9289 23.1924 40.5147 22.6066L50.0607 13.0607ZM-1.31134e-07 13.5L49 13.5L49 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z"
                                            fill="#F9FBFC" />
                                    </svg>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="w-7/12 flex  justify-start items-center -mt-10">
                        <div class="w-full bg-contain bg-no-repeat rounded-xl"
                            style="background: linear-gradient(130.96deg, #1F1F24 24.64%, rgba(31, 31, 36, 0.56) 234.12%);">
                            <div class="flex flex-col justify-center items-start pt-5  px-5">
                                <div class="w-full flex justify-end mb-4">
                                    <a href=""
                                        class="w-24 flex justify-center items-center bg-red-600 text-white px-2 py-2 mb-2 rounded-md">Featured</a>
                                </div>
                                <h3 class="uppercase text-xs text-white mb-3">SPECIAL FEATURES</h3>
                                <h1 class="text-3xl text-white font-semibold leading-10 tracking-wider  mr-4">
                                    Explore
                                    the
                                    idea of <br>
                                    Pinboards, collections
                                    & Tastebuds</h1>
                                <div class="flex justify-between items-center h-40 w-full">
                                    <svg width="73" height="24" viewBox="0 0 73 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M72.0607 13.0607C72.6464 12.4749 72.6464 11.5251 72.0607 10.9393L62.5147 1.39339C61.9289 0.807606 60.9792 0.807606 60.3934 1.39339C59.8076 1.97918 59.8076 2.92893 60.3934 3.51471L68.8787 12L60.3934 20.4853C59.8076 21.0711 59.8076 22.0208 60.3934 22.6066C60.9792 23.1924 61.9289 23.1924 62.5147 22.6066L72.0607 13.0607ZM1.31134e-07 13.5L71 13.5L71 10.5L-1.31134e-07 10.5L1.31134e-07 13.5Z"
                                            fill="#F9FBFC" />
                                    </svg>
                                    <img src="images\foodPacket.png" class="h-40 w-40  flex items-start"
                                        alt="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full  -mt-10"
                style="background: linear-gradient(180deg, #08080A 25.05%, rgba(8, 8, 10, 0.88) 63.94%);">
                <div class="w-3/4 mx-auto py-5">
                    <div class="flex justify-between">
                        <img src="assets/media/logos/logo-5.png" alt="logo" class="h-40 w-40">
                        <div class="flex flex-col">
                            <h1 class="text-4xl text-white font-bold">Join the list!</h1>
                            <h3 class="text-base font-normal mt-3 text-gray-400">Get exclusive first hand access to
                                content and Updates</h3>
                            <div class="flex justify-start items-center space-x-4 mt-4">
                                <input type="text" class="py-2 w-3/4 px-3 bg-white text-gray-600 rounded-md"
                                    placeholder="Enter your email">
                                <button type="submit"
                                    class="border-2 border-gray-300 text-gray-200 flex items-center justify-center w-28 px-2 py-2 rounded-md">
                                    Subscribe
                                </button>

                            </div>
                        </div>

                    </div>
                    <div class="flex justify-between mt-4">
                        <nav class="flex items-end space-x-10 ">
                            <a href="/HomePage" class="text-white text-base font-normal">Home</a>
                            <a href="" class="text-white text-base font-normal">About Us</a>
                            <a href="/exploreRecipe" class="text-white text-base font-normal">Explore</a>
                            <a href="" class="text-white text-base font-normal">FAQ</a>
                            <a href="/contactUs" class="text-white text-base font-normal">Contact Us</a>
                        </nav>
                        <div class="flex flex-col">
                            <h3 class="text-xs text-white mb-3">FOLLOW RECIPEAT</h3>
                            <nav class="flex space-x-4">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13 0H5C2.23858 0 0 2.23858 0 5V13C0 15.7614 2.23858 18 5 18H13C15.7614 18 18 15.7614 18 13V5C18 2.23858 15.7614 0 13 0ZM16.25 13C16.2445 14.7926 14.7926 16.2445 13 16.25H5C3.20735 16.2445 1.75549 14.7926 1.75 13V5C1.75549 3.20735 3.20735 1.75549 5 1.75H13C14.7926 1.75549 16.2445 3.20735 16.25 5V13ZM13.75 5.25C14.3023 5.25 14.75 4.80228 14.75 4.25C14.75 3.69772 14.3023 3.25 13.75 3.25C13.1977 3.25 12.75 3.69772 12.75 4.25C12.75 4.80228 13.1977 5.25 13.75 5.25ZM9 4.5C6.51472 4.5 4.5 6.51472 4.5 9C4.5 11.4853 6.51472 13.5 9 13.5C11.4853 13.5 13.5 11.4853 13.5 9C13.5027 7.8057 13.0294 6.65957 12.1849 5.81508C11.3404 4.97059 10.1943 4.49734 9 4.5ZM6.25 9C6.25 10.5188 7.4812 11.75 9 11.75C10.5188 11.75 11.75 10.5188 11.75 9C11.75 7.4812 10.5188 6.25 9 6.25C7.4812 6.25 6.25 7.4812 6.25 9Z"
                                        fill="#FAFAFA" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.5 6H13.5C12.9477 6 12.5 6.44772 12.5 7V10H16.5C16.6137 9.99748 16.7216 10.0504 16.7892 10.1419C16.8568 10.2334 16.8758 10.352 16.84 10.46L16.1 12.66C16.0318 12.8619 15.8431 12.9984 15.63 13H12.5V20.5C12.5 20.7761 12.2761 21 12 21H9.5C9.22386 21 9 20.7761 9 20.5V13H7.5C7.22386 13 7 12.7761 7 12.5V10.5C7 10.2239 7.22386 10 7.5 10H9V7C9 4.79086 10.7909 3 13 3H16.5C16.7761 3 17 3.22386 17 3.5V5.5C17 5.77614 16.7761 6 16.5 6Z"
                                        fill="#FAFAFA" />
                                </svg>
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.9727 2.7174C17.5083 3.33692 16.9469 3.87733 16.3102 4.31776C16.3102 4.47959 16.3102 4.64142 16.3102 4.81225C16.3153 7.7511 15.1414 10.5691 13.0517 12.6345C10.9619 14.6999 8.13108 15.8399 5.19393 15.7989C3.49587 15.8046 1.81955 15.4169 0.2963 14.6661C0.21416 14.6302 0.16119 14.549 0.1615 14.4593V14.3604C0.1615 14.2313 0.26611 14.1267 0.39515 14.1267C2.0643 14.0716 3.6739 13.4929 4.99622 12.4724C3.48541 12.4419 2.12607 11.5469 1.50048 10.1707C1.46889 10.0956 1.47872 10.0093 1.52645 9.9432C1.57417 9.8771 1.65288 9.8407 1.73413 9.8471C2.1933 9.8932 2.65706 9.8505 3.10008 9.7212C1.43227 9.375 0.17909 7.9904 -0.000260003 6.2957C-0.00663 6.2144 0.0297999 6.1357 0.0958799 6.0879C0.16195 6.0402 0.24812 6.0303 0.32326 6.062C0.77082 6.2595 1.25397 6.3635 1.74312 6.3676C0.28172 5.40846 -0.34951 3.58405 0.20643 1.92622C0.26382 1.76513 0.40169 1.64612 0.56938 1.61294C0.73706 1.57975 0.90984 1.63728 1.0242 1.76439C2.99627 3.86325 5.70592 5.11396 8.58178 5.25279C8.50818 4.95885 8.47198 4.65676 8.47398 4.35372C8.50088 2.76472 9.48408 1.34921 10.9633 0.769872C12.4424 0.190542 14.1248 0.562032 15.2229 1.71044C15.9713 1.56785 16.6949 1.31645 17.3706 0.964212C17.4201 0.933312 17.4829 0.933312 17.5324 0.964212C17.5633 1.01373 17.5633 1.07652 17.5324 1.12604C17.2051 1.87552 16.6522 2.50412 15.9508 2.92419C16.565 2.85296 17.1684 2.70807 17.7481 2.49264C17.7969 2.45942 17.861 2.45942 17.9098 2.49264C17.9507 2.51134 17.9813 2.54711 17.9934 2.59042C18.0055 2.63373 17.9979 2.68018 17.9727 2.7174Z"
                                        fill="#FAFAFA" />
                                </svg>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2 0H16C17.1046 0 18 0.89543 18 2V16C18 17.1046 17.1046 18 16 18H2C0.89543 18 0 17.1046 0 16V2C0 0.89543 0.89543 0 2 0ZM5 15C5.27614 15 5.5 14.7761 5.5 14.5V7.5C5.5 7.2239 5.27614 7 5 7H3.5C3.22386 7 3 7.2239 3 7.5V14.5C3 14.7761 3.22386 15 3.5 15H5ZM4.25 6C3.42157 6 2.75 5.32843 2.75 4.5C2.75 3.67157 3.42157 3 4.25 3C5.07843 3 5.75 3.67157 5.75 4.5C5.75 5.32843 5.07843 6 4.25 6ZM14.5 15C14.7761 15 15 14.7761 15 14.5V9.9C15.0325 8.3108 13.8576 6.95452 12.28 6.76C11.177 6.65925 10.1083 7.1744 9.5 8.1V7.5C9.5 7.2239 9.2761 7 9 7H7.5C7.2239 7 7 7.2239 7 7.5V14.5C7 14.7761 7.2239 15 7.5 15H9C9.2761 15 9.5 14.7761 9.5 14.5V10.75C9.5 9.9216 10.1716 9.25 11 9.25C11.8284 9.25 12.5 9.9216 12.5 10.75V14.5C12.5 14.7761 12.7239 15 13 15H14.5Z"
                                        fill="#FAFAFA" />
                                </svg>
                            </nav>
                        </div>
                    </div>
                    <hr class="bg-white text-white mt-4">
                    <div class="flex justify-between mt-4">
                        <nav class="flex space-x-4">
                            <a href="/"
                                class="text-sm text-white font-normal underline decoration-solid border-b">Privacy
                                Policy</a>
                            <a href="" class="text-sm text-white font-normal underline border-b">Terms of
                                Service</a>
                            <a href="" class="text-sm text-white font-normal underline border-b">Cookies
                                Settings</a>
                        </nav>
                        <h3 class="text-sm text-white font-normal">2022 Recipeat. All right reserved.</h3>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function animateValue(obj, start = 0, end = null, duration = 3000) {
            if (obj) {

                // save starting text for later (and as a fallback text if JS not running and/or google)
                var textStarting = obj.innerHTML;

                // remove non-numeric from starting text if not specified
                end = end || parseInt(textStarting.replace(/\D/g, ""));

                var range = end - start;

                // no timer shorter than 50ms (not really visible any way)
                var minTimer = 50;

                // calc step time to show all interediate values
                var stepTime = Math.abs(Math.floor(duration / range));

                // never go below minTimer
                stepTime = Math.max(stepTime, minTimer);

                // get current time and calculate desired end time
                var startTime = new Date().getTime();
                var endTime = startTime + duration;
                var timer;

                function run() {
                    var now = new Date().getTime();
                    var remaining = Math.max((endTime - now) / duration, 0);
                    var value = Math.round(end - (remaining * range));
                    // replace numeric digits only in the original string
                    obj.innerHTML = textStarting.replace(/([0-9]+)/g, value);
                    if (value == end) {
                        clearInterval(timer);
                    }
                }

                timer = setInterval(run, stepTime);
                run();
            }
        }

        animateValue(document.getElementById('value'));
    </script>

</body>

</html>
