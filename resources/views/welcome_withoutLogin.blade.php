<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <!-- end:: Custom Stylesheets -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        a {
            text-decoration: none !important;
            color: inherit !important;
        }

        .pagination {
            color: inherit !important;
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

<body class="antialiased">

    <section>
        <!-- component -->
        <div class=" py-10 h-auto  bg-fixed bg-center"
            style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://recipeat.in/styles/site/default/images/demo/slides/slide-image-02.jpg')">
            <div id="mySidenav" class="sidenav text-white">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <div class="bg-white  border text-gray-900 border-gray-200  dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <a href="/login">
                    <button type="button" class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full rounded-t-lg inline-flex items-center ">
                        <img class="w-8 h-8" src="https://img.icons8.com/ios/50/000000/login-rounded-right--v1.png"/>
                        <span class="text-lg ml-2">Login</span>
                    </button>
                </a>
                <a href="/">
                    <button type="button" class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center dark:border-gray-600 ">
                        <img class="w-8 h-8" src="https://img.icons8.com/ios/50/000000/soup-plate.png"/>
                        <span class="text-lg ml-2">Recipes</span>

                    </button>
                </a>
                <a href="/">
                    <button type="button" class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center ">
                        <img class="w-8 h-8" src="https://img.icons8.com/ios/50/000000/voice-presentation.png"/>
                        <span class="text-lg ml-2">Food Hacks</span>
                    </button>
                </a>
                <a href="/contactUs">
                    <button type="button" class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium w-full rounded-b-lg inline-flex items-center ">
                        <img class="w-8 h-8" src="https://img.icons8.com/ios/50/000000/add-contact-to-company.png"/>
                        <span class="text-lg ml-2">Contact Us</span>
                    </button>
                </a>
                </div>
            </div>
            <div id="main" class="text-white">
                <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
            <div class=" md:py-16 py-20 w-full sm:mt-0 flex flex-col justify-center items-center">
                {{-- <a href="/welcome" class="absolute top-0 left-0 mt-5 ml-5">
                    <img src="assets/media/logos/logo-5.png" alt="logo" class="h-16" />
                </a> --}}
                <a href="/" class="flex w-100 justify-center">
                    <img src="assets/media/logos/logo-5.png" alt="logo" class="h-16" />
                </a>
                <p class="text-white font-bold lg:text-4xl md:text-3xl text-2xl flex flex-col items-center mb-4">
                <p class="text-white lg:text-4xl md:text-3xl text-2xl">RECIP<span class="text-red-600">EAT
                        -</span><span class="text-yellow-400 lg:text-5xl md:text-4xl text-3xl"> EAT
                        -</span> REPEAT</p>
                </p>
                <p class="text-white text-xl mt-4"></p>
                <form action="/" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="container flex md:w-full w-4/6 justify-center mt-4 ">
                        <div class="flex flex-row border-2 justify-center text-gray-800  mx-auto rounded-xl ">
                            <button type="submit"
                                class="flex items-center justify-center bg-white px-4 py-3 rounded-l-md">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                            </button>
                            <input type="search" name="term" id="term" value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}"
                                class="px-4 py-2 w-52 border-r-2 focus:outline-none focus:ring-0 focus:border-blue-300"
                                placeholder="Find a recipe..."
                                value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}">
                            <select name="creator" id="sort-item"value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}"
                                class="px-4 py-2 w-52 border-r-2 focus:outline-none focus:ring-0 focus:border-blue-300">
                                <option value="" class="text-gray-500">All</option>
                                <option value="1">Chef</option>
                                <option value="2">Home Chef</option>

                            </select>
                            <div class="flex justify-center items-center w-44 bg-white rounded-r-lg">
                                <label
                                    class="text-gray-500 flex justify-center items-center text-center mt-1">Vegetarian</label>
                                <input type="checkbox" class="bg-white px-2 py-2 ml-2">
                            </div>
                        </div>

                    </div>
                    <div class="flex mt-2 w-full mx-auto justify-end ">
                        <a href="/login"
                            class="bg-gray-200 text-gray-700 no-underline flex justify-center rounded-sm mr-2 w-44 py-2 px-2">Advance
                            Search</a>
                    </div>
                </form>

                <div class="w-3/4 flex flex-row py-5 mx-auto">
                    @if (isset($recipe))
                        <div class="w-full flex flex-wrap  md:flex-row flex-col">
                            @if (count($recipe) > 0)
                                @foreach ($recipe as $recipes)
                                    <a href="/view_recipe/{{ $recipes->id }}" name="view"
                                        class="flex xl:flex-row no-underline h-72 md:flex-col lg:w-1/4 md:w-1/2 w-full p-2 transition duration-500 ease-in transform hover:-translate-y-2 hover:scale-100">
                                        <!-- <div class="flex  flex-col w-full p-2 border-2 rounded-lg">
                                                        <div class="flex items-center  justify-center w-full border-b-2">
                                                            <img class="rounded-t-lg h-40 w-full"
                                                                src="https://spicecravings.com/wp-content/uploads/2021/04/Chicken-Biryani-Featured-2-500x375.jpg">
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-center bg-yellow-500 text-white hover:text-blue-600 font-bold md:text-xl text-lg w-full border-b-2 py-1 ">
                                                            {{ $recipes->recipe_name }}
                                                        </div>
                                                    <div class="flex flex-col rounded-b-lg w-full p-2 mt-2 ">
                                                        <h1 class="font-bold md:text-base text-sm text-black flex border-b-2 pb-2 pt-1 mb-2">
                                                            Description:</h1>
                                                        <h1 class="mt-1 mb-1 h-10 border-b-2 pb-1 text-sm overflow-hidden">{{ $recipes->description }}</h1>
                                                        <div class="m-1 text-sm">
                                                            <h1>Created at:</h1>
                                                            {{ $recipes->created_at }}
                                                        </div>
                                                    </div>
                                        </div>  -->
                                        <div class="flex w-full  flex-row relative">
                                            <img alt="gallery"
                                                class="absolute mt-2 inset-0 w-full h-full object-cover border-black border-2 object-center rounded-b-lg"
                                                src="https://1.bp.blogspot.com/-OcFmW26l1rA/W7TtTcL35sI/AAAAAAAAIz8/6u2ANNXZnBAjXHXT-cjcu-6f-PBPG0jgwCLcBGAs/s1600/Chicken%2BBiryani%2B4.jpg" />
                                            <p
                                                class="absolute flex justify-center p-3 rounded-t-lg border-b-2 bg-gradient-to-tr from-yellow-400 to-yellow-700 text-white w-full text-lg font-medium">
                                                {{ $recipes->recipe_name }}</p>
                                            <div
                                                class="py-1 relative z-10 h-72 w-full border-4 rounded-md border-gray-200 bg-white opacity-0 hover:opacity-100">
                                                <div class="flex flex-col h-full rounded-b-lg w-full p-2 mt-2">
                                                    <div class="h-52 overflow-hidden">
                                                        <h1
                                                            class="font-bold md:text-base text-sm text-black flex border-b-2 border-yellow-400 pb-2  mb-2">
                                                            Description:</h1>
                                                        <h1 class="mt-1 mb-1 h-auto  pb-1 text-sm overflow-hidden">
                                                            {{ $recipes->description }}</h1>
                                                    </div>
                                                    <div class="pt-2 border-t-2  border-yellow-400 text-sm">
                                                        <h1>Created at:</h1>
                                                        {{ $recipes->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                <!-- {!! $recipe->links() !!} -->
                                <!-- {{ $recipe->render() }} -->

                            @else
                                <div class="flex w-3/4 mx-auto  text-white justify-center">
                                    <div class="flex flex-col  md:w-1/2 w-full border-2 bg-white p-2  rounded-lg">
                                        <div class="flex items-center justify-center w-full">
                                            <!-- {{-- <img class="rounded-t-lg h-20 w-20"
                                                            src="https://icon-library.com/images/not-found-icon/not-found-icon-15.jpg"> --}} -->
                                            <img class="h-14 w-14"
                                                src="https://img.icons8.com/material-outlined/96/fa314a/box-important--v1.png" />
                                        </div>
                                        <h1
                                            class="flex justify-center md:w-3/4 w-full mx-auto rounded-b-lg mt-2 mb-1 md:text-lg text-base font-medium py-2 text-gray-800">
                                            No Results Matched your Search!</h1>

                                        <!-- {{-- <h1 class="flex justify-center w-3/4 mx-auto rounded-b-lg mt-2 mb-1 bg-red-600 text-base py-2 text-white">No Results Matched your Search!</h1> --}} -->

                                    </div>
                                </div>
                            @endif
                        </div>
                        <div
                            class="pagination text-white font-extrabold px-2 flex justify-center items-center rounded-lg">
                            {{ $recipe->render() }}</div>
                    @endif


                </div>


                <div class="mt-4">
                    <a href="login" class="py-2 px-4 no-underline font-bold rounded text-lg bg-red-600 text-white">Sign
                        In / Sign Up
                    </a>
                </div>
                {{-- <a href="/dashboard"><button
                        class="rounded-lg absolute bg-red-600 hover:bg-red-700 text-white p-3 top-0 right-0 mt-3 mr-5">My
                        Recipe's</button>
                </a> --}}
                {{-- <form>
                    <div class="space-y-5">
                        <div class="flex flex-row w-full">
                            <div class="w-full">
                                <!-- Search -->
                                <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
                                    <!-- hero -->
                                    <div class="hero">
                                        <!-- hero headline -->
                                        <div
                                            class="hero-headline flex flex-col items-center justify-center md:pt-10 pt-20 text-center">
                                            <p
                                                class="text-white font-bold lg:text-4xl md:text-3xl text-2xl flex flex-col items-center mb-4">
                                                <a class="text-white">RECIP<span class="text-red-600">EAT
                                                        -</span><span
                                                        class="text-yellow-400 lg:text-5xl md:text-4xl text-3xl"> EAT
                                                        -</span> REPEAT</a>
                                            </p>
                                            <p class="lg:text-xl md:text-lg text-base text-white">Where food speaks with
                                                your palate.
                                            </p>
                                        </div>
                                        <!-- image search box -->
                                        <div class="box pt-6">
                                            <div class="box-wrapper w-full mx-auto">
                                                <div
                                                    class="bg-white rounded-full flex items-center w-full focus:outline-none p-3 shadow-sm border border-gray-200">

                                                    <input type="search" name="term" id="term"
                                                        placeholder="Search by Recipes"
                                                        value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}"
                                                        class="w-full pl-4 pr-2 py-1 text-base outline-none focus:none bg-transparent" />
                                                    <select name="creator" class="border-2 rounded-full p-2">

                                                        <option value="">All Recipes</option>
                                                        <option value="1">Chef</option>
                                                        <option value="2">Home-Chef</option>
                                                    </select>

                                                    <div
                                                        class="flex space-x-2 ml-2 outline-none focus:outline-none h-full rounded-full bg-blue-500 p-2">
                                                        <button type="submit"> <svg class="w-5 text-white h-5"
                                                                fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                                                                </path>
                                                            </svg></button>
                                                    </div>
                                                </div>

                                                <!-- For toggle -->
                                                <!-- <label for="toogleA" class="flex items-center cursor-pointer">                                              <!-- toggle  -->
                                                <!-- <div class="relative">   -->
                                                <!-- input -->
                                                <!-- <input onclick="myFunction()" id="toogleA" type="checkbox" class="sr-only" />  -->
                                                <!-- line -->
                                                <!-- <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner">
                                                 </div>  -->
                                                <!-- dot -->
                                                <!-- <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition">
                                                            </div>
                                                 </div>  -->
                                                <!-- label -->
                                                <!-- <div id="toggle_label" class="ml-3 text-gray-700 font-medium">
                                                            Ingredients
                                                        </div>
                                             </label>
                                             </div>  -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Buttons -->
                                    <div
                                        class="flex flex-wrap justify-center md:space-x-10 space-x-2 md:space-y-0 space-y-2 py-3 my-3">
                                        <form action="/welcome" method="GET">

                                            <button
                                                class="button button--nina md:px-8 px-4 py-0 text-gray-300 hover:text-white relative block focus:outline-none border-b-2 border-solid rounded-md text-sm text-center font-semibold uppercase tracking-widest overflow-hidden"">Recipes
                                            </button>
                                        </form>
                                    <form action=" /search_ingredient" method="GET">
                                                <a href="/search_ingredient"> <button
                                                        class="button button--nina md:px-8  py-0  text-gray-300 hover:text-white relative block focus:outline-none border-b-2 border-solid rounded-md text-sm text-center font-semibold uppercase tracking-widest overflow-hidden">Ingredients
                                                    </button>
                                                </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> --}}

                {{-- <div class="w-3/4 flex flex-row py-5 mx-auto">
                    @if (isset($recipe))
                        <div class="w-full flex flex-wrap  md:flex-row flex-col">
                            @if (count($recipe) > 0)
                                @foreach ($recipe as $recipes)
                                    <a href="/recipeview/{{ $recipes->id }}" name="view"
                                        class="flex xl:flex-row  h-72 md:flex-col lg:w-1/4 md:w-1/2 w-full p-2 transition duration-500 ease-in transform hover:-translate-y-2 hover:scale-100">

                                        <div class="flex w-full  flex-row relative">
                                            <img alt="gallery"
                                                class="absolute mt-2 inset-0 w-full h-full object-cover border-black border-2 object-center rounded-b-lg"
                                                src="https://1.bp.blogspot.com/-OcFmW26l1rA/W7TtTcL35sI/AAAAAAAAIz8/6u2ANNXZnBAjXHXT-cjcu-6f-PBPG0jgwCLcBGAs/s1600/Chicken%2BBiryani%2B4.jpg" />
                                            <p
                                                class="absolute flex justify-center p-3 rounded-t-lg border-b-2 bg-gradient-to-tr from-yellow-400 to-yellow-700 text-white w-full text-lg font-medium">
                                                {{ $recipes->recipe_name }}</p>
                                            <div
                                                class="py-1 relative z-10 h-72 w-full border-4 rounded-md border-gray-200 bg-white opacity-0 hover:opacity-100">
                                                <div class="flex flex-col h-full rounded-b-lg w-full p-2 mt-2">
                                                    <div class="h-52 overflow-hidden">
                                                        <h1
                                                            class="font-bold md:text-base text-sm text-black flex border-b-2 border-yellow-400 pb-2  mb-2">
                                                            Description:</h1>
                                                        <h1 class="mt-1 mb-1 h-auto  pb-1 text-sm overflow-hidden">
                                                            {{ $recipes->description }}</h1>
                                                    </div>
                                                    <div class="pt-2 border-t-2  border-yellow-400 text-sm">
                                                        <h1>Created at:</h1>
                                                        {{ $recipes->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            @else
                                <div class="flex w-3/4 mx-auto  text-white justify-center">
                                    <div class="flex flex-col  md:w-1/2 w-full border-2 bg-white p-2  rounded-lg">
                                        <div class="flex items-center justify-center w-full">

                                            <img class="h-14 w-14"
                                                src="https://img.icons8.com/material-outlined/96/fa314a/box-important--v1.png" />
                                        </div>
                                        <h1
                                            class="flex justify-center md:w-3/4 w-full mx-auto rounded-b-lg mt-2 mb-1 md:text-lg text-base font-medium py-2 text-gray-800">
                                            No Results Matched your Search!</h1>



                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif



                </div> --}}
                {{-- <div class=" text-white font-extrabold px-2 flex justify-center items-center rounded-lg">
                    {{ $recipe->render() }}</div> --}}
                <!--No need-->
                <!-- <div class="block justify-center bg-white px-5">

                </div>-->


                {{-- <div class="flex w-full items-center justify-center p-5 py-20">
                    <div class="w-full">
                        <div class="flex">
                            <p class="text-yellow-400 font-black lg:text-4xl md:text-3xl text-2xl uppercase">HOW
                                RECIPEAT WORKS
                            </p>
                            <p class="text-xs text-white border-2 p-2 mt-7 ml-3   text-center w-44 mb-3">HOW WE DO IT?
                            </p>
                        </div>
                        <p>HOW WE DO IT?</p>
                        <div class="flex lg:flex-row flex-col">
                            <section class="text-white body-font lg:3/4 md:w-full w-full">
                                <div class="container w-full px-5 py-24 mx-auto">
                                    <div class="flex flex-wrap w-full -m-4">
                                        <div
                                            class="lg:w-1/4 sm:w-1/2 border-2   border-white rounded-md transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110">
                                            <div class="h-full bg-black  rounded-lg overflow-hidden">
                                                <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                                                    src="https://mk0muwucepum99ape3ia.kinstacdn.com/wp-content/uploads/2019/12/%E2%80%94Pngtree%E2%80%94flat-wind-men-s-business_4575829-400x400.png"
                                                    alt="blog">
                                                <div class="p-6">
                                                    <h2
                                                        class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                        Step 1</h2>
                                                    <h1 class="title-font text-lg font-medium text-white mb-3">CREATE A
                                                        PROFILE
                                                    </h1>
                                                    <p class="leading-relaxed mb-3">Become an INSTANT Recipeat Community
                                                        Member
                                                        by
                                                        signing up for FREE</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class=" lg:w-1/4 sm:w-1/2 border-2  border-white rounded-md transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110">
                                            <div class="h-full bg-black rounded-lg overflow-hidden">
                                                <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                                                    src="https://www.freepnglogos.com/uploads/vegetables-png/fruit-and-vegetables-basket-png-20.png"
                                                    alt="blog">
                                                <div class="p-6">
                                                    <h2
                                                        class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                        Step 2</h2>
                                                    <h1 class="title-font text-lg font-medium text-white mb-3">WHAT DO
                                                        YOU HAVE?
                                                    </h1>
                                                    <p class="leading-relaxed mb-3">Check for available ingredients in
                                                        your
                                                        kitchen
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class=" lg:w-1/4 sm:w-1/2 border-2  border-white rounded-md transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110">
                                            <div class="h-full bg-black rounded-lg overflow-hidden">
                                                <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                                                    src="https://cdn3.iconfinder.com/data/icons/food-delivery-28/128/expand-foodDelivery_2px-14-512.png"
                                                    alt="blog">
                                                <div class="p-6">
                                                    <h2
                                                        class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                        Step 3</h2>
                                                    <h1 class="title-font text-lg font-medium text-white mb-3">ADD TO
                                                        YOUR LIST
                                                    </h1>
                                                    <p class="leading-relaxed mb-3">Tell us what you have in your
                                                        kitchen by
                                                        adding
                                                        your ingredients to a list</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class=" lg:w-1/4 sm:w-1/2 border-2 border-white rounded-md transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110">
                                            <div class="h-full bg-black rounded-lg overflow-hidden">
                                                <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                                                    src="https://static.abbottnutrition.com/cms-prod/abbottfamily.com.sg/img/1-Eat_tcm150-144864.png"
                                                    alt="blog">
                                                <div class="p-6">
                                                    <h2
                                                        class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                        Step 4</h2>
                                                    <h1 class="title-font text-lg font-medium text-white mb-3">RECIPEAT
                                                        IT!</h1>
                                                    <p class="leading-relaxed mb-3">Begin your Recipeat experience by
                                                        cooking
                                                        recipes provided by our trusted homechefs</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="lg:flex lg:visible invisible flex-wrap items-center   lg:w-1/4">
                                <img alt="" class="our-story-card-img"
                                    src="https://img.pngio.com/png-for-food-transparent-for-foodpng-images-pluspng-small-amount-of-food-png-885_431.png"
                                    data-uia="our-story-card-img" />
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="py-24">
                <div class="p-4">
                    <div class="h-auto py-20 bg-center bg-no-repeat rounded p-4 my-4 js-show-on-scroll text-white"
                        style="background-image:linear-gradient(rgb(0 0 0 / 40%), rgb(0 0 0 / 40%)), url('') ">
                        <div
                            class="flex flex-col text-4xl font-bold w-3/4 mx-auto py-10 border-white items-center text-center justify-center">
                            <img src="https://www.secondwifekitchen.ca/images/slider/slider-01.png" />
                            <h1 class="mt-5 animate-bounce">
                                A RECIPE HAS
                                NO SOUL<h1>
                                    <h1 class="mt-2"> YOU MUST <span class="text-yellow-500">BRING SOUL</span>
                                        TO THE RECIPE!</h1>
                        </div>

                    </div>
                </div>

            </div>
            <section class="text-white body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center js-show-on-scroll">
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <h1 class="title-font sm:text-6xl text-3xl mb-4 font-extrabold text-white">USER

                        </h1>

                        <div class="  w-full  flex flex-col">
                            <div id="moka-ix3cs"
                                class="bg-gray-400 items-center justify-center  shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
                                <h4 class="w-56 border-b-4 border-solid border-red-500 h-10  text-2xl "> What user can
                                    do ?
                                </h4>
                                <h4 class="text-orange-300  mt-5 text-xl text-justify">User can search and view recipes
                                    posted by Chef , Home Chef and other Users.He/she can also post recipes.He/She can
                                    follow any Chef, Home Chef and other users. </h4>

                                <button value="button"
                                    class="hover:text-gray-300 bg-red-600 mt-5 text-white hover:bg-black w-68 p-2 text-xl font-bold">Discover
                                    Your Newsfeed</button>
                            </div>
                        </div>
                    </div>
                    <div class=" lg:w-2/6 rounded-full md:w-1/2 bg-yellow-800 w-5/6">
                        <div class="relativebg-gray-200  w-full h-full">
                            <img class="rounded-full w-96 h-96 border border-gray-100 shadow-sm object-fill"
                                src="assets\welcome_page_user_pic\171-1715523_man-health-club-wellness-center-resort-and-spa.png" alt="user image" />

                        </div>

                    </div>
                </div>
            </section>
            <section class="text-white body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center js-show-on-scroll">
                    <div class=" lg:w-2/6 rounded-full md:w-1/2 bg-yellow-800 w-5/6">
                        <div class="relativebg-gray-200  w-full h-full">
                            <img class="rounded-full w-96 h-96 border border-gray-100 shadow-sm object-fill"
                                src="https://www.pngitem.com/pimgs/m/36-361959_chef-png-image-chef-png-transparent-png.png"
                                alt="user image" />

                        </div>

                    </div>
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <h1 class="title-font sm:text-6xl text-3xl mb-4 font-extrabold text-white">CHEF

                        </h1>

                        <div class="  w-full  flex flex-col">
                            <div id="moka-ix3cs"
                                class="bg-gray-400 items-center justify-center  shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
                                <h4 class="w-56 border-b-4 border-solid border-red-500 h-10  text-2xl "> What Chef can
                                    do ?
                                </h4>
                                <h4 class="text-orange-300  mt-5 text-xl text-justify">Chef can search and view recipes
                                    posted by Another Chef , Home Chef and other Users.He/she can also post
                                    recipes.He/She can
                                    follow any Another Chef, Home Chef and other users. </h4>

                                <button value="button"
                                    class="hover:text-gray-300 bg-red-600 mt-5 text-white hover:bg-black w-68 p-2 text-xl font-bold">Complete
                                    Your Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-white body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center js-show-on-scroll">
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <h1 class="title-font sm:text-6xl text-3xl mb-4 font-extrabold text-white">HOME CHEF

                        </h1>

                        <div class="  w-full  flex flex-col">
                            <div id="moka-ix3cs"
                                class="bg-gray-400 items-center justify-center  shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
                                <h4 class="w-68 border-b-4 border-solid border-red-500 h-10  text-2xl "> What Home Chef
                                    can
                                    do ?
                                </h4>
                                <h4 class="text-orange-300  mt-5 text-xl text-justify">Home Chef can search and view
                                    recipes
                                    posted by Chef , another Home Chef and other Users.He/she can also post
                                    recipes.He/She can
                                    follow any Chef,another Home Chef and other users. </h4>

                                <button value="button"
                                    class="hover:text-gray-300 bg-red-600 mt-5 text-white hover:bg-black w-68 p-2 text-xl font-bold">
                                    Add Recipes</button>
                            </div>
                        </div>
                    </div>
                    <div class=" lg:w-2/6 rounded-full md:w-1/2 bg-yellow-800 w-5/6">
                        <div class="relativebg-gray-200  w-full h-full">
                            <img class="rounded-full w-96 h-96 border border-gray-100 shadow-sm object-fill"
                                src="https://homechefs.dialameal.in/uploads/users/MealTangob74e08617172ae5c72ee20191216110626.jpg"
                                alt="user image" />

                        </div>

                    </div>
                </div>
            </section>
        </div>

    </section>

    <script>
        var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3E97FF",
                        "secondary": "#E5EAEE",
                        "success": "#08D1AD",
                        "info": "#844AFF",
                        "warning": "#F5CE01",
                        "danger": "#FF3D60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#DEEDFF",
                        "secondary": "#EBEDF3",
                        "success": "#D6FBF4",
                        "info": "#6125E1",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script>
        function myFunction() {
            var search_box = document.getElementById("term");
            var tooglebtn_label = document.getElementById("toggle_label");
            if (search_box.placeholder == "Search by Recipes") {
                search_box.placeholder = "Search by Ingredient";
                tooglebtn_label.style.color = 'red';
            } else {
                search_box.placeholder = "Search by Recipes";
                tooglebtn_label.style.color = '#808080';
            }
        }

        window.onload = function() {
            var selItem = sessionStorage.getItem("SelItem");
            $('#sort-item').val(selItem);
        }
        $('#sort-item').change(function() {
            var selVal = $(this).val();
            sessionStorage.setItem("SelItem", selVal);
        });

        const callback = function(entries) {
            entries.forEach((entry) => {
                console.log(entry);

                if (entry.isIntersecting) {
                    entry.target.classList.add("animate-fadeIn");
                } else {
                    entry.target.classList.remove("animate-fadeIn");
                }
            });
        };

        const observer = new IntersectionObserver(callback);

        const targets = document.querySelectorAll(".js-show-on-scroll");
        targets.forEach(function(target) {
            target.classList.add("opacity-0");
            observer.observe(target);
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>
