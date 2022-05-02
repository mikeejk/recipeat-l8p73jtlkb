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
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body class="antialiased bg-black ">

    <header class="flex justify-evenly py-7 items-center" style="background-color: rgba(20, 20, 20, 1)">

        <div class="flex space-x-4">
            <a href="/welcome"><i class="fas fa-bars text-white text-3xl"></i></a>
            <img src="images\explore_header_logo.png" alt="logo" class="">
        </div>

        <!-- Search Bar -->
        @include('searchBar')

        <a href="/HomePage" class="flex space-x-2 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.0799 18.0482H5.11988C3.66388 18.0482 2.33588 16.9282 2.09588 15.4882L1.03188 9.12018C0.863882 8.12818 1.34389 6.85619 2.13589 6.22419L7.67989 1.78415C8.75189 0.920147 10.4399 0.928155 11.5199 1.79215L17.0639 6.22419C17.8479 6.85619 18.3279 8.12818 18.1679 9.12018L17.1039 15.4882C16.8639 16.9042 15.5119 18.0482 14.0799 18.0482ZM9.59189 2.35216C9.16789 2.35216 8.74388 2.48014 8.43188 2.72814L2.88789 7.16818C2.43189 7.53618 2.11989 8.35214 2.21589 8.92814L3.27989 15.2962C3.42389 16.1362 4.26388 16.8482 5.11988 16.8482H14.0799C14.9359 16.8482 15.7759 16.1362 15.9199 15.2881L16.9839 8.92018C17.0799 8.34418 16.7599 7.52017 16.3119 7.16017L10.7679 2.72814C10.4479 2.48014 10.0239 2.35216 9.59189 2.35216Z"
                    fill="white" />
                <path
                    d="M9.6 13C8.168 13 7 11.832 7 10.4C7 8.96805 8.168 7.80005 9.6 7.80005C11.032 7.80005 12.2 8.96805 12.2 10.4C12.2 11.832 11.032 13 9.6 13ZM9.6 9.00005C8.832 9.00005 8.2 9.63205 8.2 10.4C8.2 11.168 8.832 11.8 9.6 11.8C10.368 11.8 11 11.168 11 10.4C11 9.63205 10.368 9.00005 9.6 9.00005Z"
                    fill="white" />
            </svg>
            <h1 class="text-white">Home</h1>
        </a>

        <a href="/exploreRecipe" class="flex space-x-2 items-center">
            <svg width="24" height="31" viewBox="0 0 24 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM16.15 12.83L14.42 13.41C13.94 13.57 13.57 13.94 13.41 14.42L12.83 16.15C12.34 17.64 10.24 17.61 9.78 16.12L7.83 9.84C7.45 8.59 8.6 7.44 9.83 7.82L16.12 9.77C17.61 10.24 17.63 12.34 16.15 12.83Z"
                    fill="white" />
                <circle cx="12.7" cy="29" r="2" fill="white" />
            </svg>
            <h1 class="text-white font-semibold">Explore</h1>
        </a>

        <div class="flex space-x-2 items-center">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.5 18.248C9.94799 18.248 9.42799 17.968 9.05999 17.48L7.85999 15.88C7.83599 15.848 7.73999 15.808 7.69999 15.8H7.29999C3.96399 15.8 1.89999 14.896 1.89999 10.4V6.4C1.89999 2.864 3.76399 1 7.29999 1H13.7C17.236 1 19.1 2.864 19.1 6.4V10.4C19.1 13.936 17.236 15.8 13.7 15.8H13.3C13.236 15.8 13.18 15.832 13.14 15.88L11.94 17.48C11.572 17.968 11.052 18.248 10.5 18.248ZM7.29999 2.2C4.43599 2.2 3.09999 3.536 3.09999 6.4V10.4C3.09999 14.016 4.33999 14.6 7.29999 14.6H7.69999C8.10799 14.6 8.57199 14.832 8.81999 15.16L10.02 16.76C10.3 17.128 10.7 17.128 10.98 16.76L12.18 15.16C12.444 14.808 12.86 14.6 13.3 14.6H13.7C16.564 14.6 17.9 13.264 17.9 10.4V6.4C17.9 3.536 16.564 2.2 13.7 2.2H7.29999Z"
                    fill="#FAFAFA" />
                <path
                    d="M14.5 7.00005H6.49999C6.17199 7.00005 5.89999 6.72805 5.89999 6.40005C5.89999 6.07205 6.17199 5.80005 6.49999 5.80005H14.5C14.828 5.80005 15.1 6.07205 15.1 6.40005C15.1 6.72805 14.828 7.00005 14.5 7.00005Z"
                    fill="#FAFAFA" />
                <path
                    d="M11.3 11H6.49999C6.17199 11 5.89999 10.728 5.89999 10.4C5.89999 10.072 6.17199 9.80005 6.49999 9.80005H11.3C11.628 9.80005 11.9 10.072 11.9 10.4C11.9 10.728 11.628 11 11.3 11Z"
                    fill="#FAFAFA" />
            </svg>

            <h1 class="text-white">Inbox</h1>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm">3</h6>
            </div>
        </div>

        <a href="/notifications" class="flex space-x-2 items-center">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.41488 15.2752C7.68125 15.2752 5.94762 14.9999 4.30327 14.4493C3.67827 14.2335 3.20208 13.7946 2.99375 13.2216C2.77798 12.6487 2.85238 12.0163 3.19464 11.4508L4.0503 10.0297C4.22887 9.73206 4.39256 9.13682 4.39256 8.78712V6.63682C4.39256 3.86897 6.64702 1.6145 9.41488 1.6145C12.1827 1.6145 14.4372 3.86897 14.4372 6.63682V8.78712C14.4372 9.12938 14.6009 9.73206 14.7795 10.0371L15.6277 11.4508C15.9476 11.9865 16.0071 12.6338 15.7914 13.2216C15.5756 13.8094 15.1068 14.2559 14.519 14.4493C12.8821 14.9999 11.1485 15.2752 9.41488 15.2752ZM9.41488 2.73057C7.26458 2.73057 5.50863 4.47908 5.50863 6.63682V8.78712C5.50863 9.33028 5.28542 10.1338 5.01012 10.6026L4.15446 12.0237C3.99077 12.299 3.94613 12.5892 4.04286 12.8347C4.13214 13.0877 4.35536 13.2812 4.66042 13.3853C7.77054 14.427 11.0667 14.427 14.1768 13.3853C14.4446 13.296 14.653 13.0952 14.7497 12.8273C14.8464 12.5594 14.8241 12.2693 14.6753 12.0237L13.8196 10.6026C13.5369 10.119 13.3211 9.32283 13.3211 8.77968V6.63682C13.3211 4.47908 11.5726 2.73057 9.41488 2.73057Z"
                    fill="white" />
                <path
                    d="M10.7988 2.9315C10.7467 2.9315 10.6946 2.92406 10.6426 2.90918C10.4268 2.84966 10.2185 2.80501 10.0176 2.77525C9.38512 2.69341 8.775 2.73805 8.20208 2.90918C7.99375 2.97614 7.77054 2.90918 7.62917 2.75293C7.4878 2.59668 7.44315 2.37347 7.525 2.17257C7.83006 1.39132 8.57411 0.87793 9.42232 0.87793C10.2705 0.87793 11.0146 1.38388 11.3196 2.17257C11.394 2.37347 11.3568 2.59668 11.2155 2.75293C11.1039 2.87198 10.9476 2.9315 10.7988 2.9315Z"
                    fill="white" />
                <path
                    d="M9.41488 16.9716C8.67827 16.9716 7.96399 16.674 7.44315 16.1531C6.92232 15.6323 6.6247 14.918 6.6247 14.1814H7.74077C7.74077 14.6204 7.91935 15.0519 8.23185 15.3644C8.54434 15.6769 8.97589 15.8555 9.41488 15.8555C10.3375 15.8555 11.089 15.104 11.089 14.1814H12.2051C12.2051 15.7216 10.9551 16.9716 9.41488 16.9716Z"
                    fill="white" />
            </svg>
            <h1 class="text-white">Notifications</h1>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm text-center">{{ count(auth()->user()->unreadnotifications) }}</h6>
            </div>
        </a>
    </header>

    <section class="flex" style="background:rgba(255, 255, 255, 0.1);">
        <div class="w-3/12 py-1  px-10 font-montserrat">
            <h2 class="text-white ">Showing you</h2>
            <h1 class="text-white font-semibold text-lg">Trending recipes</h1>
        </div>
        <div class="w-9/12  py-5">
            <div class="flex justify-evenly">
                <h1 class="text-white">Sort by</h1>
                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Easy to cook</h1>
                </div>

                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Low cooking time</h1>
                </div>

                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Fewer Ingredients</h1>
                </div>

                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">From Top Chefs</h1>
                </div>

                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Sweet</h1>
                </div>

                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Spicy</h1>
                </div>

                <div class=" flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Sour</h1>
                </div>

                <div class="flex items-center justify-center text-sm  mr-1 rounded py-1 px-4"
                    style="background: #141414;">
                    <h1 class="text-white">Bitter</h1>
                </div>
            </div>

        </div>

    </section>

    <!--Main Content-->
    <section class="px-10 bg-black py-10">
        <div class="grid-cols-4 grid gap-4 justify-start">
            @if (count($recipe) > 0)
                @foreach ($recipe as $recipes)
                    <div class="w-full h-auto flex flex-col rounded-md px-2 mr-2" style="background-color: #141414">
                        <div class="py-2 flex space-x-2">
                            @if ($recipes->user->hasrole('Chef'))
                                @if (!empty(DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()))
                                    <img src="{{ asset('storage/public/' .DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()) }}"
                                        class="h-12 w-12 rounded-full">
                                @else
                                    <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                                        class="h-12 w-12 rounded-full">
                                @endif
                            @else
                                @if (!empty(DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()))
                                    <img src="{{ asset('storage/public/' .DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()) }}"
                                        class="h-12 w-12 rounded-full">
                                @else
                                    <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                                        class="h-12 w-12 rounded-full">
                                @endif

                                {{-- <img src="{{ asset('storage/public/' .DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('image')->first()) }}"
                                    class="h-12 w-12 rounded-full"> --}}
                            @endif


                            <div class="flex flex-col  justify-center text-white">
                                <p class="font-semibold">{{ $recipes->user->name }}
                                    {{-- {{ dd($recipes->chef_questions()) }} --}}
                                </p>

                                @if ($recipes->user->hasrole('Chef'))
                                    {{ DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('designation')->first() }}
                                @elseif ($recipes->user->hasrole('Home-Chef'))
                                    {{ DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipes->user_id)->pluck('mail')->first() }}
                                @else
                                    <h5 class="text-sm text-gray-400">User</h5>
                                @endif
                            </div>

                        </div>

                        <div class="py-2">
                            <img class="h-56 w-full rounded-md" src="{{ $recipes->getFirstMediaUrl('cover') }}" alt="image">
                        </div>

                        <div class="flex justify-evenly py-2">
                            <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                                <svg width="20" height="20" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                        fill="white" />
                                    <path
                                        d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                        fill="white" />
                                    <path
                                        d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                        fill="white" />
                                </svg>
                                <h1 class="text-xs text-white">{{ $recipes->cooking_time }} mins</h1>
                            </div>
                            <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                                <h1 class="text-xs text-white"> {{ DB::table('recipe__ingredients')->join('recipes', 'recipes.id', '=', 'recipe__ingredients.recipe_id')->where('recipes.id', $recipes->id)->count() }} Ingredients
                                </h1>
                            </div>
                            <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                                <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                            </div>
                        </div>

                        <div class="flex py-2 justify-between px-2">
                            <div class="flex space-x-4">
                                {{-- <div class="flex items-center space-x-2">
                                    <svg width="23" height="21" viewBox="0 0 23 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4551 20.0014C11.1451 20.0014 10.8451 19.9614 10.5951 19.8714C6.77508 18.5614 0.705078 13.9114 0.705078 7.04142C0.705078 3.54142 3.53508 0.701416 7.01508 0.701416C8.70508 0.701416 10.2851 1.36142 11.4551 2.54142C12.6251 1.36142 14.2051 0.701416 15.8951 0.701416C19.3751 0.701416 22.2051 3.55142 22.2051 7.04142C22.2051 13.9214 16.1351 18.5614 12.3151 19.8714C12.0651 19.9614 11.7651 20.0014 11.4551 20.0014ZM7.01508 2.20142C4.36508 2.20142 2.20508 4.37142 2.20508 7.04142C2.20508 13.8714 8.77508 17.6714 11.0851 18.4614C11.2651 18.5214 11.6551 18.5214 11.8351 18.4614C14.1351 17.6714 20.7151 13.8814 20.7151 7.04142C20.7151 4.37142 18.5551 2.20142 15.9051 2.20142C14.3851 2.20142 12.9751 2.91142 12.0651 4.14142C11.7851 4.52142 11.1451 4.52142 10.8651 4.14142C9.93508 2.90142 8.53508 2.20142 7.01508 2.20142Z"
                                            fill="#292D32" />
                                    </svg>

                                    <h2 class="font-normal text-sm" style="color:#292D32;">
                                        {{ DB::table('likes')->join('recipes', 'recipes.id', '=', 'likes.likeable_id')->where('recipes.id', $recipes->id)->count() }}
                                    </h2>
                                </div> --}}
                                <div class="flex items-center space-x-2">
                                    @include('like', ['model' => $recipes])
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.0469 11.8339H9.20454C8.80378 11.8339 8.47144 11.5015 8.47144 11.1008C8.47144 10.7 8.80378 10.3677 9.20454 10.3677H16.0469C16.4477 10.3677 16.78 10.7 16.78 11.1008C16.78 11.5015 16.4477 11.8339 16.0469 11.8339Z"
                                            fill="#292D32" />
                                        <path
                                            d="M16.5356 22.6546C16.2032 22.6546 15.8709 22.5569 15.5874 22.3712L11.4234 19.5951H7.73829C4.37577 19.5951 2.1178 17.3371 2.1178 13.9746V8.10975C2.1178 4.74723 4.37577 2.48926 7.73829 2.48926H17.5131C20.8756 2.48926 23.1336 4.74723 23.1336 8.10975V13.9746C23.1336 17.083 21.1982 19.253 18.2462 19.556V20.944C18.2462 21.5794 17.904 22.1561 17.3469 22.4493C17.0927 22.5862 16.8093 22.6546 16.5356 22.6546ZM7.73829 3.94569C5.2164 3.94569 3.58401 5.57808 3.58401 8.09997V13.9648C3.58401 16.4867 5.2164 18.1191 7.73829 18.1191H11.6482C11.7948 18.1191 11.9317 18.1582 12.0588 18.2462L16.4085 21.1395C16.516 21.208 16.6138 21.1787 16.6627 21.1493C16.7115 21.12 16.7897 21.0613 16.7897 20.9343V18.8522C16.7897 18.4515 17.1221 18.1191 17.5229 18.1191C20.0447 18.1191 21.6771 16.4867 21.6771 13.9648V8.09997C21.6771 5.57808 20.0447 3.94569 17.5229 3.94569H7.73829Z"
                                            fill="#292D32" />
                                    </svg>

                                    <h2 class="font-normal text-sm" style="color:#292D32;">
                                        {{ DB::table('comments')->join('recipes', 'recipes.id', '=', 'comments.commentable_id')->where('recipes.id', $recipes->id)->count() }}
                                    </h2>
                                </div>
                            </div>



                            <div class="flex items-center space-x-1">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                        fill="#292D32" />
                                    <path
                                        d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                        fill="#292D32" />
                                    <path
                                        d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                        fill="#292D32" />
                                </svg>
                                <h2 class="font-normal text-sm" style="color:#292D32;">Add to Collection</h2>
                            </div>



                        </div>

                        <div class="py-2 px-2">
                            <p class="text-white">{{ $recipes->recipe_name }}</p>
                            <h3 class="text-sm" style="color: #76777E;">
                                {{ $recipes->created_at->format('l, d M Y') }}</h3>
                        </div>

                    </div>
                @endforeach
            @else
                <h1 class="text-white">No recipes Found</h1>
            @endif

            {{-- <div class="w-1/4 h-full flex flex-col rounded-md px-2" style="background-color: #141414">
                <div class="py-2 flex space-x-2">
                    <img src="https://www.meatable.com/wp-content/uploads/2019/12/d186bb35b1fe8caebb0815685c8c1321.jpg"
                        class="h-12 w-12 rounded-full">
                    <div class="flex flex-col  justify-center text-white">
                        <p class="font-semibold">Alaguraja R</p>
                        <h5 class="text-sm text-gray-400">Executive Chef, India - TN</h5>
                    </div>
                </div>
                <div class="py-2">
                    <img class="h-auto rounded-md" src="https://www.simplyrecipes.com/thmb/EtrMff1zszEJmQWwPrthL1uZ-O4=/1108x1108/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2015__08__mediterranean-tuna-pasta-horiz-a-1600-0a3fdff066b94ecbaf8f028cf8352a07.jpg">
                </div>
                <div class="flex justify-evenly py-2">
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                        <svg width="20" height="20" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                fill="white" />
                            <path
                                d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                fill="white" />
                            <path
                                d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                fill="white" />
                        </svg>
                        <h1 class="text-xs text-white">20 mins</h1>
                    </div>
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">

                        <h1 class="text-xs text-white">8 Ingredients</h1>
                    </div>
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                        <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                    </div>
                </div>
                <div class="flex py-2 justify-between px-2">
                    <div class="flex space-x-4">
                        <div class="flex items-center space-x-2">
                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4551 20.0014C11.1451 20.0014 10.8451 19.9614 10.5951 19.8714C6.77508 18.5614 0.705078 13.9114 0.705078 7.04142C0.705078 3.54142 3.53508 0.701416 7.01508 0.701416C8.70508 0.701416 10.2851 1.36142 11.4551 2.54142C12.6251 1.36142 14.2051 0.701416 15.8951 0.701416C19.3751 0.701416 22.2051 3.55142 22.2051 7.04142C22.2051 13.9214 16.1351 18.5614 12.3151 19.8714C12.0651 19.9614 11.7651 20.0014 11.4551 20.0014ZM7.01508 2.20142C4.36508 2.20142 2.20508 4.37142 2.20508 7.04142C2.20508 13.8714 8.77508 17.6714 11.0851 18.4614C11.2651 18.5214 11.6551 18.5214 11.8351 18.4614C14.1351 17.6714 20.7151 13.8814 20.7151 7.04142C20.7151 4.37142 18.5551 2.20142 15.9051 2.20142C14.3851 2.20142 12.9751 2.91142 12.0651 4.14142C11.7851 4.52142 11.1451 4.52142 10.8651 4.14142C9.93508 2.90142 8.53508 2.20142 7.01508 2.20142Z" fill="#292D32"/>
                                </svg>

                            <h2 class="font-normal text-sm" style="color:#292D32;">383</h2>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0469 11.8339H9.20454C8.80378 11.8339 8.47144 11.5015 8.47144 11.1008C8.47144 10.7 8.80378 10.3677 9.20454 10.3677H16.0469C16.4477 10.3677 16.78 10.7 16.78 11.1008C16.78 11.5015 16.4477 11.8339 16.0469 11.8339Z"
                                    fill="#292D32" />
                                <path
                                    d="M16.5356 22.6546C16.2032 22.6546 15.8709 22.5569 15.5874 22.3712L11.4234 19.5951H7.73829C4.37577 19.5951 2.1178 17.3371 2.1178 13.9746V8.10975C2.1178 4.74723 4.37577 2.48926 7.73829 2.48926H17.5131C20.8756 2.48926 23.1336 4.74723 23.1336 8.10975V13.9746C23.1336 17.083 21.1982 19.253 18.2462 19.556V20.944C18.2462 21.5794 17.904 22.1561 17.3469 22.4493C17.0927 22.5862 16.8093 22.6546 16.5356 22.6546ZM7.73829 3.94569C5.2164 3.94569 3.58401 5.57808 3.58401 8.09997V13.9648C3.58401 16.4867 5.2164 18.1191 7.73829 18.1191H11.6482C11.7948 18.1191 11.9317 18.1582 12.0588 18.2462L16.4085 21.1395C16.516 21.208 16.6138 21.1787 16.6627 21.1493C16.7115 21.12 16.7897 21.0613 16.7897 20.9343V18.8522C16.7897 18.4515 17.1221 18.1191 17.5229 18.1191C20.0447 18.1191 21.6771 16.4867 21.6771 13.9648V8.09997C21.6771 5.57808 20.0447 3.94569 17.5229 3.94569H7.73829Z"
                                    fill="#292D32" />
                            </svg>

                            <h2 class="font-normal text-sm" style="color:#292D32;">53</h2>
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                fill="#292D32" />
                            <path
                                d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                fill="#292D32" />
                            <path
                                d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                fill="#292D32" />
                        </svg>
                        <h2 class="font-normal text-sm" style="color:#292D32;">Add to Collection</h2>
                    </div>



                </div>
                <div class="py-2 px-2">
                    <p class="text-white">Mediterranean tuna pasta ..</p>
                    <h3 class="text-sm" style="color: #76777E;">Mon, 15 Aug 2022</h3>
                </div>
            </div> --}}

            {{-- <div class="w-1/4 h-full flex flex-col rounded-md px-2" style="background-color: #141414">
                <div class="py-2 flex space-x-2">
                    <img src="https://assets.bizjournals.com/static/img/potm/marketing/team-success-img.jpg"
                        class="h-12 w-12 rounded-full">
                    <div class="flex flex-col  justify-center text-white">
                        <p class="font-semibold">Nitin Chaudhary</p>
                        <h5 class="text-sm text-gray-400">Executive Chef, D’Italia</h5>
                    </div>
                </div>
                <div class="py-2">
                    <img class="h-auto rounded-md" src="images\explore_Recipe_image.png">
                </div>
                <div class="flex justify-evenly py-2">
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                        <svg width="20" height="20" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                fill="white" />
                            <path
                                d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                fill="white" />
                            <path
                                d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                fill="white" />
                        </svg>
                        <h1 class="text-xs text-white">20 mins</h1>
                    </div>
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">

                        <h1 class="text-xs text-white">8 Ingredients</h1>
                    </div>
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                        <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                    </div>
                </div>
                <div class="flex py-2 justify-between px-2">
                    <div class="flex space-x-4">
                        <div class="flex items-center space-x-2">
                            <svg width="21" height="19" viewBox="0 0 21 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8452 0.867432C13.076 0.867432 11.4925 1.72761 10.5052 3.04721C9.51799 1.72761 7.93448 0.867432 6.16524 0.867432C3.16439 0.867432 0.730469 3.31113 0.730469 6.33153C0.730469 7.49473 0.916189 8.56995 1.23876 9.56698C2.78317 14.4544 7.54349 17.377 9.89921 18.1786C10.2315 18.2959 10.7789 18.2959 11.1113 18.1786C13.467 17.377 18.2273 14.4544 19.7717 9.56698C20.0943 8.56995 20.28 7.49473 20.28 6.33153C20.28 3.31113 17.8461 0.867432 14.8452 0.867432Z"
                                    fill="#ED1A3D" />
                            </svg>
                            <h2 class="font-normal text-sm" style="color:#ED1A3D;">383</h2>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0469 11.8339H9.20454C8.80378 11.8339 8.47144 11.5015 8.47144 11.1008C8.47144 10.7 8.80378 10.3677 9.20454 10.3677H16.0469C16.4477 10.3677 16.78 10.7 16.78 11.1008C16.78 11.5015 16.4477 11.8339 16.0469 11.8339Z"
                                    fill="#292D32" />
                                <path
                                    d="M16.5356 22.6546C16.2032 22.6546 15.8709 22.5569 15.5874 22.3712L11.4234 19.5951H7.73829C4.37577 19.5951 2.1178 17.3371 2.1178 13.9746V8.10975C2.1178 4.74723 4.37577 2.48926 7.73829 2.48926H17.5131C20.8756 2.48926 23.1336 4.74723 23.1336 8.10975V13.9746C23.1336 17.083 21.1982 19.253 18.2462 19.556V20.944C18.2462 21.5794 17.904 22.1561 17.3469 22.4493C17.0927 22.5862 16.8093 22.6546 16.5356 22.6546ZM7.73829 3.94569C5.2164 3.94569 3.58401 5.57808 3.58401 8.09997V13.9648C3.58401 16.4867 5.2164 18.1191 7.73829 18.1191H11.6482C11.7948 18.1191 11.9317 18.1582 12.0588 18.2462L16.4085 21.1395C16.516 21.208 16.6138 21.1787 16.6627 21.1493C16.7115 21.12 16.7897 21.0613 16.7897 20.9343V18.8522C16.7897 18.4515 17.1221 18.1191 17.5229 18.1191C20.0447 18.1191 21.6771 16.4867 21.6771 13.9648V8.09997C21.6771 5.57808 20.0447 3.94569 17.5229 3.94569H7.73829Z"
                                    fill="#292D32" />
                            </svg>

                            <h2 class="font-normal text-sm" style="color:#292D32;">53</h2>
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                fill="#292D32" />
                            <path
                                d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                fill="#292D32" />
                            <path
                                d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                fill="#292D32" />
                        </svg>
                        <h2 class="font-normal text-sm" style="color:#292D32;">Add to Collection</h2>
                    </div>



                </div>
                <div class="py-2 px-2">
                    <p class="text-white">My Autumn special Blueberry banana Toast..</p>
                    <h3 class="text-sm" style="color: #76777E;">Mon, 15 Aug 2022</h3>
                </div>
            </div>

            <div class="w-1/4 h-full flex flex-col rounded-md px-2" style="background-color: #141414">
                <div class="py-2 flex space-x-2">
                    <img src="https://assets.bizjournals.com/static/img/potm/marketing/team-success-img.jpg"
                        class="h-12 w-12 rounded-full">
                    <div class="flex flex-col  justify-center text-white">
                        <p class="font-semibold">Nitin Chaudhary</p>
                        <h5 class="text-sm text-gray-400">Executive Chef, D’Italia</h5>
                    </div>
                </div>
                <div class="py-2">
                    <img class="h-auto rounded-md" src="images\explore_Recipe_image.png">
                </div>
                <div class="flex justify-evenly py-2">
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                        <svg width="20" height="20" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.45833 11.5876C3.89733 11.5876 1.81531 9.50552 1.81531 6.94453C1.81531 4.38354 3.89733 2.30151 6.45833 2.30151C9.01932 2.30151 11.1013 4.38354 11.1013 6.94453C11.1013 9.50552 9.01932 11.5876 6.45833 11.5876ZM6.45833 3.03462C4.30299 3.03462 2.54842 4.78919 2.54842 6.94453C2.54842 9.09987 4.30299 10.8544 6.45833 10.8544C8.61366 10.8544 10.3682 9.09987 10.3682 6.94453C10.3682 4.78919 8.61366 3.03462 6.45833 3.03462Z"
                                fill="white" />
                            <path
                                d="M6.45835 7.18901C6.25797 7.18901 6.0918 7.02284 6.0918 6.82245V4.37876C6.0918 4.17838 6.25797 4.01221 6.45835 4.01221C6.65873 4.01221 6.8249 4.17838 6.8249 4.37876V6.82245C6.8249 7.02284 6.65873 7.18901 6.45835 7.18901Z"
                                fill="white" />
                            <path
                                d="M7.9246 1.8127H4.99216C4.79178 1.8127 4.62561 1.64653 4.62561 1.44614C4.62561 1.24576 4.79178 1.07959 4.99216 1.07959H7.9246C8.12498 1.07959 8.29115 1.24576 8.29115 1.44614C8.29115 1.64653 8.12498 1.8127 7.9246 1.8127Z"
                                fill="white" />
                        </svg>
                        <h1 class="text-xs text-white">20 mins</h1>
                    </div>
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">

                        <h1 class="text-xs text-white">8 Ingredients</h1>
                    </div>
                    <div class="bg-gray-600 py-1 rounded-md flex items-center justify-center px-1 space-x-2">
                        <h1 class=" text-xs text-white">For Sweet tastebuds</h1>
                    </div>
                </div>
                <div class="flex py-2 justify-between px-2">
                    <div class="flex space-x-4">
                        <div class="flex items-center space-x-2">
                            <svg width="21" height="19" viewBox="0 0 21 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8452 0.867432C13.076 0.867432 11.4925 1.72761 10.5052 3.04721C9.51799 1.72761 7.93448 0.867432 6.16524 0.867432C3.16439 0.867432 0.730469 3.31113 0.730469 6.33153C0.730469 7.49473 0.916189 8.56995 1.23876 9.56698C2.78317 14.4544 7.54349 17.377 9.89921 18.1786C10.2315 18.2959 10.7789 18.2959 11.1113 18.1786C13.467 17.377 18.2273 14.4544 19.7717 9.56698C20.0943 8.56995 20.28 7.49473 20.28 6.33153C20.28 3.31113 17.8461 0.867432 14.8452 0.867432Z"
                                    fill="#ED1A3D" />
                            </svg>
                            <h2 class="font-normal text-sm" style="color:#ED1A3D;">383</h2>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0469 11.8339H9.20454C8.80378 11.8339 8.47144 11.5015 8.47144 11.1008C8.47144 10.7 8.80378 10.3677 9.20454 10.3677H16.0469C16.4477 10.3677 16.78 10.7 16.78 11.1008C16.78 11.5015 16.4477 11.8339 16.0469 11.8339Z"
                                    fill="#292D32" />
                                <path
                                    d="M16.5356 22.6546C16.2032 22.6546 15.8709 22.5569 15.5874 22.3712L11.4234 19.5951H7.73829C4.37577 19.5951 2.1178 17.3371 2.1178 13.9746V8.10975C2.1178 4.74723 4.37577 2.48926 7.73829 2.48926H17.5131C20.8756 2.48926 23.1336 4.74723 23.1336 8.10975V13.9746C23.1336 17.083 21.1982 19.253 18.2462 19.556V20.944C18.2462 21.5794 17.904 22.1561 17.3469 22.4493C17.0927 22.5862 16.8093 22.6546 16.5356 22.6546ZM7.73829 3.94569C5.2164 3.94569 3.58401 5.57808 3.58401 8.09997V13.9648C3.58401 16.4867 5.2164 18.1191 7.73829 18.1191H11.6482C11.7948 18.1191 11.9317 18.1582 12.0588 18.2462L16.4085 21.1395C16.516 21.208 16.6138 21.1787 16.6627 21.1493C16.7115 21.12 16.7897 21.0613 16.7897 20.9343V18.8522C16.7897 18.4515 17.1221 18.1191 17.5229 18.1191C20.0447 18.1191 21.6771 16.4867 21.6771 13.9648V8.09997C21.6771 5.57808 20.0447 3.94569 17.5229 3.94569H7.73829Z"
                                    fill="#292D32" />
                            </svg>

                            <h2 class="font-normal text-sm" style="color:#292D32;">53</h2>
                        </div>
                    </div>

                    <div class="flex items-center space-x-1">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.0139 13.3H8.19411C7.79334 13.3 7.461 12.9676 7.461 12.5668C7.461 12.1661 7.79334 11.8337 8.19411 11.8337H16.0139C16.4147 11.8337 16.747 12.1661 16.747 12.5668C16.747 12.9676 16.4147 13.3 16.0139 13.3Z"
                                fill="#292D32" />
                            <path
                                d="M12.104 17.2099C11.7033 17.2099 11.3709 16.8775 11.3709 16.4768V8.65694C11.3709 8.25617 11.7033 7.92383 12.104 7.92383C12.5048 7.92383 12.8371 8.25617 12.8371 8.65694V16.4768C12.8371 16.8775 12.5048 17.2099 12.104 17.2099Z"
                                fill="#292D32" />
                            <path
                                d="M15.0364 23.0748H9.17158C3.86388 23.0748 1.59613 20.8071 1.59613 15.4994V9.63453C1.59613 4.32683 3.86388 2.05908 9.17158 2.05908H15.0364C20.3441 2.05908 22.6119 4.32683 22.6119 9.63453V15.4994C22.6119 20.8071 20.3441 23.0748 15.0364 23.0748ZM9.17158 3.5253C4.66541 3.5253 3.06235 5.12836 3.06235 9.63453V15.4994C3.06235 20.0056 4.66541 21.6086 9.17158 21.6086H15.0364C19.5426 21.6086 21.1457 20.0056 21.1457 15.4994V9.63453C21.1457 5.12836 19.5426 3.5253 15.0364 3.5253H9.17158Z"
                                fill="#292D32" />
                        </svg>
                        <h2 class="font-normal text-sm" style="color:#292D32;">Add to Collection</h2>
                    </div>



                </div>
                <div class="py-2 px-2">
                    <p class="text-white">My Autumn special Blueberry banana Toast..</p>
                    <h3 class="text-sm" style="color: #76777E;">Mon, 15 Aug 2022</h3>
                </div>
            </div> --}}
        </div>

    </section>

</body>
