<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

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

        input[type=radio]:checked+label {
            border: 1px solid indigo;
            background-color: white;
            color: black;
        }

        input[type=radio]:checked+label>span.icon {
            display: inline-block;
        }

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



        <h1 class="text-center mt-6 text-white text-4xl font-bold" style="font-family: 'Manrope', sans-serif;">
            You're almost done !</h1>
        <div class="w-1/2 mx-auto  py-10">
            <div class="flex justify-between w-full mx-auto ">
                <h1 class="text-white font-bold">Step 3 <span class="font-normal text-gray-300">of 4</span></h1>
                <div class="flex items-center justify-end space-x-4 mb-4 text-white">
                    Skip
                    <i class="fas fa-angle-right text-white text-xl mt-1"></i>
                </div>

            </div>
            <div class="w-full h-1 bg-gray-400 rounded-xl">
                <div class="w-3/4 h-full bg-white rounded-xl"></div>
            </div>
            <h1 class="text-white py-4 text-lg text-left" style="font-family: 'Manrope', sans-serif;">We want to Improve
                your experience at Recipeat. This will take less than a minute</h1>

            <form method="POST" action="/storeUser3">
                @csrf

                <div class="w-full mx-auto py-3" style="font-family: 'Manrope', sans-serif;">
                    <h1 class="text-white py-4">Select your Gender</h1>
                    <div class="flex space-x-6 text-white">

                        <input class="hidden" id="1000" name="gender" value="male" {{{ (isset($user->gender) && $user->gender == 'male') ? "checked" : "" }}} type="radio" checked />
                        <label class="flex justify-center items-center   border rounded-md p-2 " for="1000">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2 "></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Male</span>
                        </label>
                        <input class="hidden" id="5000" name="gender" value="female" {{{ (isset($user->gender) && $user->gender == 'female') ? "checked" : "" }}} type="radio" />
                        <label class="flex justify-center items-center   border rounded-md p-2 " for="5000">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Female</span>
                        </label>

                        <input class="hidden" id="4000" name="gender" value="others" {{{ (isset($user->gender) && $user->gender == 'others') ? "checked" : "" }}} type="radio" />
                        <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="4000">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Others</span>
                        </label>

                        <input class="hidden" id="3000" name="gender" value="Prefer_not_to_say" {{{ (isset($user->gender) && $user->gender == 'Prefer_not_to_say') ? "checked" : "" }}} type="radio" />
                        <label class="flex justify-center items-center  border rounded-md p-2 " for="3000">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Prefer not to say</span>
                        </label>

                    </div>
                </div>

                <div class="w-full mx-auto py-3" style="font-family: 'Manrope', sans-serif;">
                    <h1 class="text-white py-4">How would you describe your cooking level?</h1>
                    <div class="flex space-x-6 text-white">

                        <input class="hidden" id="Beginner" name="cooking_level" value="Beginner" {{{ (isset($user->cooking_level) && $user->cooking_level == 'Beginner') ? "checked" : "" }}} type="radio" checked />
                        <label class="flex justify-center items-center   border rounded-md p-2 " for="Beginner">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2 "></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Beginner</span>
                        </label>
                        <input class="hidden" id="Intermediate" name="cooking_level" value="Intermediate" {{{ (isset($user->cooking_level) && $user->cooking_level == 'Intermediate') ? "checked" : "" }}} type="radio" />
                        <label class="flex justify-center items-center   border rounded-md p-2 " for="Intermediate">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Intermediate</span>
                        </label>

                        <input class="hidden" id="Expert" name="cooking_level" value="Expert" {{{ (isset($user->cooking_level) && $user->cooking_level == 'Expert') ? "checked" : "" }}} type="radio" />
                        <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="Expert">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Expert</span>
                        </label>

                    </div>
                </div>

                <div class="w-full flex items-center justify-end py-10 space-x-5">
                    <a href="/register2" class="text-white w-36 py-2 flex justify-center item-center rounded-md">
                        <i class="fas fa-angle-left text-white mt-1 mr-1"></i>
                        Previous
                    </a>
                    <button type="submit"
                        class="bg-red-600 text-white w-28 py-2 flex justify-center item-center rounded-md">Next
                        <i class="fas fa-angle-right text-white mt-1 ml-1"></i></button>
                </div>
            </form>


        </div>
    </section>
</body>

</html>
