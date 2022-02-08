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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
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
        <div class=" h-auto bg-fixed bg-cover bg-no-repeat"
            style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('images/Background_Black.jpg');">
            <div id="mySidenav" class="sidenav text-white">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <div
                    class="bg-white  border text-gray-900 border-gray-200  dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <a href="/login">
                        <button type="button"
                            class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full rounded-t-lg inline-flex items-center ">
                            <img class="w-8 h-8"
                                src="https://img.icons8.com/ios/50/000000/login-rounded-right--v1.png" />
                            <span class="text-lg ml-2">Login</span>
                        </button>
                    </a>
                    <a href="/">
                        <button type="button"
                            class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center dark:border-gray-600 ">
                            <img class="w-8 h-8" src="https://img.icons8.com/ios/50/000000/soup-plate.png" />
                            <span class="text-lg ml-2">Recipes</span>

                        </button>
                    </a>
                    <a href="/">
                        <button type="button"
                            class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center ">
                            <img class="w-8 h-8"
                                src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
                            <span class="text-lg ml-2">Food Hacks</span>
                        </button>
                    </a>
                    <a href="/contactUs">
                        <button type="button"
                            class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium w-full rounded-b-lg inline-flex items-center ">
                            <img class="w-8 h-8"
                                src="https://img.icons8.com/ios/50/000000/add-contact-to-company.png" />
                            <span class="text-lg ml-2">Contact Us</span>
                        </button>
                    </a>
                </div>
            </div>
            <div id="main" class="text-white">
                <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
            <div class=" md:py-1 py-20 w-full sm:mt-0 flex flex-col justify-center items-center">
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
                            <input type="search" name="term" id="term"
                                value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}"
                                class="px-4 py-2 w-52 border-r-2 focus:outline-none focus:ring-0 focus:border-blue-300"
                                placeholder="Find a recipe...">
                            <select name="creator" id="sort-item"  value="{{ isset($_GET['creator']) ? $_GET['creator'] : '' }}"
                                class="px-4 py-2 w-52 border-r-2 focus:outline-none focus:ring-0 focus:border-blue-300">
                                <option value="" class="text-gray-500">All</option>
                                <option value="1">Chef</option>
                                <option value="2">Home Chef</option>
                                {{-- <select class="form-control" name="gender">
                                    <option value="male" {{ old('name',$name)=='male' ? 'selected' : ''  }}>male</option>
                                    <option value="female"  {{ old('name',$name)=='female' ? 'selected' : ''  }}>female</option>
                                </select> --}}
                            </select>
                            {{-- <select name="category" id="sort-item"
                                class="px-4 py-2 w-52 border-r-2 focus:outline-none focus:ring-0 focus:border-blue-300">
                                <option value="1" >Vegetarian</option>
                                <option value="2">Non-veg</option>
                            </select> --}}

                            <div class="flex justify-center items-center w-44 bg-white rounded-r-lg">
                                {{-- <label
                                    class="text-gray-500 flex justify-center items-center text-center mt-1">Vegetarian</label>
                                <input type="checkbox" value= 1 name="category"class="bg-white px-2 py-2 ml-2"> --}}
                                <select name="category" id="item"
                                    value="{{ isset($_GET['category']) ? $_GET['category'] : '' }}"
                                    class="px-4 py-2 w-52 border-r-2 focus:outline-none focus:ring-0 focus:border-blue-300">
                                    <option value="1">Vegetarian</option>
                                    <option value="2">Non-veg</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="flex mt-2 w-full mx-auto justify-end ">
                        <a href="/login"
                            class="bg-gray-200 text-gray-700 no-underline flex justify-center rounded-sm mr-2 w-44 py-2 px-2">Advance
                            Search</a>
                    </div>
                </form>

                <div class="w-3/4 flex flex-col py-5 mx-auto">
                    @if (isset($recipe))
                        <div class="w-full flex flex-wrap  md:flex-row flex-col">
                            @if (count($recipe) > 0)
                                @foreach ($recipe as $recipes)
                                    <a href="/view_recipe/{{ $recipes->id }}" name="view"
                                        class="flex md:flex-row no-underline h-72 md:flex-col lg:w-1/4 w-1/2  p-2 transition duration-500 ease-in transform hover:-translate-y-2 hover:scale-100">

                                        <div class="flex w-full  flex-row relative">
                                            <img alt="gallery"
                                                class="absolute mt-2 inset-0 w-full h-full object-cover border-black border-2 object-center rounded-b-lg"
                                                src="{{$recipes->getFirstMediaUrl('cover')}}" />
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
                            class="pagination text-white font-extrabold px-2 py-4 flex justify-center items-center rounded-lg">
                            {{ $recipe->render() }}</div>
                    @endif


                </div>


                <div class="mt-4">
                    <a href="login" class="py-2 px-4 no-underline font-bold rounded text-lg bg-red-600 text-white">Sign
                        In / Sign Up
                    </a>
                </div>

            </div>
            <div class="py-5">
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

            <!--User Chef Home Chef can do-->
            {{-- <section class="text-white body-font">
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
                                src="assets\welcome_page_user_pic\171-1715523_man-health-club-wellness-center-resort-and-spa.png"
                                alt="user image" />

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
            </section> --}}
            <!--End User Chef Home Chef can do-->

            <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <section class="text-white body-font">
                            <div
                                class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center js-show-on-scroll">
                                <div
                                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                                    <h1 class="title-font sm:text-6xl text-3xl mb-4 font-extrabold text-white">USER

                                    </h1>

                                    <div class="  w-full  flex flex-col">
                                        <div id="moka-ix3cs"
                                            class="bg-gray-400 items-center justify-center  shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
                                            <h4 class="w-56 border-b-4 border-solid border-red-500 h-10  text-2xl ">
                                                What user can
                                                do ?
                                            </h4>
                                            <h4 class="text-orange-300  mt-5 text-xl text-justify">User can search and
                                                view recipes
                                                posted by Chef , Home Chef and other Users.He/she can also post
                                                recipes.He/She can
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
                                            src="https://www.nicepng.com/png/detail/65-658348_happy-man-i9life-happy-man-png.png"
                                            alt="user image" />

                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <section class="text-white body-font">
                            <div
                                class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center js-show-on-scroll">
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
                                            <h4 class="w-56 border-b-4 border-solid border-red-500 h-10  text-2xl ">
                                                What Chef can
                                                do ?
                                            </h4>
                                            <h4 class="text-orange-300  mt-5 text-xl text-justify">Chef can search and
                                                view recipes
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
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <section class="text-white body-font">
                            <div
                                class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center js-show-on-scroll">
                                <div
                                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                                    <h1 class="title-font sm:text-6xl text-3xl mb-4 font-extrabold text-white">HOME
                                        CHEF

                                    </h1>

                                    <div class="  w-full  flex flex-col">
                                        <div id="moka-ix3cs"
                                            class="bg-gray-400 items-center justify-center  shadow-md p-5 h-auto rounded-lg blur-3 bg-opacity-50 flex flex-col col-span-12">
                                            <h4 class="w-68 border-b-4 border-solid border-red-500 h-10  text-2xl ">
                                                What Home Chef
                                                can
                                                do ?
                                            </h4>
                                            <h4 class="text-orange-300  mt-5 text-xl text-justify">Home Chef can search
                                                and view
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
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center  p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat px-2 bg-red-500" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat bg-red-500" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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
        // window.onload = function() {
        //     var selItem1 = sessionStorage.getItem1("SelItem1");
        //     $('#sort-item1').val(selItem1);
        // }
        // $('#sort-item1').change(function() {
        //     var selVal1 = $(this).val();
        //     sessionStorage.setItem1("SelItem1", selVal1);
        // });

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
