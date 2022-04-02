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

        <div class="w-1/2  mx-auto">
            <a href="/mainDashboard" class="text-gray-100 font-semibold">
                <i class="fas fa-angle-left text-white font-bold"></i>Back Home
            </a>
        </div>

        <h1 class="text-center py-6 text-white text-4xl font-bold" style="font-family: 'Manrope', sans-serif;">Create
            your Recip<span class="text-red-600">eat</span> account</h1>
        <div class="w-1/2 mx-auto  py-5">
            <div class="flex justify-between w-full mx-auto ">
                <h1 class="text-white font-bold">Final Step</h1>
                <div class="flex items-center justify-end space-x-4 mb-4">
                    <i class="fas fa-chevron-circle-left text-gray-500 text-2xl"></i>
                    <i class="fas fa-chevron-circle-right text-white text-2xl"></i>
                </div>

            </div>
            <div class="w-full h-1 bg-gray-400 rounded-xl">
                <div class="w-full h-full bg-white rounded-xl"></div>
            </div>

            <div class="w-7/12 mx-auto py-5" style="font-family: 'Manrope', sans-serif;">
                <form class="py-10 w-full " method="POST" action="/storeUser4">
                    @csrf
                    <input type="email" name="email"
                        class="form-control bg-white  px-3 py-2 border-black text-gray-800 w-full h-12 rounded-md @error('email') is-invalid @enderror"
                        placeholder="Email *" value="{{ old('email') }}" required autocomplete="off"
                        style="font-family: 'Manrope', sans-serif;">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="py-2 mt-8" x-data="{ show: true }">

                        <div class="relative">
                            <input type="password" name="password" placeholder="Password *" :type="show ? 'password' : 'text'"
                                class="form-control bg-white  px-3 py-2 border-black text-gray-800 w-full h-12 rounded-md @error('password') is-invalid @enderror"
                                style="font-family: 'Manrope', sans-serif;">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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


                    <button type="submit"
                        class="flex justify-center py-3 bg-red-600 text-white text-xl mt-4 rounded-md w-full font-semibold">{{ __('Create Account') }}</button>
                    <div class="flex justify-between py-8">
                        <button class="text-white flex items-center  border rounded-md px-6 py-2"><img
                                class="mr-2" src="images\GoogleLogo.png">Google Login</button>
                        <button class="text-white flex items-center  border rounded-md px-4 py-2"><img
                                class="mr-2" src="images\FBLogo.png">Facebook Login</button>
                    </div>

                </form>
            </div>



        </div>
    </section>

</body>

</html>
