@extends('layouts.tailwind.guest')
@section('content')
    <header class="flex justify-evenly py-7 items-center" style="background-color: rgba(20, 20, 20, 1)">

        @include('components.headerLogo')

        @include('searchBar')

        <a href="/HomePage" class="flex space-x-2 items-center justify-center">
            <div class="flex flex-col items-center">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.7">
                        <path
                            d="M14.0799 18.048H5.11987C3.66387 18.048 2.33588 16.928 2.09588 15.488L1.03187 9.12006C0.863874 8.12806 1.34388 6.85606 2.13588 6.22406L7.67988 1.78402C8.75188 0.920025 10.4399 0.928032 11.5199 1.79203L17.0639 6.22406C17.8479 6.85606 18.3279 8.12806 18.1679 9.12006L17.1039 15.488C16.8639 16.904 15.5119 18.048 14.0799 18.048ZM9.59188 2.35204C9.16788 2.35204 8.74387 2.48002 8.43187 2.72802L2.88788 7.16806C2.43188 7.53606 2.11988 8.35202 2.21588 8.92802L3.27988 15.296C3.42388 16.136 4.26387 16.848 5.11987 16.848H14.0799C14.9359 16.848 15.7759 16.136 15.9199 15.288L16.9839 8.92006C17.0799 8.34406 16.7599 7.52005 16.3119 7.16005L10.7679 2.72802C10.4479 2.48002 10.0239 2.35204 9.59188 2.35204Z"
                            fill="white" />
                        <path
                            d="M9.6 13C8.168 13 7 11.832 7 10.4C7 8.96805 8.168 7.80005 9.6 7.80005C11.032 7.80005 12.2 8.96805 12.2 10.4C12.2 11.832 11.032 13 9.6 13ZM9.6 9.00005C8.832 9.00005 8.2 9.63205 8.2 10.4C8.2 11.168 8.832 11.8 9.6 11.8C10.368 11.8 11 11.168 11 10.4C11 9.63205 10.368 9.00005 9.6 9.00005Z"
                            fill="white" />
                    </g>
                </svg>

            </div>
            <h1 class="text-white text-montserrat">Home</h1>
        </a>

        <a href="/exploreRecipe" class="flex space-x-2 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.24799 14.3999C9.23999 14.3999 9.23999 14.3999 9.23199 14.3999C8.39998 14.3919 7.69599 13.8719 7.44799 13.0799L5.88799 8.05588C5.67999 7.37588 5.85599 6.64788 6.35999 6.15188C6.85599 5.65588 7.57599 5.47986 8.24799 5.68786L13.28 7.24787C14.08 7.49587 14.6 8.19988 14.608 9.03188C14.616 9.86388 14.112 10.5679 13.32 10.8319L11.944 11.2959C11.736 11.3679 11.584 11.5199 11.512 11.7199L11.04 13.1039C10.776 13.8959 10.072 14.3999 9.24799 14.3999ZM7.67199 6.79988C7.43199 6.79988 7.27199 6.92788 7.19999 6.99988C7.01599 7.18388 6.95199 7.44787 7.03199 7.69587L8.59199 12.7199C8.72799 13.1599 9.11999 13.1999 9.23999 13.1999C9.33599 13.1919 9.74399 13.1679 9.88799 12.7279L10.36 11.3439C10.544 10.7919 10.992 10.3439 11.544 10.1599L12.92 9.69587C12.92 9.69587 12.92 9.69587 12.928 9.69587C13.368 9.55187 13.4 9.15987 13.4 9.04787C13.4 8.92787 13.36 8.53588 12.92 8.39988L7.88799 6.83987C7.80799 6.80787 7.73599 6.79988 7.67199 6.79988Z"
                    fill="#FAFAFA" />
                <path
                    d="M9.8 18.2C5.056 18.2 1.2 14.344 1.2 9.6C1.2 4.856 5.056 1 9.8 1C14.544 1 18.4 4.856 18.4 9.6C18.4 14.344 14.544 18.2 9.8 18.2ZM9.8 2.2C5.72 2.2 2.4 5.52 2.4 9.6C2.4 13.68 5.72 17 9.8 17C13.88 17 17.2 13.68 17.2 9.6C17.2 5.52 13.88 2.2 9.8 2.2Z"
                    fill="#FAFAFA" />
            </svg>
            <h1 class="text-white text-montserrat">Explore</h1>
        </a>


        <a href="" class="flex space-x-2 items-center">

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.7">
                    <path
                        d="M9.89601 10.824C9.88001 10.824 9.85601 10.824 9.84001 10.824C9.81601 10.824 9.78401 10.824 9.76001 10.824C7.94401 10.768 6.58401 9.35203 6.58401 7.60803C6.58401 5.83203 8.03201 4.38403 9.80801 4.38403C11.584 4.38403 13.032 5.83203 13.032 7.60803C13.024 9.36003 11.656 10.768 9.92001 10.824C9.90401 10.824 9.90401 10.824 9.89601 10.824ZM9.80001 5.57603C8.68001 5.57603 7.77601 6.48803 7.77601 7.60003C7.77601 8.69603 8.63201 9.58403 9.72001 9.62403C9.74401 9.61603 9.82401 9.61603 9.90401 9.62403C10.976 9.56803 11.816 8.68803 11.824 7.60003C11.824 6.48803 10.92 5.57603 9.80001 5.57603Z"
                        fill="#FAFAFA" />
                    <path
                        d="M9.8 18.1999C7.648 18.1999 5.592 17.3999 4 15.9439C3.856 15.8159 3.792 15.6239 3.808 15.4399C3.912 14.4879 4.504 13.5999 5.488 12.9439C7.872 11.3599 11.736 11.3599 14.112 12.9439C15.096 13.6079 15.688 14.4879 15.792 15.4399C15.816 15.6319 15.744 15.8159 15.6 15.9439C14.008 17.3999 11.952 18.1999 9.8 18.1999ZM5.064 15.2799C6.392 16.3919 8.064 16.9999 9.8 16.9999C11.536 16.9999 13.208 16.3919 14.536 15.2799C14.392 14.7919 14.008 14.3199 13.44 13.9359C11.472 12.6239 8.136 12.6239 6.152 13.9359C5.584 14.3199 5.208 14.7919 5.064 15.2799Z"
                        fill="#FAFAFA" />
                    <path
                        d="M9.80001 18.2C5.05601 18.2 1.20001 14.344 1.20001 9.6C1.20001 4.856 5.05601 1 9.80001 1C14.544 1 18.4 4.856 18.4 9.6C18.4 14.344 14.544 18.2 9.80001 18.2ZM9.80001 2.2C5.72001 2.2 2.40001 5.52 2.40001 9.6C2.40001 13.68 5.72001 17 9.80001 17C13.88 17 17.2 13.68 17.2 9.6C17.2 5.52 13.88 2.2 9.80001 2.2Z"
                        fill="#FAFAFA" />
                </g>
            </svg>



            <h1 class="text-white text-montserrat">Profile</h1>
        </a>

        <div class="flex space-x-2 items-center">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.7">
                    <path
                        d="M9.41488 15.2752C7.68125 15.2752 5.94762 14.9999 4.30327 14.4493C3.67827 14.2335 3.20208 13.7946 2.99375 13.2216C2.77797 12.6487 2.85238 12.0163 3.19464 11.4508L4.05029 10.0297C4.22887 9.73206 4.39256 9.13682 4.39256 8.78712V6.63682C4.39256 3.86897 6.64702 1.6145 9.41488 1.6145C12.1827 1.6145 14.4372 3.86897 14.4372 6.63682V8.78712C14.4372 9.12938 14.6009 9.73206 14.7795 10.0371L15.6277 11.4508C15.9476 11.9865 16.0071 12.6338 15.7914 13.2216C15.5756 13.8094 15.1068 14.2559 14.519 14.4493C12.8821 14.9999 11.1485 15.2752 9.41488 15.2752ZM9.41488 2.73057C7.26458 2.73057 5.50863 4.47909 5.50863 6.63682V8.78712C5.50863 9.33028 5.28541 10.1338 5.01012 10.6026L4.15446 12.0237C3.99077 12.299 3.94613 12.5892 4.04285 12.8347C4.13214 13.0877 4.35535 13.2812 4.66041 13.3853C7.77053 14.427 11.0667 14.427 14.1768 13.3853C14.4446 13.296 14.653 13.0952 14.7497 12.8273C14.8464 12.5594 14.8241 12.2693 14.6753 12.0237L13.8196 10.6026C13.5369 10.119 13.3211 9.32284 13.3211 8.77968V6.63682C13.3211 4.47909 11.5726 2.73057 9.41488 2.73057Z"
                        fill="white" />
                    <path
                        d="M10.7988 2.9315C10.7467 2.9315 10.6947 2.92406 10.6426 2.90918C10.4268 2.84966 10.2185 2.80501 10.0176 2.77525C9.38513 2.69341 8.77501 2.73805 8.2021 2.90918C7.99376 2.97614 7.77055 2.90918 7.62918 2.75293C7.48781 2.59668 7.44317 2.37347 7.52501 2.17257C7.83007 1.39132 8.57412 0.87793 9.42233 0.87793C10.2705 0.87793 11.0146 1.38388 11.3197 2.17257C11.3941 2.37347 11.3569 2.59668 11.2155 2.75293C11.1039 2.87198 10.9476 2.9315 10.7988 2.9315Z"
                        fill="white" />
                    <path
                        d="M9.41487 16.9718C8.67827 16.9718 7.96398 16.6742 7.44315 16.1534C6.92231 15.6325 6.62469 14.9182 6.62469 14.1816H7.74077C7.74077 14.6206 7.91934 15.0522 8.23184 15.3647C8.54434 15.6772 8.97589 15.8557 9.41487 15.8557C10.3375 15.8557 11.089 15.1043 11.089 14.1816H12.2051C12.2051 15.7218 10.9551 16.9718 9.41487 16.9718Z"
                        fill="white" />
                </g>
            </svg>


            <a href="/notifications" class="text-white text-montserrat">Notifications</a>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm">{{ count(auth()->user()->unreadnotifications) }}</h6>
            </div>
        </div>
    </header>
    <main class="mx-10 py-2">
        <a href="{{ url()->previous() }}" class="py-4 flex items-center space-x-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.57 18.8201C9.76 18.8201 9.95 18.7501 10.1 18.6001C10.39 18.3101 10.39 17.8301 10.1 17.5401L4.56 12.0001L10.1 6.46012C10.39 6.17012 10.39 5.69012 10.1 5.40012C9.81 5.11012 9.33 5.11012 9.04 5.40012L2.97 11.4701C2.68 11.7601 2.68 12.2401 2.97 12.5301L9.04 18.6001C9.19 18.7501 9.38 18.8201 9.57 18.8201Z"
                    fill="white" />
                <path
                    d="M3.67 12.75H20.5C20.91 12.75 21.25 12.41 21.25 12C21.25 11.59 20.91 11.25 20.5 11.25H3.67C3.26 11.25 2.92 11.59 2.92 12C2.92 12.41 3.26 12.75 3.67 12.75Z"
                    fill="white" />
            </svg>

            <h1 class="text-white font-semibold">Go back</h1>

        </a>

        <section class="flex items-start py-3 ml-8 space-x-10 text-montserrat">
            <div class="w-1/4 rounded-xl bg-gray252525">
                <div class="relative w-full ">
                    <div>
                        <img src="{{ $recipe->getFirstMediaUrl('cover') }}"
                            class="w-full h-72 flex object-fill rounded-md">
                        <div class="absolute w-full py-2.5 bottom-0 inset-x-0  px-2 rounded-md"
                            style="background: linear-gradient(180.2deg, rgba(45, 45, 45, 0) 25.71%, #141414 99.83%);">
                            <div class="flex justify-between space-x-2">
                                <div class="flex w-full justify-evenly items-end space-x-1 text-white">
                                    <div
                                        class="py-1 rounded-md flex flex-col items-center justify-center px-1 bg-gray_rgba_255_255_255_02 backdrop-blur-lg backdrop-opacity-100">
                                        <h1 class="tracking-widest font-normal text-[10px]">PREP TIME</h1>
                                        <div class="py-1 flex items-center justify-center px-1 space-x-1">
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
                                            <h1 class="text-[12px] font-semibold">
                                                {{ $recipe->cooking_time }}
                                                mins</h1>
                                        </div>
                                    </div>
                                    <div
                                        class="py-1 rounded-md flex flex-col items-center justify-center px-1 bg-gray_rgba_255_255_255_02 backdrop-blur-lg backdrop-opacity-100">
                                        <h1 class="tracking-widest font-normal text-[10px]">COOKING TIME</h1>
                                        <div class="py-1 flex items-center justify-center px-1 space-x-1">
                                            <h1 class="text-[12px] font-semibold">
                                                {{ count($recipe_ingredients) }}
                                                Ingredients</h1>
                                        </div>
                                    </div>
                                    <div
                                        class="py-2 rounded-md flex items-center justify-center px-1 bg-gray_rgba_255_255_255_02 backdrop-blur-lg backdrop-opacity-100">
                                        <h1 class="text-[12px] font-semibold">
                                            {{ $recipe->category->category }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 w-full pl-4">
                    <div class="flex justify-start items-center space-x-2 text-sm">
                        <div class="bg-lime-500 rounded-sm py-0.5 px-2 flex items-center text-white">
                            {{ $recipe->cuisine->cuisine }}
                        </div>
                        <div
                            class="bg-gray_rgba_255_255_255_02 backdrop-blur-lg backdrop-opacity-100 rounded-sm py-0.5 px-2 flex items-center text-white">
                            @if ($recipe->bud_sweet == 'High')
                                For Sweet tastebuds
                            @elseif($recipe->bud_sour == 'High')
                                For Sour tastebuds
                            @elseif($recipe->bud_salt == 'High')
                                For salty tastebuds
                            @elseif($recipe->bud_spicy == 'High')
                                For Spicy tastebuds
                            @elseif($recipe->bud_astringent == 'High')
                                For astringent tastebuds
                            @else($recipes->bud_bitter =="High")
                                For bitter tastebuds
                            @endif
                        </div>
                    </div>
                    <div class="py-3 w-full text-4xl text-white font-normal tracking-wider">
                        {{ $recipe->recipe_name }}
                    </div>

                    <div class="flex space-x-4 items-center">
                        <h1 class="text-white tracking-wider">Difficulty</h1>
                        <div class="flex space-x-2 items-center">
                            <div class="h-1.5 w-10 rounded-full bg-gray3B3939">
                                <div class="h-full bg-white rounded-full"></div>
                            </div>
                            <div class="h-1.5 w-10 rounded-full bg-gray3B3939">
                                <div class="h-full bg-white rounded-full"></div>
                            </div>
                            <div class="h-1.5 w-10 rounded-full bg-gray3B3939">
                                <div class="h-full rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4 py-4 items-center">
                        @if ($recipe->user->hasrole('Chef'))
                            @if (!empty($chefProfileImage->image))
                                <img src="{{ asset('storage/public/' . $chefProfileImage->image) }}"
                                    class="h-12 w-12 rounded-full object-fill">
                            @else
                                <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                                    class="h-12 w-12 rounded-full object-fill">
                            @endif
                        @else
                            @if (!empty($homeChefProfileImage->image))
                                <img src="{{ asset('storage/public/' . $homeChefProfileImage->image) }}"
                                    class="h-12 w-12 rounded-full object-fill">
                            @else
                                <img src="https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png"
                                    class="h-12 w-12 rounded-full object-fill">
                            @endif
                        @endif
                        <div class="w-24 truncate">
                            <h1 class="text-white font-semibold truncate  tracking-wider w-full">{{ $recipe->user->name }}
                            </h1>
                            <h3 class="text-gray-500 text-xs truncate  w-full">
                                @if ($recipe->user->hasrole('Chef'))
                                    {{ $chefProfileImage->designation }}
                                @elseif ($recipe->user->hasrole('Home-Chef'))
                                    {{ $homeChefProfileImage->designation }}
                                @else
                                    <h5 class="text-xs text-gray-400">User</h5>
                                @endif
                            </h3>
                        </div>
                        @if (auth()->user()->id == $recipe->user_id)
                        <div>

                        </div>
                        @else
                        <div class="flex items-center text-sm">
                            <form action="/follow" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user" value="{{ $user->id}}">
                                <div class="button mt-2 d-flex flex-row justify-content-center align-items-center">
                                    @if (Auth::user()->isFollowedBy($user))
                                        <input class="buttonRed w-20 text-center py-1.5 rounded-lg text-white" value="UnFollow" type="submit" name="UnFollow">

                                    @else
                                        <input class="bg-gray-100 w-20 text-center py-1.5 rounded-lg text-black" value="Follow" type="submit" name="Follow">

                                    @endif
                                </div>
                            </form>
                             {{-- <button
                                class="bg-gray-100 w-20 border text-center py-1.5 rounded-lg text-black">Follow</button> --}}
                        </div>                          
                        @endif
                        

                    </div>
                </div>
                <div class="rounded-md bg-gray161616 py-5 flex items-center justify-evenly w-full">
                    <div class="flex flex-col justify-center items-center">
                        @include('like', ['model' => $recipe])
                        <h6 class="text-sm text626262">Toast</h6>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.54916 20.9924C4.1616 20.9924 3.80173 20.9001 3.47877 20.7156C2.76825 20.3004 2.36224 19.4607 2.36224 18.418V5.40719C2.36224 3.06341 4.27233 1.15332 6.61612 1.15332H15.5206C17.8644 1.15332 19.7745 3.06341 19.7745 5.40719V18.4087C19.7745 19.4514 19.3685 20.2911 18.658 20.7064C17.9475 21.1216 17.0155 21.0755 16.102 20.568L11.599 18.0673C11.3314 17.9197 10.8054 17.9197 10.5378 18.0673L6.03478 20.568C5.5365 20.8448 5.02899 20.9924 4.54916 20.9924ZM6.62534 2.53744C5.04744 2.53744 3.75559 3.82929 3.75559 5.40719V18.4087C3.75559 18.9531 3.91246 19.3592 4.18929 19.516C4.46611 19.6729 4.8998 19.6268 5.37041 19.3592L9.87342 16.8585C10.5563 16.4802 11.5897 16.4802 12.2726 16.8585L16.7756 19.3592C17.2462 19.6268 17.6799 19.6821 17.9567 19.516C18.2335 19.3499 18.3904 18.9439 18.3904 18.4087V5.40719C18.3904 3.82929 17.0985 2.53744 15.5206 2.53744H6.62534Z"
                                fill="#626262" />
                            <path
                                d="M10.2333 12.2264C10.058 12.2264 9.88266 12.1618 9.74425 12.0234L8.36012 10.6392C8.09252 10.3717 8.09252 9.92873 8.36012 9.66113C8.62772 9.39354 9.07064 9.39354 9.33824 9.66113L10.2333 10.5562L13.4352 7.35426C13.7028 7.08667 14.1458 7.08667 14.4134 7.35426C14.681 7.62186 14.681 8.06478 14.4134 8.33238L10.7224 12.0234C10.5839 12.1618 10.4086 12.2264 10.2333 12.2264Z"
                                fill="#626262" />
                        </svg>

                        <h6 class="text-sm text626262">Add to Collection</h6>
                    </div>

                    <div class="flex flex-col justify-center items-center">
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.75 1.5C14.5074 1.5 13.5 2.50736 13.5 3.75C13.5 4.14485 13.6017 4.51594 13.7804 4.83851C13.7899 4.85258 13.799 4.86708 13.8077 4.88199C13.8164 4.89677 13.8244 4.91173 13.8319 4.92684C14.2278 5.57067 14.9388 6 15.75 6C16.9926 6 18 4.99264 18 3.75C18 2.50736 16.9926 1.5 15.75 1.5ZM12.9537 6.24873C13.6404 7.01665 14.6388 7.5 15.75 7.5C17.8211 7.5 19.5 5.82107 19.5 3.75C19.5 1.67893 17.8211 0 15.75 0C13.6789 0 12 1.67893 12 3.75C12 4.17095 12.0694 4.5757 12.1973 4.95345L6.54625 8.25125C5.85957 7.48334 4.86123 7 3.75 7C1.67893 7 0 8.67893 0 10.75C0 12.8211 1.67893 14.5 3.75 14.5C4.86138 14.5 5.85984 14.0165 6.54654 13.2484L12.1988 16.5421C12.0699 16.9211 12 17.3274 12 17.75C12 19.8211 13.6789 21.5 15.75 21.5C17.8211 21.5 19.5 19.8211 19.5 17.75C19.5 15.6789 17.8211 14 15.75 14C14.6404 14 13.6434 14.4819 12.9569 15.2478L7.30286 11.9531C7.43069 11.5754 7.5 11.1708 7.5 10.75C7.5 10.329 7.43064 9.92429 7.30272 9.54654L12.9537 6.24873ZM5.66766 9.5725C5.67527 9.58784 5.68344 9.60302 5.6922 9.61803C5.70103 9.63315 5.7103 9.64786 5.72 9.66213C5.89843 9.98455 6 10.3554 6 10.75C6 11.1446 5.89841 11.5155 5.71996 11.8379C5.71019 11.8523 5.70085 11.8672 5.69196 11.8824C5.68331 11.8972 5.67523 11.9123 5.66771 11.9274C5.27177 12.5709 4.56099 13 3.75 13C2.50736 13 1.5 11.9926 1.5 10.75C1.5 9.50736 2.50736 8.5 3.75 8.5C4.56096 8.5 5.27171 8.92903 5.66766 9.5725ZM13.5 17.75C13.5 17.3752 13.5916 17.0219 13.7537 16.7111C13.7771 16.682 13.7986 16.6508 13.818 16.6176C13.8367 16.5856 13.8527 16.5527 13.8662 16.5192C14.268 15.9055 14.9616 15.5 15.75 15.5C16.9926 15.5 18 16.5074 18 17.75C18 18.9926 16.9926 20 15.75 20C14.5074 20 13.5 18.9926 13.5 17.75Z"
                                fill="#626262" />
                        </svg>
                        <h6 class="text-sm text626262">Share</h6>
                    </div>


                </div>

            </div>
            <div class="w-1/2">
                <div class="bg-gray161616 py-4 flex items-center justify-between px-2 rounded-xl">
                    <div class="flex items-center font-thin space-x-2">
                        <div class="h-8 w-8 rounded-full flex items-center justify-center roundedGradient">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.5 9.7395C8.20958 9.7395 7.96875 9.49867 7.96875 9.20825V5.4895C7.96875 5.19909 8.20958 4.95825 8.5 4.95825C8.79042 4.95825 9.03125 5.19909 9.03125 5.4895V9.20825C9.03125 9.49867 8.79042 9.7395 8.5 9.7395Z"
                                    fill="#FFB1B8" />
                                <path
                                    d="M8.49999 12.2186C8.30874 12.2186 8.13164 12.1478 7.99706 12.0132C7.93331 11.9424 7.88375 11.8645 7.84125 11.7795C7.80583 11.6945 7.79166 11.6024 7.79166 11.5103C7.79166 11.3261 7.86956 11.1419 7.99706 11.0074C8.25914 10.7453 8.74084 10.7453 9.00292 11.0074C9.13042 11.1419 9.20832 11.3261 9.20832 11.5103C9.20832 11.6024 9.18706 11.6945 9.15164 11.7795C9.11623 11.8645 9.06667 11.9424 9.00292 12.0132C8.86834 12.1478 8.69124 12.2186 8.49999 12.2186Z"
                                    fill="#FFB1B8" />
                                <path
                                    d="M8.50014 16.1145C8.02556 16.1145 7.54388 15.9941 7.11888 15.7462L2.91138 13.3166C2.06138 12.8208 1.53012 11.907 1.53012 10.9224V6.07746C1.53012 5.09288 2.06138 4.17912 2.91138 3.68329L7.11888 1.25371C7.96888 0.757878 9.02432 0.757878 9.8814 1.25371L14.0889 3.68329C14.9389 4.17912 15.4702 5.09288 15.4702 6.07746V10.9224C15.4702 11.907 14.9389 12.8208 14.0889 13.3166L9.8814 15.7462C9.4564 15.9941 8.97472 16.1145 8.50014 16.1145ZM8.50014 1.94786C8.20972 1.94786 7.91221 2.02579 7.65013 2.17454L3.44263 4.60411C2.91846 4.9087 2.59262 5.46829 2.59262 6.07746V10.9224C2.59262 11.5245 2.91846 12.0912 3.44263 12.3958L7.65013 14.8254C8.1743 15.1299 8.82598 15.1299 9.34306 14.8254L13.5506 12.3958C14.0747 12.0912 14.4006 11.5316 14.4006 10.9224V6.07746C14.4006 5.47538 14.0747 4.9087 13.5506 4.60411L9.34306 2.17454C9.08806 2.02579 8.79056 1.94786 8.50014 1.94786Z"
                                    fill="#FFB1B8" />
                            </svg>
                        </div>
                        <h4 class="text-white text-sm">Allergy Information</h4>
                    </div>
                    <div class="flex items-center justify-evenly space-x-2">
                        <div class="bg-gray303030 rounded-md py-1 px-2 flex items-center text-white text-sm">
                            PEANUTS
                        </div>
                        <div class="bg-gray303030 rounded-md py-1 px-2 flex items-center text-white text-sm">
                            WHEAT
                        </div>
                        <div class="bg-gray303030 rounded-md py-1 px-2 flex items-center text-white text-sm">
                            SOYBEANS
                        </div>
                    </div>
                </div>
                <section class="py-4">
                    <div class="flex justify-between items-center">
                        <h1 class="text-white text-2xl font-semibold">Steps to Cook</h1>
                        <button class="text-white bg-red-600 py-2 px-2 text-center w-28 text-xs rounded-md">I have made it
                        </button>
                    </div>
                    <div class="max-w-lg mx-auto mt-8 h-80 overflow-y-scroll no-scrollbar">
                        {{-- @foreach ($recipe_steps as $steps)
                            <div class="relative mb-1">
                                <input type="checkbox" id="{{ $loop->index + 1 }}" class="toggle hidden" />
                                <label class="title block font-bold bg-white p-4 cursor-pointer bg-gray161616"
                                    for="{{ $loop->index + 1 }}">
                                    {{ $loop->index + 1 }} . Step {{ $loop->index + 1 }}
                                </label>
                                <div class="content textB7B7B7 overflow-hidden">
                                    <p class="p-4">{{ $steps }}</p>
                                </div>
                            </div>
                        @endforeach --}}
                        @foreach ($recipe_steps as $steps)
                            <div class="accordion flex flex-col items-center justify-center mb-2">
                                <!--  Panel 1  -->
                                <div class="w-full">
                                    <input type="checkbox" name="panel" id="{{ $loop->index + 1 }}" class="hidden">
                                    <label for="{{ $loop->index + 1 }}"
                                        class="relative block bg-black text-white p-4 shadow bg-gray161616">{{ $loop->index + 1 }}
                                        . Step {{ $loop->index + 1 }}</label>
                                    <div class="accordion__content textB7B7B7 overflow-hidden">
                                        <p class="accordion__body p-4" id="{{ $loop->index + 1 }}">{{ $steps }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach






                    </div>
                    <div class="max-w-lg mx-auto bg-gray161616 px-4 py-2 rounded h-32 overflow-y-scroll no-scrollbar">
                        {{-- <div class="accordion flex flex-col items-center justify-center mb-2">
                            <div class="w-full">
                                <input type="checkbox" name="panel" id="desc" class="hidden">
                                <label for="desc"
                                    class="relative block bg-black text-white p-4 shadow bg-gray161616">Description</label>
                                <div
                                    class="accordion__content textB7B7B7 overflow-hidden h-32 overflow-y-scroll no-scrollbar">
                                    <p class="accordion__body p-4" id="desc">{{ $recipe->description }}</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="flex justify-between items-center">
                            <h1 class="text-white">Description</h1>
                            <svg width="17" height="10" viewBox="0 0 17 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.86622 9.28037C8.15912 9.57327 8.63392 9.57327 8.92682 9.28037L16.5733 1.63387C16.8662 1.34097 16.8662 0.866175 16.5733 0.573275L16.2197 0.219675C15.9269 -0.073225 15.452 -0.073225 15.1591 0.219675L8.39652 6.98228L1.63392 0.219675C1.34102 -0.073225 0.86622 -0.073225 0.57332 0.219675L0.219721 0.573275C-0.0731792 0.866175 -0.0731792 1.34097 0.219721 1.63387L7.86622 9.28037Z"
                                    fill="#F9FBFC" />
                            </svg>
                        </div>
                        <div class="w-full text-white text-xs opacity-50 py-2">
                            {{ $recipe->description }}
                        </div>
                    </div>

                </section>
            </div>
            <div class="w-1/4">
                <div class="bg-gray252525 py-5 px-5 rounded-lg h-96 overflow-y-scroll no-scrollbar">
                    <h1 class="text-manrope text-lg text-white font-semibold">Ingredients</h1>
                    <div class="py-2 flex items-center justify-between text-montserrat text-white">
                        <h4 class="text-base">Adjust Serving</h4>
                        <div class="bg-gray39393A flex items-center justify-center px-2 py-2 w-10 rounded-md">
                            {{ $recipe->serves_people }}</div>
                    </div>
                    <div class="py-4 text-white text-montserrat">
                        @foreach ($recipe_ingredients as $ingredient)
                            <div class="flex justify-between items-center py-2 border-b bordergray353535">
                                <h1 class="text-base">{{ $ingredient->ingredient->ingredient }} </h1>
                                <div class="flex justify-start space-x-4">
                                    <h1 class="text-base">{{ $ingredient->quantity }}</h1>
                                    <h1>{{ $ingredient->measurement->measurement }}</h1>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="bg-gray252525 py-3 px-5 rounded-lg mt-5 text-montserrat text-white">
                    <h1 class="text-base">Recipe Taste Profile</h1>
                    <h4 class="text-[10px]">As rated by the Recipeat community</h4>
                    <div class="w-full py-2 flex">
                        <div class="w-1/2  flex items-center justify-center">
                            <svg width="107" height="107" viewBox="0 0 107 107" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100.859 53.8197C100.859 80.7223 79.0504 102.531 52.1478 102.531C25.2452 102.531 3.43632 80.7223 3.43632 53.8197C3.43632 26.917 25.2452 5.10815 52.1478 5.10815C79.0504 5.10815 100.859 26.917 100.859 53.8197ZM18.0498 53.8197C18.0498 72.6515 33.316 87.9177 52.1478 87.9177C70.9797 87.9177 86.2459 72.6515 86.2459 53.8197C86.2459 34.9878 70.9797 19.7216 52.1478 19.7216C33.316 19.7216 18.0498 34.9878 18.0498 53.8197Z"
                                    fill="#EFF3FE" />
                                <path
                                    d="M21.0637 12.0428C28.2796 6.411 36.8388 2.75728 45.8974 1.442C54.9559 0.126717 64.2008 1.1953 72.7204 4.54237C81.24 7.88944 88.74 13.3994 94.4809 20.5288C100.222 27.6583 104.005 36.161 105.458 45.1985C106.911 54.236 105.983 63.4961 102.766 72.0655C99.5483 80.635 94.153 88.2179 87.1116 94.0665C80.0702 99.915 71.626 103.827 62.6116 105.417C53.5973 107.007 44.3241 106.22 35.7068 103.133L44.5855 78.345C48.8942 79.8883 53.5308 80.2819 58.038 79.4869C62.5451 78.6919 66.7673 76.7358 70.2879 73.8115C73.8086 70.8873 76.5063 67.0958 78.1149 62.8111C79.7235 58.5263 80.1875 53.8963 79.4611 49.3775C78.7347 44.8588 76.843 40.6074 73.9726 37.0427C71.1022 33.478 67.3521 30.723 63.0923 29.0495C58.8325 27.3759 54.2101 26.8417 49.6808 27.4993C45.1516 28.1569 40.872 29.9838 37.264 32.7997L21.0637 12.0428Z"
                                    fill="url(#paint0_linear_638_1357)" />
                                <path
                                    d="M36.1039 103.274C27.1175 100.136 19.1497 94.6211 13.0477 87.3159C6.94576 80.0106 2.93787 71.1881 1.4503 61.7866C-0.0372649 52.3851 1.05111 42.7563 4.59968 33.924C8.14825 25.0918 14.0243 17.3865 21.6029 11.6276L37.5336 32.5921C33.7443 35.4715 30.8063 39.3242 29.032 43.7403C27.2577 48.1564 26.7135 52.9709 27.4573 57.6716C28.2011 62.3723 30.205 66.7836 33.256 70.4362C36.307 74.0889 40.2909 76.8463 44.7841 78.4152L36.1039 103.274Z"
                                    fill="url(#paint1_linear_638_1357)" />
                                <path
                                    d="M16.2273 16.3196C23.6587 8.88818 33.1437 3.85031 43.462 1.85414C53.7803 -0.142027 64.4598 0.994819 74.1267 5.11842L63.7955 29.3375C58.9621 27.2757 53.6223 26.7073 48.4632 27.7054C43.304 28.7035 38.5615 31.2224 34.8458 34.9381L16.2273 16.3196Z"
                                    fill="url(#paint2_linear_638_1357)" />
                                <defs>
                                    <linearGradient id="paint0_linear_638_1357" x1="-37.9027" y1="-65.1942"
                                        x2="106.125" y2="106.218" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFB7B7" />
                                        <stop offset="1" stop-color="#FF154C" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_638_1357" x1="0.803223" y1="-104.427"
                                        x2="211.448" y2="106.218" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFE985" />
                                        <stop offset="1" stop-color="#FA742B" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_638_1357" x1="-104.519" y1="0.895508"
                                        x2="50.7362" y2="204.127" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#CE9FFC" />
                                        <stop offset="1" stop-color="#7367F0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="w-1/2 flex flex-col justify-center py-2">
                            <div class="flex justify-start space-x-2 items-center px-2">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.0229492" width="14.0732" height="14.0732" rx="2.72385"
                                        fill="#F75583" />
                                </svg>
                                <h1 class="text-sm">60 %</h1>
                                <h1 class="text-sm">Sweet</h1>
                            </div>

                            <div class="flex justify-start space-x-2 items-center px-2">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.174805" width="14.0732" height="14.0732" rx="2.72385"
                                        fill="#FCB45C" />
                                </svg>

                                <h1 class="text-sm">25 %</h1>
                                <h1 class="text-sm">Spicy</h1>
                            </div>

                            <div class="flex justify-start space-x-2 items-center px-2">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.321289" width="14.0732" height="14.0732" rx="2.72385"
                                        fill="#AC8AF7" />
                                </svg>
                                <h1 class="text-sm">15 %</h1>
                                <h1 class="text-sm">Sour</h1>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>
    </main>
@endsection
