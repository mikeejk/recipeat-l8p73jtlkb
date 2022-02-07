    <div class="bg-black w-full">

        <!-- Question 01 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
            <div class="w-full bg-fixed flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
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
                </div>
            </div>
        </div>

        <!-- Question 02 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
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
        </div>

        <!-- Question 03 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
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
        </div>

        <!-- Question 04 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
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
        </div>

        <!-- Question 05 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
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
        </div>

        <!-- Question 06 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
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
                                    wire:model="accomplishments" Placeholder="My additional accomplishments"/>
                                {{-- @error('accomplishments') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror --}}
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
        </div>

        <!--End of the Questions-->
        <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 7 ? 'display-none' : '' }}"
            id="step-19" style="background-image:url(https://www.wallpaperkiss.com/wimg/b/108-1089799_big.jpg)">
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
                        class="xl:ml-0 py-2 bg-red-700 hover:bg-green-400 text-lg text-white font-semibold rounded-lg
                  px-6 py-2 mt-8"
                        wire:click="submitForm">Go to Dashboard</button>
                </a>
            </div>
        </div>

    </div>
    </div>
