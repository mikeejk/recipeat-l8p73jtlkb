
<div>
    @if (!empty($successMsg))
        <div class="alert alert-success">
            {{ $successMsg }}
        </div>
    @endif

    <!-- Question 01 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
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

                <div id="main" class="w-20 text-white bg-gray-900">
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>

                <div class="w-full bg-gray-100">
                    <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                        <div class="w-3/4 mx-auto py-10 flex flex-col">
                            <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium "><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                            <p class="text-xl text-gray-100 mt-4">Step 1 / 14</p>
                            <h1 class="mt-2 text-3xl font-bold text-gray-100">How should we call you ?</h1>
                            <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">

                            </div>
                            <div class="mt-4 w-full flex justify-center items-center py-2 form-group">
                                <input type="text" wire:model="name" placeholder="Your Name" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="w-full flex justify-center py-3" >
                                <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Continue</button>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- <div class="w-full flex lg:justify-start items-center h-auto p-4 justify-center">
                        <div class="flex flex-col h-full w-3/4 ml-3 shadow-xl">
                            <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                                <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How should we call you ?</h4>
                            </div>
                            <div class="flex flex-col py-6 h-56  px-8 space-y-5 bg-white rounded-b-2xl">
                                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                                <input type="text" wire:model="name" placeholder="Your Name" class=" w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="w-full flex justify-center">
                                    <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Hit me! To Next</button>
                                </div>
                            </div>
                        </div>
                </div> --}}
    </div>


        <!-- Question 02 -->
        <div class="w-full flex h-screen setup-content  {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
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
            <div id="main" class="w-20 text-white bg-gray-900">
                <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
            <div class="w-full bg-gray-100">
                <div class="w-11/12 py-10 mx-auto mt-10  rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                    <div class="w-3/4 mx-auto py-3 flex flex-col">
                        <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(1)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                        <p class="text-xl text-gray-100 mt-4">Step 2 / 14</p>
                        <h1 class="mt-2 text-3xl font-bold text-gray-100">How do you I dentify yourself ?</h1>
                        <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                        <div class="h-1 w-14 bg-gray-100"></div>
                        </div>
                        <div class="mt-2 w-full flex justify-center items-center py-2 form-group">
                            <ul class="grid grid-cols-3 gap-x-10 m-4 max-w-md mx-auto form-group">
                                <li class="relative">
                                  <label class="flex h-28 radio-inline w-28 flex items-center justify-center border-dashed border-2 border-red-200 border-gray-300 rounded-full cursor-pointer focus:outline-none  peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent" ><input checked="checked" class="radio radio-secondary h-3 w-3  flex items-center justify-center" type="radio" checked="checked"  wire:model="gender" value="Male" {{{ $gender == 'Male' ? "checked" : "" }}}><i class="fa fa-mars text-2xl" style="font-size:48px;color:white"></i></label>
                                    <p class="text-white text-xl text-center"> Male</p>
                                </li>

                                <li class="">
                                    <label class="flex radio-inline h-28 w-28 flex items-center justify-center border-dashed border-2 border-red-200 border-gray-300 rounded-full cursor-pointer focus:outline-none  peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent" >  <input checked="checked" class="radio  radio-accent h-3 w-3  flex items-center justify-center" type="radio" wire:model="gender" value="Fe-Male" {{{ $gender == 'Fe-Male' ? "checked" : "" }}}><i style="font-size:48px" class="fa text-white text-2xl">&#xf221;</i></label>
                                    <p class="text-white text-xl text-center">Female</p>
                                </li>

                                <li class="">
                                    <label class="radio-inline flex h-28 w-28 flex items-center justify-center border-dashed border-2 border-red-200 border-gray-300 rounded-full cursor-pointer focus:outline-none  peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent" > <input checked="checked" class="radio radio-secondary h-3 w-3  flex items-center justify-center" type="radio" wire:model="gender" value="Other" {{{ $gender == 'Other' ? "checked" : "" }}}><i style="font-size:48px" class="fa text-white text-2xl">&#xf067;</i></label>
                                    <p class="text-white text-xl text-center"> Others</p>
                                </li>
                              </ul>
                              @error('gender') <span class="error text-red-500">{{ $message }}</span> @enderror

                        </div>
                        <div class="w-full flex justify-center py-1 space-x-4" >
                            <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg" wire:click="secondStepSubmit">Skip</button>
                            <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="secondStepSubmit">Continue</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Question 02 -->
        {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
            <div class="md:w-4/12 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
            <div class="flex px-6 py-2 mt-2">
                <i class="las la-angle-left mt-1"></i>
                <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(1)">Back</button>
            </div>
            <div class="flex flex-col lg:mt-40 mt-20 p-2">
                <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
                <div class="flex justify-center">
                <i class="las la-star text-red-400"></i>
                <i class="las la-star text-red-400"></i>
                <i class="las la-star text-red-400"></i>
                <i class="las la-star text-red-400"></i>
                <i class="las la-star-half text-red-400"></i>
                </div>
                <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
            </div>
            </div>
            <div class="md:w-8/12 lg:w-9/12 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
            <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
                <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                    <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How do you I dentify yourself ?</h4>
                </div>
                <div class="flex flex-col py-6 h-68 space-y-5 bg-white rounded-b-2xl">
                    <div class="w-full flex flex-col justify-center items-center form-group">
                    <div class="flex md:flex-row flex-col md:space-x-4 px-5 justify-center">
                        <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                        <div class="p-2 sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-2 h-full items-center font-bold text-lg">
                            <label class="radio-inline"><input type="radio" wire:model="gender" value="Male" {{{ $gender == 'Male' ? "checked" : "" }}}>&nbsp; <i class="fas fa-male"></i> &nbsp; Male </label>
                            </div>
                        </div>
                        <div class="p-2 sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-2 h-full items-center font-bold text-lg">
                            <label class="radio-inline"><input type="radio" wire:model="gender" value="Fe-Male" {{{ $gender == 'Fe-Male' ? "checked" : "" }}}>&nbsp; <i class="fas fa-female"></i> &nbsp; Female</label>
                            </div>
                        </div>
                        <div class="p-2 sm:w-1/2 w-full">
                            <div class="bg-gray-100 rounded flex p-2 h-full items-center font-bold text-lg">
                            <label class="radio-inline"><input type="radio" wire:model="gender" value="Other" {{{ $gender == 'Other' ? "checked" : "" }}}>&nbsp; <i class="fas fa-mars"></i> &nbsp; Other </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    @error('gender') <span class="error text-red-500">{{ $message }}</span> @enderror
                    <div class="w-full flex mt-5 justify-center">
                        <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="secondStepSubmit">Hit me! To Next</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </div> --}}



    <!-- Question 03 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
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

        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>

        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-10 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(2)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 3 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">Confirm your email id <span class="text-green-500">{{ Auth::user()->email }}</span></h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                        <div class="h-1 w-20 bg-gray-100"></div>
                    </div>
                    <div class="mt-4 w-full flex justify-center items-center py-2 form-group">
                        <input wire:model="mail" type="email" name="mail" id="mail" placeholder="Registered mail id" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                        @error('mail') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="thirdStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>

    </div>






    <!-- Question 04 -->

    <div class="w-full flex h-screen setup-content  {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
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
        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-10 mx-auto mt-10  rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-3 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(3)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 4 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">If you have to choose a level for your cooking ?</h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                    <div class="h-1 w-28 bg-gray-100"></div>
                    </div>
                    <div class="mt-2 w-full flex justify-center items-center py-2 form-group">
                        <div class="">
                            <div class="mt-2 flex flex-col space-y-3">
                              <div>
                                <label class="inline-flex items-center">
                                  <input type="radio" class="form-radio text-blue-500 h-6 w-6"  wire:model="cookinglevel" value="Beginner" {{{ $cookinglevel == 'Beginner' ? "checked" : "" }}}>
                                  <span class="ml-2 text-white text-xl">I Can Try</span>
                                </label>
                              </div>
                              <div>
                                <label class="inline-flex items-center">
                                  <input type="radio" class="form-radio text-green-500 h-6 w-6" wire:model="cookinglevel" value="Intermediate" {{{ $cookinglevel == 'Intermediate' ? "checked" : "" }}}>
                                  <span class="ml-2 text-white text-xl">I Can Cook</span>
                                </label>
                              </div>
                              <div>
                                <label class="inline-flex items-center">
                                  <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="cookinglevel" value="Wellversed" {{{ $cookinglevel == 'Wellversed' ? "checked" : "" }}}>
                                  <span class="ml-2 text-white text-xl">Your Kidding? I am Great</span>
                                </label>
                              </div>
                            </div>
                            @error('cookinglevel') <span class="error text-red-500">{{ $message }}</span> @enderror
                          </div>
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg" wire:click="secondStepSubmit">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fourthStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
                <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
                  <div class="flex px-6 py-2 mt-2">
                    <i class="las la-angle-left mt-1"></i>
                    <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(3)">Back</button>
                  </div>
                  <div class="flex flex-col lg:mt-40 mt-20 p-2">
                    <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
                    <div class="flex justify-center">
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star-half text-red-400"></i>
                    </div>
                    <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
                  </div>
                </div>
                <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
                  <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                      <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                        <h4 class="text-white text-center font-bold m-3 lg:text-xl md:text-xl text-lg">If you have to choose a level for your cooking ?</h4>
                      </div>
                      <div class="flex flex-col py-6 h-68 space-y-5 bg-white rounded-b-2xl">
                        <div class="w-full flex flex-col justify-center items-center form-group">
                          <div class="flex md:flex-row flex-col md:space-x-4 px-5 justify-center">
                            <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="Beginner" {{{ $cookinglevel == 'Beginner' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-pawn"></i> &nbsp; I Can Try </label>
                                </div>
                              </div>
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="Intermediate" {{{ $cookinglevel == 'Intermediate' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-rook"></i> &nbsp; I Can Cook</label>
                                </div>
                              </div>
                              <div class="p-2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"
                                    ><input type="radio" wire:model="cookinglevel" value="Wellversed" {{{ $cookinglevel == 'Wellversed' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-queen"></i>
                                    &nbsp; Your Kidding? I am Great
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          @error('cookinglevel') <span class="error text-red-500">{{ $message }}</span> @enderror
                          <div class="w-full flex mt-5 justify-center">
                            <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fourthStepSubmit">Hit me! To Next</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </div> --}}

    <!-- Question 05 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
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

        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>

        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-10 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(4)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 5 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">Do you have any specific allergies ?</h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                        <div class="h-1 w-40 bg-gray-100"></div>
                    </div>
                    <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                        <input type="text" wire:model="allergies" placeholder="Specific Allergies" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                        @error('allergies') <span class="error text-red-500 py-2">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fifthStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>

    </div>


    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(4)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Do you have any specific allergies ?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="allergies" placeholder="Specific Allergies" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('allergies') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fifthStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}

      <!-- Question 06 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
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
        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-10 mx-auto mt-10  rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-3 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(3)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 6 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">Do you follow a particular lifestyle ?</h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                    <div class="h-1 w-48 bg-gray-100"></div>
                    </div>
                    <div class="mt-2 w-full flex justify-center items-center py-2 form-group">
                        <div class="">
                            <div class="mt-2 space-y-4 flex flex-col w-full">
                                <div class="flex  w-full space-x-20">
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-blue-500 h-6 w-6"  wire:model="lifestyle" value="Vegan" {{{ $lifestyle == 'Vegan' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-pizza-slice"></i> &nbsp; Vegan</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-green-500 h-6 w-6" wire:model="lifestyle" value="Keto" {{{ $lifestyle == 'Keto' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-seedling"></i> &nbsp; Keto</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex  w-full space-x-10">
                                    <div>
                                            <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="lifestyle" value="Pescetarian" {{{ $lifestyle == 'Pescetarian' ? "checked" : "" }}}>
                                            <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-fish"></i>&nbsp; Pescetarian</span>
                                            </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="lifestyle" value="Vegetarian" {{{ $lifestyle == 'Vegetarian' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-carrot"></i> &nbsp; Vegetarian</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                                    <input type="text" type="text" wire:model="lifestyle" placeholder="Lifestyle" class="w-full py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                                    @error('lifestyle') <span class="error text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg" wire:click="secondStepSubmit">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="sixthStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
                <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
                  <div class="flex px-6 py-2 mt-2">
                    <i class="las la-angle-left mt-1"></i>
                    <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(5)">Back</button>
                  </div>
                  <div class="flex flex-col lg:mt-40 mt-20 p-2">
                    <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
                    <div class="flex justify-center">
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star text-red-400"></i>
                      <i class="las la-star-half text-red-400"></i>
                    </div>
                    <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
                  </div>
                </div>
                <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
                  <div class="w-3/4 flex lg:justify-start items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full w-full ml-3 shadow-xl">
                      <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                        <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Do you follow a particular lifestyle ?</h4>
                      </div>
                      <div class="flex flex-col py-6 h-68 space-y-5 bg-white rounded-b-2xl">
                        <div class="w-full flex flex-col justify-center items-center form-group">
                          <div class="flex md:flex-row flex-col md:space-x-4 px-5 justify-center">
                            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Vegan" {{{ $lifestyle == 'Vegan' ? "checked" : "" }}}>&nbsp; <i class="fas fa-pizza-slice"></i> &nbsp; Vegan </label>
                                </div>
                              </div>
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Keto" {{{ $lifestyle == 'Keto' ? "checked" : "" }}}>&nbsp; <i class="fas fa-seedling"></i> &nbsp; Keto</label>
                                </div>
                              </div>
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"
                                    ><input type="radio" wire:model="lifestyle" value="Pescetarian" {{{ $lifestyle == 'Pescetarian' ? "checked" : "" }}}>&nbsp; <i class="fas fa-fish"></i>
                                    &nbsp; Pescetarian
                                  </label>
                                </div>
                              </div>
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Vegetarian" {{{ $lifestyle == 'Vegetarian' ? "checked" : "" }}}>&nbsp; <i class="fas fa-carrot"></i> &nbsp; Vegetarian</label>
                                </div>
                              </div>
                              <div class="flex w-full justify-center">
                                <input type="text" wire:model="lifestyle" placeholder="Lifestyle" class="px-4 py-3 mb-2 text-xl mt-2 border-b-2 rounded-md border-gray-500 text-center focus:border-b-2 focus:outline-none" autocomplete required />
                              </div>
                            </div>
                          </div>
                          @error('lifestyle') <span class="error text-red-500">{{ $message }}</span> @enderror
                          <div class="w-full flex mt-5 justify-center">
                            <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="sixthStepSubmit">Hit me! To Next</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </div> --}}


    <!-- Question 07 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7">
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

        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>

        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-10 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(6)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 7 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">Do you have any ingredients that you would like to avoid ?</h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                        <div class="h-1 w-56 bg-gray-100"></div>
                    </div>
                    <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                        <input type="text"  wire:model="ingredient" placeholder="You Like to Avoid Ingredient" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                        @error('ingredient') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="seventhStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(6)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold m-3 lg:text-xl md:text-xl text-lg">Do you have any ingredients that you would like to avoid ?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="ingredient" placeholder="You Like to Avoid Ingredient" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('ingredient') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="seventhStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}



    <!-- Question 08 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 8 ? 'display-none' : '' }}" id="step-8">
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

        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>

        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-10 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(7)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 8 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">What are your favourite cuisines ?</h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                        <div class="h-1 w-64 bg-gray-100"></div>
                    </div>
                    <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                        <input type="text"  wire:model="pref_cuisine" placeholder="Favourite Cuisine" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                        @error('pref_cuisine') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="eighthStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 8 ? 'display-none' : '' }}" id="step-8">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(7)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">What are your favourite cuisines ?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="pref_cuisine" placeholder="Favourite Cuisine" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('pref_cuisine') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="eighthStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}


    <!-- Question 09 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 9 ? 'display-none' : '' }}" id="step-9">
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
        <div id="main" class="w-20 text-white bg-gray-900">
            <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        <div class="w-full bg-gray-100">
            <div class="w-11/12 py-10 mx-auto mt-10  rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
                <div class="w-3/4 mx-auto py-3 flex flex-col">
                    <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(8)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                    <p class="text-xl text-gray-100 mt-4">Step 9 / 14</p>
                    <h1 class="mt-2 text-3xl font-bold text-gray-100">If you have to choose a level for your cooking ?</h1>
                    <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                    <div class="h-1 w-72 bg-gray-100"></div>
                    </div>
                    <div class="mt-2 w-full flex justify-center items-center py-2 form-group">
                        <div class="">
                            <div class="mt-2 space-y-4 flex flex-col w-full">
                                <div class="flex  w-full space-x-10">
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-blue-500 h-6 w-6"  wire:model="goals" value="New Skill" {{{ $goals == 'New Skill' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-book-reader"></i> &nbsp; New Skill</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-green-500 h-6 w-6" wire:model="goals" value="Experiment With Cuisine" {{{ $goals == 'Experiment With Cuisine' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-drumstick-bite"></i> &nbsp; Experiment With Cuisine</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex  w-full space-x-8">
                                    <div>
                                            <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="goals" value="Save Time" {{{ $goals == 'Save Time' ? "checked" : "" }}}>
                                            <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-stopwatch"></i>
                                              &nbsp; Save Time</span>
                                            </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="goals" value="Save Money" {{{ $goals == 'Save Money' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-hand-holding-usd"></i>
                                          &nbsp; Save Money</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex  w-full space-x-6">
                                    <div>
                                            <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="goals" value=" Eat Healthy " {{{ $goals == 'Eat Healthy' ? "checked" : "" }}}>
                                            <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-heartbeat"></i> &nbsp; Eat Healthy</span>
                                            </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="goals" value="Dietary Goal" {{{ $goals == 'Dietary Goal' ? "checked" : "" }}}>
                                        <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-apple-alt"></i>
                                          &nbsp; Dietary Goal</span>
                                        </label>
                                    </div>
                                </div>
                                @error('goals') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center py-1 space-x-4" >
                        <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg" wire:click="secondStepSubmit">Skip</button>
                        <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="ninthStepSubmit">Continue</button>
                    </div>
                </div>

            </div>

        </div>
    </div>

     {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 9 ? 'display-none' : '' }}" id="step-9">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(8)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">If you have to choose a level for your cooking ?</h4>
              </div>
              <div class="flex flex-col py-6 h-68 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center form-group">
                  <div class="flex md:flex-row flex-col md:space-x-4 px-5 justify-center">
                    <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                      <div class="p-1 sm:w-1/2 w-full font-medium ">
                        <div class="flex p-3 h-full items-center">
                          <label class="w-full radio-inline border-red-700 border-2 rounded-md p-2 "><input type="radio" wire:model="goals" value="New Skill" {{{ $goals == 'New Skill' ? "checked" : "" }}}>&nbsp; <i class="fas fa-book-reader"></i> &nbsp; New Skill </label>
                        </div>
                      </div>
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class=" flex p-3 h-full items-center">
                          <label class="w-full  radio-inline border-red-700 border-2 rounded-md p-2"><input type="radio" wire:model="goals" value="Experiment With Cuisine" {{{ $goals == 'Experiment With Cuisine' ? "checked" : "" }}}>&nbsp; <i class="fas fa-drumstick-bite"></i> &nbsp; Experiment With Cuisine</label>
                        </div>
                      </div>
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class=" flex p-3 h-full items-center">
                          <label class="w-full  radio-inline border-red-700 border-2 rounded-md p-2"
                            ><input type="radio" wire:model="goals" value="Save Time" {{{ $goals == 'Save Time' ? "checked" : "" }}}>&nbsp; <i class="fas fa-stopwatch"></i>
                            &nbsp; Save Time
                          </label>
                        </div>
                      </div>
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class="flex p-3 h-full items-center">
                          <label class="w-full  radio-inline border-red-700 border-2 rounded-md p-2"
                            ><input type="radio" wire:model="goals" value="Save Money" {{{ $goals == 'Save Money' ? "checked" : "" }}}>&nbsp; <i class="fas fa-hand-holding-usd"></i>
                            &nbsp; Save Money
                          </label>
                        </div>
                      </div>
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class="flex p-3 h-full items-center">
                          <label class=" w-full  radio-inline border-red-700 border-2 rounded-md p-2">
                            <input type="radio" wire:model="goals" value=" Eat Healthy " {{{ $goals == 'Eat Healthy' ? "checked" : "" }}}>&nbsp; <i class="fas fa-heartbeat"></i> &nbsp; Eat Healthy </label>
                        </div>
                      </div>
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class=" flex p-3 h-full items-center">
                          <label class="w-full  radio-inline border-red-700 border-2 rounded-md p-2"
                            ><input class="" type="radio" wire:model="goals" value="Dietary Goal" {{{ $goals == 'Dietary Goal' ? "checked" : "" }}}>&nbsp; <i class="fas fa-apple-alt"></i>
                            &nbsp; Dietary Goal
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  @error('goals') <span class="error text-red-500">{{ $message }}</span> @enderror
                  <div class="w-full flex mt-5 justify-center">
                    <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="ninthStepSubmit">Hit me! To Next</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}


    <!-- Question 10 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 10 ? 'display-none' : '' }}" id="step-10">
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
      <div id="main" class="w-20 text-white bg-gray-900">
          <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>
      <div class="w-full bg-gray-100">
          <div class="w-11/12 py-10 mx-auto mt-10  rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
              <div class="w-3/4 mx-auto py-3 flex flex-col">
                  <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(9)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                  <p class="text-xl text-gray-100 mt-4">Step 10 / 14</p>
                  <h1 class="mt-2 text-3xl font-bold text-gray-100">How many people do you usually cook for ?</h1>
                  <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                  <div class="h-1 w-80 bg-gray-100"></div>
                  </div>
                  <div class="mt-2 w-full flex justify-center items-center py-2 form-group">
                      <div class="">
                          <div class="mt-2 space-y-4 flex flex-col w-full">
                              <div class="flex  w-full space-x-10">
                                  <div>
                                      <label class="inline-flex items-center">
                                      <input type="radio" class="form-radio text-blue-500 h-6 w-6"  wire:model="serving_time" value="01 - 10" {{{ $serving_time == '01 - 10' ? "checked" : "" }}}>
                                      <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-user-alt"></i>
                                        &nbsp; 01 - 10</span>
                                      </label>
                                  </div>
                                  <div>
                                      <label class="inline-flex items-center">
                                      <input type="radio" class="form-radio text-green-500 h-6 w-6" wire:model="serving_time" value="10 - 50" {{{ $serving_time == '11 - 50' ? "checked" : "" }}}>
                                      <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-user-friends"></i>&nbsp; 11 - 50</span>
                                      </label>
                                  </div>
                              </div>
                              <div class="flex  w-full space-x-8">
                                  <div>
                                          <label class="inline-flex items-center">
                                          <input type="radio" class="form-radio text-pink-600 h-6 w-6" wire:model="serving_time" value="51 - 100" {{{ $serving_time == '51 - 100' ? "checked" : "" }}}>
                                          <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-users"></i>
                                            &nbsp; 51 - 100</span>
                                          </label>
                                  </div>
                                  <div>
                                      <label class="inline-flex items-center">
                                      <input type="radio" class="form-radio text-pink-600 h-6 w-6"  wire:model="serving_time" value="101 - More" {{{ $serving_time == '101 - More' ? "checked" : "" }}}>
                                      <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-users"></i>
                                        &nbsp; 101 - More</span>
                                      </label>
                                  </div>
                              </div>

                              @error('serving_time') <span class="error text-red-500">{{ $message }}</span> @enderror
                          </div>
                      </div>
                  </div>
                  <div class="w-full flex justify-center py-1 space-x-4" >
                      <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg" wire:click="secondStepSubmit">Skip</button>
                      <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="tenthStepSubmit">Continue</button>
                  </div>
              </div>

          </div>

      </div>
  </div>


     {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 10 ? 'display-none' : '' }}" id="step-10">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(8)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">How many people do you usually cook for ?</h4>
              </div>
              <div class="flex flex-col py-6 h-68 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center form-group">
                  <div class="flex md:flex-row flex-col md:space-x-4 px-5 justify-center">
                    <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2">
                      <div class="p-2 sm:w-1/2 w-full font-medium">
                        <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                          <label class="radio-inline"
                            ><input type="radio" wire:model="serving_time" value="01 - 10" {{{ $serving_time == '01 - 10' ? "checked" : "" }}}>&nbsp; <i class="fas fa-user-alt"></i>
                            &nbsp; 01 - 10
                          </label>
                        </div>
                      </div>
                      <div class="p-2 sm:w-1/2 w-full font-medium">
                        <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                          <label class="radio-inline"><input type="radio" wire:model="serving_time" value="10 - 50" {{{ $serving_time == '11 - 50' ? "checked" : "" }}}>&nbsp; <i class="fas fa-user-friends"></i>&nbsp; 11 - 50</label>
                        </div>
                      </div>
                      <div class="p-2 sm:w-1/2 w-full font-medium">
                        <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                          <label class="radio-inline"
                            ><input type="radio" wire:model="serving_time" value="51 - 100" {{{ $serving_time == '51 - 100' ? "checked" : "" }}}>&nbsp; <i class="fas fa-users"></i>
                            &nbsp; 51 - 100
                          </label>
                        </div>
                      </div>
                      <div class="p-2 sm:w-1/2 w-full font-medium">
                        <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                          <label class="radio-inline"
                            ><input type="radio" wire:model="serving_time" value="101 - More" {{{ $serving_time == '101 - More' ? "checked" : "" }}}>&nbsp; <i class="fas fa-users"></i>
                            &nbsp; 101 - More
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  @error('serving_time') <span class="error text-red-500">{{ $message }}</span> @enderror
                  <div class="w-full flex mt-5 justify-center">
                    <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="tenthStepSubmit">Hit me! To Next</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}



    <!-- Question 11 -->
    <div class="w-full flex h-screen setup-content {{ $currentStep != 11 ? 'display-none' : '' }}" id="step-11">
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

      <div id="main" class="w-20 text-white bg-gray-900">
          <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>

      <div class="w-full bg-gray-100">
          <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
              <div class="w-3/4 mx-auto py-10 flex flex-col">
                  <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(10)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                  <p class="text-xl text-gray-100 mt-4">Step 11 / 14</p>
                  <h1 class="mt-2 text-3xl font-bold text-gray-100">Which one would you rather cook?</h1>
                  <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                      <div class="h-1 w-64 bg-gray-100"></div>
                  </div>
                  <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                      <input type="text"  wire:model="cho_cook" placeholder="Rather Cook" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                      @error('cho_cook') <span class="error text-red-500">{{ $message }}</span> @enderror
                  </div>
                  <div class="w-full flex justify-center py-1 space-x-4" >
                      <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                      <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="eleventhStepSubmit">Continue</button>
                  </div>
              </div>

          </div>

      </div>

  </div>

    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 11 ? 'display-none' : '' }}" id="step-11">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(10)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">Which one would you rather cook?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="cho_cook" placeholder="Rather Cook" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('cho_cook') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="eleventhStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}


    <!-- Question 12 -->

    <div class="w-full flex h-screen setup-content {{ $currentStep != 12 ? 'display-none' : '' }}" id="step-12">
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

      <div id="main" class="w-20 text-white bg-gray-900">
          <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>

      <div class="w-full bg-gray-100">
          <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
              <div class="w-3/4 mx-auto py-10 flex flex-col">
                  <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(11)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                  <p class="text-xl text-gray-100 mt-4">Step 12 / 14</p>
                  <h1 class="mt-2 text-3xl font-bold text-gray-100">What is one ingredient you will never get tired ?</h1>
                  <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                      <div class="h-1 w-64 bg-gray-100"></div>
                  </div>
                  <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                      <input type="text"  wire:model="fav_ingr" placeholder="Your Never get Tried Ingredient" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                      @error('fav_ingr') <span class="error text-red-500">{{ $message }}</span> @enderror
                  </div>
                  <div class="w-full flex justify-center py-1 space-x-4" >
                      <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                      <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="twelfthStepSubmit">Continue</button>
                  </div>
              </div>

          </div>

      </div>

  </div>
    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 12 ? 'display-none' : '' }}" id="step-12">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(11)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">What is one ingredient you will never get tired ?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="fav_ingr" placeholder="Your Never get Tried Ingredient" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('fav_ingr') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="twelfthStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}



    <!-- Question 13 -->

    <div class="w-full flex h-screen setup-content {{ $currentStep != 13 ? 'display-none' : '' }}" id="step-13">
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

      <div id="main" class="w-20 text-white bg-gray-900">
          <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>

      <div class="w-full bg-gray-100">
          <div class="w-11/12 py-20 mx-auto mt-10 py-20 rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
              <div class="w-3/4 mx-auto py-10 flex flex-col">
                  <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(12)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                  <p class="text-xl text-gray-100 mt-4">Step 13 / 14</p>
                  <h1 class="mt-2 text-3xl font-bold text-gray-100">What is your preferred level of spiciness?</h1>
                  <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                      <div class="h-1 w-64 bg-gray-100"></div>
                  </div>
                  <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                      <input type="text"  wire:model="level_spici" placeholder="Level of Spiciness" class="w-1/2 py-3 mx-auto border-b-2 rounded text-gray-600 border-gray-800 bg-gray-200 focus:outline-none text-center" autocomplete required />
                      @error('level_spici') <span class="error text-red-500">{{ $message }}</span> @enderror
                  </div>
                  <div class="w-full flex justify-center py-1 space-x-4" >
                      <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg">Skip</button>
                      <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="thirteenthStepSubmit">Continue</button>
                  </div>
              </div>

          </div>

      </div>

    </div>

    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 13 ? 'display-none' : '' }}" id="step-13">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(12)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">What is your preferred level of spiciness?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="level_spici" placeholder="Level of Spiciness" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('level_spici') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="thirteenthStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}



    <!-- Question 14 -->


    <div class="w-full flex h-screen setup-content {{ $currentStep != 14 ? 'display-none' : '' }}" id="step-14">
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
      <div id="main" class="w-20 text-white bg-gray-900">
          <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </div>
      <div class="w-full bg-gray-100">
          <div class="w-11/12 py-10 mx-auto mt-10  rounded-xl shadow-lg shadow-blue-500/50 bg-gradient-to-r from-black via-gray-800 to-red-900 backdrop-blur-sm">
              <div class="w-3/4 mx-auto py-3 flex flex-col">
                  <button type="submit" class="rounded-full flex items-center justify-center w-10 h-10 border-2 border-gray-100 hover:bg-gray-200 text-white hover:text-gray-700 font-medium " wire:click="back(13)"><i style="font-size:24px" class="fa hover:text-gray-700 ">&#xf053;</i></button>
                  <p class="text-xl text-gray-100 mt-4">Step 14 / 14</p>
                  <h1 class="mt-2 text-3xl font-bold text-gray-100">How much time do you have to spare for each ?</h1>
                  <div class="h-1 mt-4 w-full bg-gray-500 rounded-full">
                  <div class="h-1 w-full rounded-full bg-gray-100"></div>
                  </div>
                  <div class="mt-2 w-full flex justify-center items-center py-2 form-group">
                      <div class="">
                          <div class="mt-2 space-y-4 flex flex-col w-full">
                              <div class="flex  w-full space-x-20">
                                  <div>
                                      <label class="inline-flex items-center">
                                      <input type="radio" class="form-radio text-blue-500 h-6 w-6"  wire:model="time_spend" value="30 Mins and below" {{{ $time_spend == '30 Mins and below' ? "checked" : "" }}}>
                                      <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-hourglass-start"></i>
                                        &nbsp; 30 Mins and Below</span>
                                      </label>
                                  </div>
                                  <div>
                                      <label class="inline-flex items-center">
                                      <input type="radio" class="form-radio text-green-500 h-6 w-6" wire:model="time_spend" value="more than 1 hour" {{{ $time_spend == 'more than 1 hour' ? "checked" : "" }}}>
                                      <span class="ml-2 text-white text-xl">&nbsp; <i class="fas fa-hourglass"></i> &nbsp; More than 1 Hour</span>
                                      </label>
                                  </div>
                              </div>

                              <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">

                                @error('time_spend') <span class="error text-red-500">{{ $message }}</span> @enderror
                              </div>
                          </div>


                      </div>
                  </div>
                  <div class="w-full flex justify-center py-1 space-x-4" >
                      <button type="button" class=" py-2 px-8 border text-white rounded lg:text-lg text-base shadow-lg" wire:click="secondStepSubmit">Skip</button>
                      <button type="button" class=" py-2 px-3 bg-red-600 hover:bg-red-700 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fourteenthStepSubmit">Continue</button>
                  </div>
              </div>

          </div>

      </div>
  </div>

    {{-- <div class="row w-full flex h-screen setup-content {{ $currentStep != 14 ? 'display-none' : '' }}" id="step-14">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(13)">Back</button>
          </div>
          <div class="flex flex-col lg:mt-40 mt-20 p-2">
            <h1 class="text-gray-900 text-center font-medium lg:text-3xl text-xl mb-2">Cooks Love us!</h1>
            <div class="flex justify-center">
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star text-red-400"></i>
              <i class="las la-star-half text-red-400"></i>
            </div>
            <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success finding recipes they love.</p>
          </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
          <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">How much time do you have to spare for each ?</h4>
              </div>
              <div class="flex flex-col py-6 h-68 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center form-group">
                  <div class="flex w-full md:flex-row flex-col md:space-x-4 px-5 justify-center">
                    <div class="flex flex-wrap w-3/4 sm:mx-auto sm:mb-2 -mx-2">
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class="bg-gray-100 rounded flex p-2 h-full items-center justify-center">
                          <label class="radio-inline"
                            ><input type="radio" wire:model="time_spend" value="30 Mins and below" {{{ $time_spend == '30 Mins and below' ? "checked" : "" }}}>&nbsp; <i class="fas fa-hourglass-start"></i>
                            &nbsp; 30 Mins and Below
                          </label>
                        </div>
                      </div>
                      <div class="p-1 sm:w-1/2 w-full font-medium">
                        <div class="bg-gray-100 rounded flex p-2 h-full justify-center items-center">
                          <label class="radio-inline"><input type="radio" wire:model="time_spend" value="more than 1 hour" {{{ $time_spend == 'more than 1 hour' ? "checked" : "" }}}>&nbsp; <i class="fas fa-hourglass"></i> &nbsp; More than 1 Hour</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  @error('time_spend') <span class="error text-red-500">{{ $message }}</span> @enderror
                  <div class="w-full flex mt-5 justify-center">
                    <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fourteenthStepSubmit">Hit me! To Next</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}

    <!--End of the Questions-->
     <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 15 ? 'display-none' : '' }}" id="step-15" style="background-image:url(https://images.squarespace-cdn.com/content/v1/5f0c93dc1b1bc1564c698499/1623190785337-OUCJGE8KPPOAXQRHIQ6U/Campo+Website+Extended.jpg?format=2500w)">
            <div class="w-full flex flex-col justify-center px-20 items-start">
                   <h1
                    class="text-xl text-start md:text-3xl md:tracking-widest font-bold leading-tight mt-12 mb-4">
                    Hi {{ Auth::user()->name }}! Welcome to your Personal  </h1>
                    <h1 class="text-xl text-start md:text-3xl md:tracking-widest font-bold leading-tight  mb-10"><span class="text-3xl md:text-5xl text-red-600">Recip</span><span  class="text-3xl md:text-5xl text-black">eat</span> Account</h1>

                <a href="/dashboard" class="flex justify-start text-decoration-none">
                    <button type="submit" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-lg
                  px-6 py-2 mt-8" wire:click="submitForm">Go to Dashboard</button>
                </a>


           </div>
     </div>
</div>
