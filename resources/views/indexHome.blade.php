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
    <!-- end:: Custom Stylesheets -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;

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
    <section class="w-full bg-fixed h-screen flex flex-row">
        <div id="mySidenav" class="sidenav text-white bg-white">
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

        <div id="main" class="w-20  text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div class="w-full h-full text-white">
            <div
                class="flex w-11/12 mx-auto mt-10 py-20 rounded-xl bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-1/2  flex flex-col py-12 justify-center mx-10">
                    <h1 class="text-5xl font-bold mb-4">Welcome Nil ,</h1>
                    <p class="text-2xl font-medium mt-4 mb-2">We want to better your experience on Recipeat.</p>
                    <p class="text-2xl font-medium ">This part will only take a couple minutes!</p>
                    <div class="flex mt-6 py-10">
                        <a href="/indexHomequestions" class="px-16 py-4 bg-red-600 rounded text-white xl:text-xl text-lg font-bold">
                           Let's do it
                        </a>
                        <a href="" class="px-5 py-3  rounded text-white text-xl">
                           I want to skip this step
                         </a>

                    </div>
                </div>
                <div class="w-1/2">
                    <img class="h-96" src="images\lolipop.jpeg">
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
