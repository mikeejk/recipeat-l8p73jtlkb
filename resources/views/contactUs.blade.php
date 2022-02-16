<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
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
    <!-- end:: Custom Stylesheets -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
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

    <!-- component -->
    <section class="w-full bg-fixed "
        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://recipeat.in/styles/site/default/images/demo/slides/slide-image-02.jpg')">
        <div id="mySidenav" class="sidenav text-white">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            {{-- <a href="#" class="border-2 p-2 border-white">Login</a>
            <a href="#">Recipes</a>
            <a href="#">Food Hacks</a>
            <a href="#">Contact Us</a> --}}
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
                        <img class="w-8 h-8" src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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
        <div class=" md:w-2/4 mx-auto text-white">
            <div class=" w-full bg-black bg-opacity-50 rounded md:p-8  p-3">
                <p class="text-3xl text-white  text-center">Contact Us</p>
                <form action="{{ route('contactUs.store') }}" method="post">

                    <div class="md:flex items-center mt-12">
                        <div class="w-full md:w-1/2 flex flex-col">
                            {{-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> --}}
                            <label class="font-semibold leading-none">Name<span class="text-red-400">*</span></label>
                            <input type="text" name="name"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                            <label class="font-semibold leading-none">Phone<span class="text-red-400">*</span></label>
                            <input type="number" name="phone"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>
                    </div>
                    <div class="md:flex items-center mt-8">
                        <div class="w-full flex flex-col">
                            <label class="font-semibold leading-none">E-mail<span
                                    class="text-red-400">*</span></label>
                            <input type="email" name="email"
                                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                        </div>

                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="font-semibold leading-none">Message<span
                                    class="text-red-400">*</span></label>
                            <textarea type="text" name="message"
                                class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <button type="submit"
                            class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-red-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                            Send message
                        </button>
                    </div>
                </form>
                <div class="flex justify-center gap-4">
                    <button id="facebook"
                        class="bg-white  sticky duration-500 border-2 border-blue-600 fixed  w-12 transform hover:-translate-y-3   h-12 text-2xl rounded-full hover:bg-blue-600 hover:text-white text-blue-600 ">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button id="instagram"
                        class=" border-2 hover:border-0 border-pink-500 bg-gradient-to-b text-2xl hover:from-indigo-600 hover:via-pink-600 hover:to-yellow-500 min-w-wull hover:text-white bg-white text-pink-600 w-12 h-12  transform hover:-translate-y-3 rounded-full duration-500 ">
                        <i class="fab fa-instagram"></i>
                    </button>
                    <!--Whatsapp Button -->
                    <button id="whatsapp"
                        class="bg-white duration-500    w-12 h-12 border-2 rounded-full border-green-600 transform hover:-translate-y-3  text-2xl text-green-500 hover:bg-green-600 hover:text-white">
                        <i class="fab fa-whatsapp"></i>
                    </button>
                    <!--Twitter Button -->
                    <button id="twitter"
                        class="bg-white  transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-blue-400 border-blue-400 hover:bg-blue-400 hover:text-white text-2xl">
                        <i class="fab fa-twitter"></i>
                    </button>
                </div>
            </div>


        </div>
    </section>
    <script>
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
