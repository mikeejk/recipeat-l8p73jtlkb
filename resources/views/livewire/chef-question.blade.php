    <div class="bg-black w-full">
        <!-- Question 01 -->
        <div class=" w-full flex h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
            <div class="w-full bg-fixed bg-cover flex  justify-center "
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                {{-- <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-t-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How should we
                                call you ?</h4>
                        </div>
                        <div class="flex w-full flex-col bg-white shadow-2xl pt-4 pb-4 px-4 rounded-b-2xl">
                            <div class="flex flex-col md:flex-row w-full md:space-y-0 space-y-2">
                                <div class=" md:w-3/4 w-full mx-auto">
                                    <input type="text" wire:model="name"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Your good name" required />
                                    @error('name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="md:w-1/4 w-full flex md:justify-end justify-center ">
                                    <button type="button"
                                        class="py-2 px-4 font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                        wire:click="firstStepSubmit">Next&nbsp;<i
                                            class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div id="mySidenav" class="sidenav text-white bg-white">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full ">
                    <div
                        class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 backdrop-contrast-100 bg-white/10 ">
                        <div class="w-3/4 mx-auto py-10 flex flex-col ">
                            {{-- <button type="submit"
                                class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i
                                    style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button> --}}
                            <p class="text-xl text-gray-100 mt-4">Step 1 / 14</p>
                            <h1 class="mt-2 text-3xl font-bold text-gray-100">How should we
                                call you ?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                                <div class="w-1/6 h-1 bg-white"></div>
                            </div>
                            <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                                <input type="text" wire:model="name" placeholder="Your good name"
                                    class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center"
                                    autocomplete required />
                                @error('name') <span class="error text-red-500 text-base pl-1 py-2 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center py-3">
                                <button type="button"
                                    class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="firstStepSubmit">Continue&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>





        <!-- Question 02 -->

        <div class=" w-full flex h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
            <div class="w-full bg-fixed bg-cover flex  justify-center "
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div id="mySidenav" class="sidenav text-white bg-white">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full ">
                    <div
                        class="w-11/12 py-10 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50backdrop-contrast-200 bg-white/10 ">
                        <div class="w-3/4 mx-auto py-10 flex flex-col ">
                            <button type="submit" wire:click="back(1)"
                                class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i
                                    style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                            <p class="text-xl text-gray-100 mt-4">Step 2 / 14</p>
                            <h1 class="mt-2 text-3xl font-bold text-gray-100">What is your
                                Date of
                                Birth?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                                <div class="w-2/6 h-1 bg-white"></div>
                            </div>
                            <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                                <input type="date" wire:model="dob"
                                    class="w-3/4 py-3 px-4 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none"
                                    autocomplete required />
                                @error('dob') <span class="error text-red-500 text-base pl-1 py-2 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center py-3">
                                <button type="button"
                                    class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="secondStepSubmit">Continue&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your
                                Date of
                                Birth?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="flex flex-col md:flex-row w-full md:space-y-0 space-y-2">
                                <div class=" md:w-3/4 w-full mx-auto">
                                    <input type="date" wire:model="dob"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Your good name" required />
                                    @error('dob') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="w-full flex justify-center">
                                    <button type="submit"
                                        class="xl:ml-0 font-semibold py-2 px-4 focus:outline-none rounded-r-none bg-green-500 hover:bg-green-400 text-white rounded-md lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                        wire:click="back(1)"><i
                                            class="fas fa-arrow-circle-left text-sm font-semibold"></i>&nbsp;Back</button>
                                    <button type="button"
                                        class="py-2 px-4 font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md rounded-l-none lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                        wire:click="secondStepSubmit">Next&nbsp;<i
                                            class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Question 03 -->

        <div class=" w-full flex h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
            <div class="w-full bg-fixed bg-cover flex  justify-center "
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div id="mySidenav" class="sidenav text-white bg-white">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full ">
                    <div
                        class="w-11/12 py-10 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50backdrop-contrast-200 bg-white/10 ">
                        <div class="w-3/4 mx-auto py-10 flex flex-col ">
                            <button type="submit" wire:click="back(2)"
                                class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i
                                    style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                            <p class="text-xl text-gray-100 mt-4">Step 3 / 14</p>
                            <h1 class="mt-2 text-3xl font-bold text-gray-100">Which Location &
                                State do you reside in?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                                <div class="w-3/6 h-1 bg-white"></div>
                            </div>
                            <div class="mt-4 w-full flex justify-center items-center py-2 form-group">
                                <div class="flex w-1/2 mx-auto flex-col justify-center items-start">
                                    <input type="text" wire:model="location" Placeholder="Location"
                                        class="w-3/4 py-3 px-4 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none"
                                        autocomplete required />
                                    @error('location') <span
                                            class="error w-3/4 py-3 px-4 mx-auto text-red-500 text-base py-2 pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="flex w-1/2 flex-col justify-center items-start">
                                    <input type="text" wire:model="state" placeholder="State"
                                        class="w-3/4 py-3 px-4 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none"
                                        autocomplete required />
                                    @error('state') <span
                                            class="error w-3/4 py-3 px-4 mx-auto text-red-500 text-base py-2 pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex justify-center py-3">
                                <button type="button"
                                    class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="thirdStepSubmit">Continue&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which Location &
                                State do you reside in?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="flex w-full">
                                <div class="mb-3 w-1/2">
                                    <input type="text"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        wire:model="location" Placeholder="Location" />
                                    @error('location') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="mb-3 w-1/2 ml-2">
                                    <input type="text"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        wire:model="state" placeholder="State" />
                                    @error('state') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 font-semibold py-2 px-4 focus:outline-none rounded-r-none bg-green-500 hover:bg-green-400 text-white rounded-md lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(2)"><i
                                        class="fas fa-arrow-circle-left text-sm font-semibold"></i>&nbsp;Back</button>
                                <button type="button"
                                    class="py-2 px-4 font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md rounded-l-none lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="thirdStepSubmit">Next&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Question 04 -->

        <div class=" w-full flex h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
            <div class="w-full bg-fixed bg-cover flex  justify-center "
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div id="mySidenav" class="sidenav text-white bg-white">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/soup-plate.png" />
                                <span class="text-lg ml-2">Recipes</span>

                            </button>
                        </a>
                        <a href="/">
                            <button type="button"
                                class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center ">
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full ">
                    <div
                        class="w-11/12 py-10 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50backdrop-contrast-200 bg-white/10 ">
                        <div class="w-3/4 mx-auto py-10 flex flex-col ">
                            <button type="submit" wire:click="back(3)"
                                class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i
                                    style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                            <p class="text-xl text-gray-100 mt-4">Step 4 / 14</p>
                            <h1 class="mt-2 text-3xl font-bold text-gray-100">What is your
                                current line of work?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                                <div class="w-4/6 h-1 bg-white"></div>
                            </div>
                            <div class="mt-4 w-full flex justify-center items-center py-2 form-group">
                                <div class="flex w-1/2 mx-auto flex-col justify-center items-start">
                                    <input type="text" wire:model="designation" Placeholder="Designation"
                                        class="w-3/4 py-3 px-4 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none"
                                        autocomplete required />
                                    @error('designation') <span
                                            class="error w-3/4 py-3 px-4 mx-auto text-red-500 text-base py-2 pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="flex w-1/2 flex-col justify-center items-start">
                                    <input type="text" wire:model="company" placeholder="Company"
                                        class="w-3/4 py-3 px-4 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none"
                                        autocomplete required />
                                    @error('company')<span
                                            class="error w-3/4 py-3 px-4 mx-auto text-red-500 text-base py-2 pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex justify-center py-3">
                                <button type="button"
                                    class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fourthStepSubmit">Continue&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}"
            id="step-4">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your
                                current line of work?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="flex w-full">
                                <div class="mb-3 w-1/2">
                                    <input type="text"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        wire:model="designation" Placeholder="Designation" />
                                    @error('designation') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="mb-3 w-1/2 ml-2">
                                    <input type="text"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        wire:model="company" placeholder="Company" />
                                    @error('company') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 font-semibold py-2 px-4 focus:outline-none rounded-r-none bg-green-500 hover:bg-green-400 text-white rounded-md lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(3)"><i
                                        class="fas fa-arrow-circle-left text-sm font-semibold"></i>&nbsp;Back</button>
                                <button type="button"
                                    class="py-2 px-4 font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md rounded-l-none lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fourthStepSubmit">Next&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Question 05 -->

        <div class=" w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
            <div class="w-full bg-fixed bg-cover flex  justify-center "
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">


                <div id="mySidenav" class="sidenav text-white bg-white">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/soup-plate.png" />
                                <span class="text-lg ml-2">Recipes</span>

                            </button>
                        </a>
                        <a href="/">
                            <button type="button"
                                class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center ">
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full ">
                    <div
                        class="w-11/12 py-10 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50backdrop-contrast-200 bg-white/10 ">
                        <div class="w-3/4 mx-auto py-10 flex flex-col ">
                            <button type="submit" wire:click="back(4)"
                                class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i
                                    style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                            <p class="text-xl text-gray-100 mt-4">Step 5 / 6</p>
                            <h1 class="mt-2 text-3xl font-bold text-gray-100">Do you
                                specialise in a certain style of cooking?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                                <div class="w-5/6 h-1 bg-white"></div>

                            </div>
                            <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                                <input type="text" wire:model="cooking_style" placeholder="Your style of cooking"
                                    class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center"
                                    autocomplete required />
                                @error('cooking_style') <span
                                        class="error text-red-500 text-base pl-1 py-2 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center py-3">
                                <button type="button"
                                    class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fifthStepSubmit">Continue&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}"
            id="step-5">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Do you
                                specialise in a certain style of cooking?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-3">
                                <input type="text"
                                    class="w-full px-2 py-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="cooking_style" placeholder="Your style of cooking" />
                                @error('cooking_style') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 font-semibold py-2 px-4 focus:outline-none rounded-r-none bg-green-500 hover:bg-green-400 text-white rounded-md lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(4)"><i
                                        class="fas fa-arrow-circle-left text-sm font-semibold"></i>&nbsp;Back</button>
                                <button type="button"
                                    class="py-2 px-4 font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md rounded-l-none lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fifthStepSubmit">Next&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Question 06 -->

        <div class=" w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
            <div class="w-full bg-fixed bg-cover flex  justify-center "
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">


                <div id="mySidenav" class="sidenav text-white bg-white">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/soup-plate.png" />
                                <span class="text-lg ml-2">Recipes</span>

                            </button>
                        </a>
                        <a href="/">
                            <button type="button"
                                class="px-4 py-4 relative hover:bg-gray-100 hover:text-blue-700 text-sm font-medium border-b border-gray-200  w-full inline-flex items-center ">
                                <img class="w-8 h-8"
                                    src="https://img.icons8.com/ios/50/000000/voice-presentation.png" />
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full ">
                    <div
                        class="w-11/12 py-10 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50backdrop-contrast-200 bg-white/10 ">
                        <div class="w-3/4 mx-auto py-10 flex flex-col ">
                            <button type="submit" wire:click="back(5)"
                                class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i
                                    style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                            <p class="text-xl text-gray-100 mt-4">Step 6 / 6</p>
                            <h1 class="mt-2 text-2xl font-bold text-gray-100">What are some
                                additional accomplishments you'd like to add to help distinguish yourself from other
                                profiles?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                                <div class="w-6/6 h-1 bg-white"></div>

                            </div>
                            <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                                <input type="text" wire:model="accomplishments"
                                    Placeholder="My additional accomplishments"
                                    class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center"
                                    autocomplete required />
                                @error('accomplishments') <span
                                        class="error text-red-500 text-base pl-1 py-2 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center py-3">
                                <button type="button"
                                    class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="sixthStepSubmit">Continue&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}"
            id="step-6">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What are some
                                additional accomplishments you'd like to add to help distinguish yourself from other
                                profiles?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-3">
                                <input type="text"
                                    class="w-full px-2 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="accomplishments" Placeholder="My additional accomplishments" />
                                @error('accomplishments') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 font-semibold py-2 px-4 focus:outline-none rounded-r-none bg-green-500 hover:bg-green-400 text-white rounded-md lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(5)"><i
                                        class="fas fa-arrow-circle-left text-sm font-semibold"></i>&nbsp;Back</button>
                                <button type="button"
                                    class="py-2 px-4 font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md rounded-l-none lg:text-lg text-sm focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="sixthStepSubmit">Next&nbsp;<i
                                        class="fas fa-arrow-circle-right text-sm font-semibold"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!--End of the Questions-->
        <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 7 ? 'display-none' : '' }}"
            id="step-19" style="background-image:url(images/chefQuestionFinalPage.jpg)">
            <div class="w-full flex flex-col justify-center px-20 items-start">
                <h1
                    class="text-xl text-start  text-white md:text-4xl md:tracking-widest bg-cover font-bold leading-tight mt-12 mb-4 pb-2">
                    Hi {{ Auth::user()->name }}! Welcome to your Personal </h1>
                <h1
                    class="text-xl text-start bg-cover md:text-3xl md:tracking-widest font-bold leading-tight text-white mb-10">
                    <span class="text-3xl md:text-5xl pl-3 pt-1 pb-1 text-white rounded-l-md"
                        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%))">Recip</span><span
                        class="text-3xl md:text-5xl bg-cover pr-3 pt-1 pb-1 text-red-600 rounded-r-md"
                        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%))">eat</span>
                    Account
                </h1>

                <a href="/dashboard" class="flex justify-start text-decoration-none">
                    <button type="submit"
                        class="xl:ml-0 py-3 px-6 bg-red-700 hover:bg-green-500 text-xl text-white font-semibold rounded-lg
                  px-6 py-2 mt-8"
                        wire:click="submitForm">Go to Dashboard</button>
                </a>
            </div>
        </div>

    </div>
    </div>
