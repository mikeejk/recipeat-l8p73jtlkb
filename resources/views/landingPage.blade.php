@extends('layouts.tailwind.app')
@section('content')
    <div class="w-full bg-no-repeat md:h-auto h-72 md:bg-cover bg-contain object-cover md:pb-10"
        style="background-image: url('images/LandingPageBanner.png')">
        <section class="md:w-10/12 md:mx-auto flex md:flex-row flex-col md:pb-0 pb-10 justify-center">
            <div class="md:py-20 py-4 md:w-8/12 flex flex-col justify-center md:text-left text-center md:ml-10">
                <h1 class="md:text-5xl text-xl font-bold text-white tracking-wider text-manrope">Forging a deeper</h1>
                <h1 class="md:text-5xl text-xl font-bold text-white tracking-wider text-manrope mt-2">connection
                    between</h1>
                <h1 class="md:text-5xl text-xl font-bold text-white tracking-wider text-manrope mt-2">chefs and you</h1>

                <h2
                    class="md:text-lg text-sm text-white md:mr-10 md:py-8 py-5 md:px-0 px-4 md:text-left text-center md:font-semibold">
                    Recipeat is a community-based platform that brings together <br>chefs of all levels, recipes, and lovers of
                    food
                </h2>
            </div>
            <div class="md:w-4/12 md:py-20 py-10 px-10"
                style="background: linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                <div class="flex w-full justify-center mb-4">
                    <img src="images\logo 1.png" alt="logo" class="flex justify-center" />
                </div>
                <h1 class="text-manrope text-gray-landinpage">Don’t miss out on the next big thing since peanut butter and
                    jelly.<span class="text-white font-semibold ml-2">Join us now!</span>
                </h1>

                <div class="flex items-center mt-4 text-montserrat space-x-4 text-white py-4">
                    <input type="text" class="w-full fadedgray rounded-md py-2 px-2 text-sm" placeholder="Your Email" />
                </div>
                <div class="flex items-center justify-center mt-4 text-montserrat space-x-4 text-white py-10">
                    <button type=""
                        class="w-40 flex items-center text-xs justify-center bg-red-600 py-2 px-2 text-white rounded-md">Add
                        Get Early Access</button>
                </div>
            </div>
        </section>
    </div>
    <section class="text-manrope md:mt-0 mt-80">
        <div class="px-5 py-10 mx-auto">
            <div class="text-center md:pt-5 pt-20 md:mb-10 mb-4">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">What Recipeat has to offer</h1>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-0.5 rounded-full bg-white inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center md:space-y-0 space-y-6 md:space-x-6">
                <div class="p-4 px-6 md:w-1/5 flex flex-col text-center items-center rounded-lg border-2 border-gray-600  border-opacity-25"
                    style="background: linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                    <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                        style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30 45.5H18C7.14 45.5 2.5 40.86 2.5 30V18C2.5 7.14 7.14 2.5 18 2.5H30C40.86 2.5 45.5 7.14 45.5 18V30C45.5 40.86 40.86 45.5 30 45.5ZM18 5.5C8.78 5.5 5.5 8.78 5.5 18V30C5.5 39.22 8.78 42.5 18 42.5H30C39.22 42.5 42.5 39.22 42.5 30V18C42.5 8.78 39.22 5.5 30 5.5H18Z"
                                fill="#F9FBFC" />
                            <path
                                d="M23.9999 30.52C23.6199 30.52 23.2399 30.38 22.9399 30.08L16.9399 24.08C16.3599 23.5 16.3599 22.54 16.9399 21.96C17.5199 21.38 18.4799 21.38 19.0599 21.96L23.9999 26.9L28.9399 21.96C29.5199 21.38 30.4799 21.38 31.0599 21.96C31.6399 22.54 31.6399 23.5 31.0599 24.08L25.0599 30.08C24.7599 30.38 24.3799 30.52 23.9999 30.52Z"
                                fill="#F9FBFC" />
                            <path
                                d="M24 30.52C23.18 30.52 22.5 29.84 22.5 29.02V13.02C22.5 12.2 23.18 11.52 24 11.52C24.82 11.52 25.5 12.2 25.5 13.02V29.02C25.5 29.86 24.82 30.52 24 30.52Z"
                                fill="#F9FBFC" />
                            <path
                                d="M23.9999 36.4601C19.7799 36.4601 15.5399 35.7801 11.5199 34.4401C10.7399 34.1801 10.3199 33.3201 10.5799 32.5401C10.8399 31.7601 11.6799 31.3201 12.4799 31.6001C19.9199 34.0801 28.0999 34.0801 35.5399 31.6001C36.3199 31.3401 37.1799 31.7601 37.4399 32.5401C37.6999 33.3201 37.2799 34.1801 36.4999 34.4401C32.4599 35.8001 28.2199 36.4601 23.9999 36.4601Z"
                                fill="#F9FBFC" />
                        </svg>
                    </div>
                    <div class="flex-grow text-white mb-4">
                        <h2 class="text-lg title-font font-semibold mb-3">Save your recipes</h2>
                        <p class="leading-relaxed text-sm">Compile favourite recipes in your very own collections! Store
                            your family's recipes, either keep privately or share publicly</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/5 flex flex-col text-center items-center rounded-lg border-2 border-gray-600  border-opacity-25"
                    style="background: linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                    <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                        style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30 45.5H18C7.14 45.5 2.5 40.86 2.5 30V18C2.5 7.14 7.14 2.5 18 2.5H28C28.82 2.5 29.5 3.18 29.5 4C29.5 4.82 28.82 5.5 28 5.5H18C8.78 5.5 5.5 8.78 5.5 18V30C5.5 39.22 8.78 42.5 18 42.5H30C39.22 42.5 42.5 39.22 42.5 30V20C42.5 19.18 43.18 18.5 44 18.5C44.82 18.5 45.5 19.18 45.5 20V30C45.5 40.86 40.86 45.5 30 45.5Z"
                                fill="white" />
                            <path
                                d="M44 21.5H36C29.16 21.5 26.5 18.84 26.5 12V3.99998C26.5 3.39998 26.86 2.83998 27.42 2.61998C27.98 2.37998 28.62 2.51998 29.06 2.93998L45.06 18.94C45.48 19.36 45.62 20.02 45.38 20.58C45.14 21.14 44.6 21.5 44 21.5ZM29.5 7.61998V12C29.5 17.16 30.84 18.5 36 18.5H40.38L29.5 7.61998Z"
                                fill="white" />
                            <path
                                d="M26 27.5H14C13.18 27.5 12.5 26.82 12.5 26C12.5 25.18 13.18 24.5 14 24.5H26C26.82 24.5 27.5 25.18 27.5 26C27.5 26.82 26.82 27.5 26 27.5Z"
                                fill="white" />
                            <path
                                d="M22 35.5H14C13.18 35.5 12.5 34.82 12.5 34C12.5 33.18 13.18 32.5 14 32.5H22C22.82 32.5 23.5 33.18 23.5 34C23.5 34.82 22.82 35.5 22 35.5Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex-grow text-white">
                        <h2 class="text-lg title-font font-semibold mb-3">Tailored Content</h2>
                        <p class="leading-relaxed text-sm">Allergies? Diet Preferences? Simply hate that one ingredient?
                            Recipeat ensures the content you see is tuned to your preferences.</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/5 flex flex-col text-center items-center rounded-lg border-2 border-gray-600  border-opacity-25"
                    style="background: linear-gradient(130.33deg, #1F1F24 2.31%, rgba(31, 31, 36, 0.56) 100%);">
                    <div class="w-20 h-20  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-4 flex-shrink-0"
                        style="background: linear-gradient(145.18deg, #E4182A 17.1%, rgba(231, 70, 70, 0) 76.3%);">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 45.5C22.6 45.5 21.18 44.96 20.12 43.9L16.7 40.52C15.86 39.68 14.7 39.22 13.52 39.22H12C7.86 39.22 4.5 35.88 4.5 31.78V9.95996C4.5 5.85996 7.86 2.52002 12 2.52002H36C40.14 2.52002 43.5 5.85996 43.5 9.95996V31.78C43.5 35.88 40.14 39.22 36 39.22H34.48C33.3 39.22 32.14 39.7 31.3 40.52L27.88 43.9C26.82 44.96 25.4 45.5 24 45.5ZM12 5.5C9.52 5.5 7.5 7.49994 7.5 9.93994V31.76C7.5 34.22 9.52 36.2 12 36.2H13.52C15.5 36.2 17.4199 37 18.8199 38.38L22.24 41.76C23.22 42.72 24.8 42.72 25.78 41.76L29.2 38.38C30.6 37 32.52 36.2 34.5 36.2H36C38.48 36.2 40.5 34.2 40.5 31.76V9.93994C40.5 7.47994 38.48 5.5 36 5.5H12Z"
                                fill="white" />
                            <path
                                d="M23.9999 21.5001C20.5999 21.5001 17.8398 18.7401 17.8398 15.3401C17.8398 11.9401 20.5999 9.18018 23.9999 9.18018C27.3999 9.18018 30.1599 11.9401 30.1599 15.3401C30.1599 18.7401 27.3999 21.5001 23.9999 21.5001ZM23.9999 12.1802C22.2599 12.1802 20.8398 13.6001 20.8398 15.3401C20.8398 17.0801 22.2599 18.5001 23.9999 18.5001C25.7399 18.5001 27.1599 17.0801 27.1599 15.3401C27.1599 13.6001 25.7399 12.1802 23.9999 12.1802Z"
                                fill="white" />
                            <path
                                d="M32 32.8202C31.18 32.8202 30.5 32.1402 30.5 31.3202C30.5 28.5602 27.58 26.3003 24 26.3003C20.42 26.3003 17.5 28.5602 17.5 31.3202C17.5 32.1402 16.82 32.8202 16 32.8202C15.18 32.8202 14.5 32.1402 14.5 31.3202C14.5 26.9002 18.76 23.3003 24 23.3003C29.24 23.3003 33.5 26.9002 33.5 31.3202C33.5 32.1402 32.82 32.8202 32 32.8202Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex-grow text-white">
                        <h2 class="text-lg title-font font-semibold mb-3">Personal taste profile </h2>
                        <p class="leading-relaxed text-sm">Tell the world about your specific taste! With Recipeat you can
                            use your taste profile to find recipes, follow chefs, and much more! So no more people serving
                            you sour sweets
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-manrope" style="background:rgba(20, 20, 20, 1)">
        <div class="container px-5 py-4 mx-auto flex items-center flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <span class="ml-3 text-xl font-semibold">Stay in touch with us</span>
            </a>
            <div class=" mx-auto flex items-center justify-center mt-2 space-x-2">
                <p class="text-sm text-white  sm:border-gray-200 sm:py-2 sm:mt-0  tracking-wider">FOLLOW RECIPEAT
                </p>
                <span class="inline-flex justify-center sm:justify-start">
                    <a class="text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-white">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-white">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
@endsection
