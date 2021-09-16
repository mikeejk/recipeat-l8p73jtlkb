<!DOCTYPE html>
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

</head>

<body class="antialiased">
    <section>
        {{-- <div class="flex items-top justify-center min-h-screen bg-white sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-black">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-black">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-black">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}
        <!-- component -->
        <div>
            <div class="h-screen flex justify-center items-center bg-cover bg-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://recipeat.in/styles/site/default/images/demo/slides/slide-image-02.jpg')">
                <div class="absolute top-0 left-0 mt-5 ml-5">
                    <img src="assets/media/logos/logo-5.png" alt="logo" class="h-16" />
                </div>
                <a href="/dashboard"><button class="rounded-lg absolute bg-red-600 hover:bg-red-700 text-white p-3 top-0 right-0 mt-3 mr-5">My
                    Recipe's</button></a>
                <div class="space-y-5">
                    <p class="text-white font-bold text-4xl flex flex-col items-center">
                        <span class="text-yellow-400">RECIPEAT. <span class="text-white text-5xl">EAT.</span> REPEAT.
                        </span>
                    </p>
                    <div class="flex flex-row items-center justify-center">
                        <input type="text" placeholder="Find a Recipe"
                            class="rounded-l-lg p-4 focus:outline-none focus:ring-1 focus:ring-blue-300 " />
                        <button
                            class="rounded-r-lg p-4 text-l font-semibold bg-red-600 hover:bg-red-700 text-white">Search</button>
                    </div>
                </div>
            </div>
            <div class="h-screen flex items-center justify-center bg-black p-5">
                <div class="flex justify-center w-2/6">
                    <img alt="" class="our-story-card-img"
                        src="https://www.freepnglogos.com/uploads/food-png/food-grass-fed-beef-foodservice-products-grass-run-farms-4.png"
                        data-uia="our-story-card-img" />
                </div>
                <div class="space-y-5 w-4/6">
                    <p class="text-center px-4 text-white font-bold text-4xl">A RECIPE HAS NO SOUL <br />
                        YOU MUST <span class="text-yellow-400 text-5xl">BRING SOUL</span> TO THE RECIPE!</p>
                </div>
            </div>
            <div class="pl-10 h-screen flex items-center justify-center bg-black p-5">
                <div class="p-5 w-8/12">
                    <p class="text-yellow-400 font-black text-4xl uppercase">HOW RECIPEAT WORKS <span
                            class="text-xs text-white border-2 text-center w-36 mb-3">HOW WE DO IT?</span></p>
                    <p>HOW WE DO IT?</p>
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap -m-4">
                                <div class="xl:w-1/4 md:w-1/2 p-4">
                                    <div class="bg-gray-700 p-6 rounded-lg">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://mk0muwucepum99ape3ia.kinstacdn.com/wp-content/uploads/2019/12/%E2%80%94Pngtree%E2%80%94flat-wind-men-s-business_4575829-400x400.png" alt="content">
                                        <h3 class="tracking-widest text-white text-xl font-bold text-center title-font">
                                            CREATE A PROFILE</h3>
                                    </div>
                                </div>
                                <div class="xl:w-1/4 md:w-1/2 p-4">
                                    <div class="bg-gray-700 p-6 rounded-lg">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://www.transparentpng.com/thumb/food/n0nASj-food-plate-cut-out.png" alt="content">
                                        <h3 class="tracking-widest text-white text-xl font-bold text-center title-font">
                                            WHAT TO YOU HAVE?</h3>
                                    </div>
                                </div>
                                <div class="xl:w-1/4 md:w-1/2 p-4">
                                    <div class="bg-gray-700 p-6 rounded-lg">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://cdn3.iconfinder.com/data/icons/food-delivery-28/128/expand-foodDelivery_2px-14-512.png" alt="content">
                                        <h3 class="tracking-widest text-white text-xl font-bold text-center title-font">
                                            ADD YOUR LIST</h3>
                                    </div>
                                </div>
                                <div class="xl:w-1/4 md:w-1/2 p-4">
                                    <div class="bg-gray-700 p-6 rounded-lg">
                                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                                            src="https://static.abbottnutrition.com/cms-prod/abbottfamily.com.sg/img/1-Eat_tcm150-144864.png" alt="content">
                                        <h3 class="tracking-widest text-white text-xl font-bold text-center title-font">
                                            RECIPEAT <br/>IT!</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="w-4/12">
                    <img alt="" class="our-story-card-img"
                        src="https://img.pngio.com/png-for-food-transparent-for-foodpng-images-pluspng-small-amount-of-food-png-885_431.png"
                        data-uia="our-story-card-img" />
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
</body>

</html>
