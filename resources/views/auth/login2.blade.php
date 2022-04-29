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
        <div class="flex justify-center w-full">
            <img src="images\logo 1.png" class="h-32 w-36 top-3" alt="logo" />
        </div>

        <div class="w-3/4 mx-auto  py-10">
            <div class="w-3/4  mx-auto">
                <a href="/mainDashboard" class="text-gray-100 font-semibold">
                    <i class="fas fa-angle-left text-white font-bold"></i>Back Home
                </a>

                <div class="flex flex-col items-center py-5" >
                    <h1 class="text-4xl text-white font-bold" style="font-family: 'Manrope', sans-serif;">Log in to your</h1>
                    <h1 class="text-4xl text-white font-bold mt-2" style="font-family: 'Manrope', sans-serif;"><span class="text-red-600">Recipeat</span> account
                    </h1>

                    <form class="py-10" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="email"  name="email" value="{{ old('email') }}"
                            class="form-control bg-white  px-3 py-2 border-black text-gray-800 w-96 h-12 rounded-md @error('email') is-invalid @enderror"
                            placeholder="Email *" required autocomplete="off" style="font-family: 'Manrope', sans-serif;">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="py-2 mt-8" x-data="{ show: true }">

                            <div class="relative">
                                <input id="password" name="password" placeholder="Password *" :type="show ? 'password' : 'text'"
                                    class="form-control bg-white  px-3 py-2 border-black text-gray-800 w-96 h-12 rounded-md @error('password') is-invalid @enderror" style="font-family: 'Manrope', sans-serif;">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                        :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                        </path>
                                    </svg>

                                    <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                        :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                        </path>
                                    </svg>

                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <label class="flex justify-center items-center text-gray-500 font-normal my-4 space-x-2">
                                <input type="checkbox" class="h-5 w-5 accent-pink-500">
                                <span class=" text-xs text-white leading-snug">Keep me logged in
                                    Me </span>
                            </label>
                            <label class="text-base text-gray-100 font-normal my-4">
                                <a href="#"
                                    class="cursor-pointer tracking-tighter text-white border-b-2 border-gray-200 hover:border-gray-400">
                                    <span>Forgot
                                        Password?</span>
                                </a>
                            </label>
                        </div>
                        <button type="submit"
                            class="flex justify-center py-3 bg-red-600 text-white text-xl mt-4 rounded-md w-full font-bold">Log
                            In</button>
                        <div class="flex justify-between py-8">

                            <a href="{{route('login.google')}}" class="text-white flex items-center  border rounded-md px-6 py-2"><img
                                    class="mr-2" src="images\GoogleLogo.png">Google Login</a>
                            <a
                            href="{{route('login.facebook')}}"
                             class="text-white flex items-center  border rounded-md px-4 py-2"><img
                                    class="mr-2" src="images\FBLogo.png">Facebook Login</a>
                        </div>
                        <h1 class="flex justify-center text-white">Don’t have an account?<a
                                class="ml-2 underline font-semibold" href="/register1">Create Account</a></h1>
                    </form>
                </div>
            </div>

        </div>

    </section>

</body>

</html>
