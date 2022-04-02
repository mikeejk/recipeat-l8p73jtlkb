<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Roboto+Slab:wght@100;200;300;400;500&display=swap"
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

    <style>
        body {}

    </style>
</head>

<body class="antialiased overflow-x-hidden">
    <section class="" style="background: rgba(21, 17, 17, 1);">
        <div class="flex items-center w-full">
            <div class="w-1/2 flex justify-end ">
                <img class="h-48 w-52 top-3 -mr-20" src="images\logo 1.png" alt="logo" />
            </div>
            <div class="w-1/2 flex justify-center">
                <div class="flex justify-center items-center text-white text-base font normal space-x-4  w-full">
                    <h1 class="text-lg font-semibold">Already have an account?</h1>
                    <a href="/login1"
                        class="flex justify-center items-center bg-red-600 text-white w-24 h-10 px-2 rounded">Login</a>
                </div>
            </div>
        </div>

        <h1 class="text-center py-6 text-white text-4xl font-bold" style="font-family: 'Manrope', sans-serif;">Welcome
            to Recip<span class="text-red-600">eat!</span></h1>
        <div class="w-1/2 mx-auto  py-10">
            <div class="flex justify-between w-full mx-auto ">
                <h1 class="text-white font-bold">Step 1 <span class="font-normal text-gray-300">of 4</span></h1>
                <div class="flex items-center justify-end space-x-4 mb-4">
                    <a href="/mainDashboard"><i class="fas fa-chevron-circle-left text-white text-2xl"></i></a>
                    <i class="fas fa-chevron-circle-right text-white text-2xl"></i>
                </div>

            </div>
            <div class="w-full h-1 bg-gray-400 rounded-xl">
                <div class="w-1/4 h-full bg-white rounded-xl"></div>
            </div>
            <h1 class="text-white py-4 text-lg text-center" style="font-family: 'Manrope', sans-serif;">We would like to
                improve your cooking experience. This will
                take less than a minute</h1>
            <form method="POST" action="/storeUser">
                @csrf

                <div class="w-1/2 mx-auto py-5" style="font-family: 'Manrope', sans-serif;">

                    <input type="text" name="name" value="{{ $user->name ?? '' }}" placeholder="What’s your name?"
                        class="text-4xl text-gray-200 break-all text-center form-control border-b border-gray-400 bg-transparent w-full flex justify-center py-6 placeholder:text-gray-400 focus:ring-0 focus:outline-none">

                </div>
                <div class="w-full flex items-center justify-end py-10">
                    <button type="submit"
                        class="bg-red-600 text-white w-36 py-2 flex justify-center item-center rounded-md">Next
                        <i class="fas fa-angle-right text-white mt-1 ml-1"></i></button>
                </div>
            </form>


        </div>
    </section>

</body>

</html>
