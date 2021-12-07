<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <!-- multiselect -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
    <!--Style For -->
    <style>
    input:checked~.dot {
        transform: translateX(100%);
        background-color: #28b3f3;
    }
    </style>
    <!--Style for Buttons-->
    <style>
    /* Nina */
    .button--nina {
        -webkit-transition: background-color 0.3s;
        transition: background-color 0.3s;
    }

    .button--nina>span {
        display: inline-block;
        padding: 0;
        opacity: 0;
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0);
        -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
        transition: transform 0.3s, opacity 0.3s;
        -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
        transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
    }

    .button--nina::before {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 0;
        -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
        transition: transform 0.3s, opacity 0.3s;
        -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
        transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
    }

    .button--nina:hover::before {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
    }

    .button--nina:hover>span {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .button--nina:hover>span:nth-child(1) {
        -webkit-transition-delay: 0.045s;
        transition-delay: 0.045s;
    }

    .button--nina:hover>span:nth-child(2) {
        -webkit-transition-delay: 0.09s;
        transition-delay: 0.09s;
    }

    .button--nina:hover>span:nth-child(3) {
        -webkit-transition-delay: 0.135s;
        transition-delay: 0.135s;
    }

    .button--nina:hover>span:nth-child(4) {
        -webkit-transition-delay: 0.18s;
        transition-delay: 0.18s;
    }

    .button--nina:hover>span:nth-child(5) {
        -webkit-transition-delay: 0.225s;
        transition-delay: 0.225s;
    }

    .button--nina:hover>span:nth-child(6) {
        -webkit-transition-delay: 0.27s;
        transition-delay: 0.27s;
    }

    .button--nina:hover>span:nth-child(7) {
        -webkit-transition-delay: 0.315s;
        transition-delay: 0.315s;
    }

    .button--nina:hover>span:nth-child(8) {
        -webkit-transition-delay: 0.36s;
        transition-delay: 0.36s;
    }

    .button--nina:hover>span:nth-child(9) {
        -webkit-transition-delay: 0.405s;
        transition-delay: 0.405s;
    }

    .button--nina:hover>span:nth-child(10) {
        -webkit-transition-delay: 0.45s;
        transition-delay: 0.45s;
    }
    </style>
</head>

<body class="antialiased">

    <section>
        <!-- component -->
        <div>
            <div class="h-full sm:mt-0 lg-mt-32 flex flex-col justify-center items-center bg-fixed bg-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://recipeat.in/styles/site/default/images/demo/slides/slide-image-02.jpg')">
                <a href="/welcome" class="absolute top-0 left-0 mt-5 ml-5">
                    <img src="assets/media/logos/logo-5.png" alt="logo" class="h-16" />
                </a>
                <a href="/dashboard"><button
                        class="rounded-lg absolute bg-red-600 hover:bg-red-700 text-white p-3 top-0 right-0 mt-3 mr-5">My
                        Recipe's</button>
                </a>
                <form>
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
                                        <!-- <form method="post" id="category_form">
                                            <div class="form-group">
                                                <label>Select</label>
                                                <select id="ingredient" name="name[]" multiple class="form-control">
                                                    <option value="Ginger">Ginger</option>
                                                    <option value="garlic">garlic</option>
                                                    <option value="pepper">pepper</option>
                                                    <option value="salt">salt</option>
                                                    <option value="Turmeric">Turmeric</option>
                                                    <option value="egg">egg</option>
                                                    <option value="chicken">chicken</option>
                                                    <option value="mutton">mutton</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                                            </div>
                                        </form> 

                                        <!-- image search box -->
                                        <div class="box pt-6">
                                            <div class="box-wrapper w-full mx-auto">
                                                <div
                                                    class="bg-white rounded-full flex items-center w-full focus:outline-none p-3 shadow-sm border border-gray-200">
                                                    <select name="ingredients[]" id="ingredient"class=".js-example-responsive form-control multiple">
                                                        @foreach($ingredients as $item)
                                                        <option value="{{$item->id}}">{{$item->ingredient}}</option>
                                                        @endforeach
                                                    </select>
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
                                        <form>
                                            <a href="/welcome">
                                                <button
                                                    class="button button--nina md:px-8 px-4 py-0 text-gray-300 hover:text-white relative block focus:outline-none border-b-2 border-solid rounded-md text-sm text-center font-semibold uppercase tracking-widest overflow-hidden">Recipes
                                                </button></a>
                                        </form>
                                        <form>
                                            <button
                                                class="button button--nina md:px-8  py-0  text-gray-300 hover:text-white relative block focus:outline-none border-b-2 border-solid rounded-md text-sm text-center font-semibold uppercase tracking-widest overflow-hidden">Ingredients
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="w-3/4 flex flex-row py-5 mx-auto">
                    @if (isset($recipe))
                    <div class="w-full flex flex-wrap  md:flex-row flex-col">
                        @if (count($recipe) > 0)
                        @foreach ($recipe as $recipes)
                        <a href="/recipeview/{{ $recipes->id }}" name="view"
                            class="flex xl:flex-row  h-72 md:flex-col lg:w-1/4 md:w-1/2 w-full p-2 transition duration-500 ease-in transform hover:-translate-y-2 hover:scale-100">
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
                                            {{ $recipes->created_at }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <!-- {!! $recipe->links() !!} -->
                        <!-- {{ $recipe->render()}} -->

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
                    @endif


                </div>

                <div class="flex items-center justify-center px-5">
                    {{$recipe->render()}}
                </div>



                <div class="flex w-full items-center justify-center p-5 py-20">
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
                </div>
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
    
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".js-example-responsive").select2({
            placeholder: "searchby ingredients",
            width: 'resolve',
            ajax: {
                url: '/app/ingredients',
                dataType: "json",
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        page: params.page 
                    };
                },
                processResults: function(data,params) { params.page=params.page||1;
                    return {
                        results: data.data,
                        
                    };
                },
                cache: true

            }
        });
    });
    </script>
</body>

</html>