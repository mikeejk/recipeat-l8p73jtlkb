    <div class="bg-black w-full">

        <!-- Question 01 -->
        <div class="row w-full flex lg:h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}"
            id="step-1">
            <div class="w-full bg-cover bg-center bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-t-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your
                                name?</h4>
                        </div>
                        <div class="flex w-full flex-col bg-gray-200 shadow-2xl pt-4 px-4 pb-2 rounded-b-2xl">
                            <div class="flex flex-row w-full space-x-4 ">
                                <div class="mb-1 w-1/3">
                                    <input type="text" wire:model="f_name"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="First Name" required />
                                    @error('f_name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="mb-1 w-1/3">
                                    <input type="text" wire:model="m_name"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Middle Name" required />
                                    @error('m_name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                                <div class="mb-1 w-1/3">
                                    <input type="text" wire:model="l_name"
                                        class="w-full py-2 px-2 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Last Name" required />
                                    @error('l_name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full mt-2 flex justify-end">
                                <button type="button"
                                    class="py-2 px-2 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-base font-medium text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="firstStepSubmit">Hit me! To Next</button>
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
                                date of
                                birth?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="password" class="font-bold mb-1 text-gray-700 block">Date
                                    Of Birth</label>
                                <div class="flex flex-wrap -mx-3 mt-10 mb-2">
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Date
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-white shadow-md text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            type="number" wire:model="dob">
                                        @error('dob') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                    class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                Required</span>
                                        @enderror
                                    </div>
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Month
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block appearance-none w-full bg-white shadow-md border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                wire:model="month">
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                            @error('month') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                    Required</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                            Year
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-white shadow-md text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            type="number" wire:model="year" min="1988">
                                        @error('year') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                    class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                Required</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(1)">Back</button>
                                <button type="submit"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="secondStepSubmit">Next</button>
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
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your
                                current line
                                of work?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="designation" class="font-bold mb-1 text-gray-700 block">Current
                                    designation</label>
                                <input type="profession"
                                    class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="current_des" />
                                @error('current_des') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(2)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="thirdStepSubmit">Next</button>
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
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Do you
                                specialise in a
                                certain style of cooking?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Specialisation</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="specialisation" />
                                @error('specialisation') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(3)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fourthStepSubmit">Next</button>
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
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which company do
                                you
                                currently work with?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Company
                                    name</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="company_name" />
                                @error('company_name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(4)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fifthStepSubmit">Next</button>
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
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How many years
                                have you
                                been working at the company name?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Experience
                                    (years)</label>
                                <input type="number"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="experience_year" />
                                @error('experience_year') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(5)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="sixthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 07 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 7 ? 'display-none' : '' }}"
            id="step-7">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which state do
                                you reside
                                in?</h4>
                        </div>

                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">State</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="state" />
                                @error('state') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(6)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="seventhStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 08 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 8 ? 'display-none' : '' }}"
            id="step-8">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which city are
                                you
                                currently situated in?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Location</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="location" />
                                @error('location') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(7)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="eighthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 09 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 9 ? 'display-none' : '' }}"
            id="step-9">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Describe your job title?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Job type</label>
                                <textarea type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="job_describe"></textarea>
                                @error('job_describe') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(8)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="ninthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 10 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 10 ? 'display-none' : '' }}"
            id="step-10">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center p-2 font-bold lg:text-2xl md:text-xl text-lg">
                                What are the main
                                responsibilities associated with your job title?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="job" class="font-bold mb-1 text-gray-700 block">Job Description</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="job_responsibilities"></textarea>
                                @error('job_responsibilities') <span
                                        class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(9)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="tenthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 11 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 11 ? 'display-none' : '' }}"
            id="step-11">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Upload profile picture</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5 text-center">
                                <input class="border" type="text" wire:model="profile_image">
                                @error('profile_image') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(10)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="eleventhStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 12 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 12 ? 'display-none' : '' }}"
            id="step-12">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Education</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Enter your College
                                    Name</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="college_name" />
                                @error('college_name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label class="font-bold mb-1 text-gray-700 block">Enter your
                                    Degree</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="college_degree" />
                                @error('college_degree') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-5 flex">
                                <label class="font-bold mb-1 text-gray-700 block">Year</label>
                                <div class="flex flex-wrap -mx-3 mt-5 mb-2">
                                    <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                        <label
                                            class="flex uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-yearfrom">
                                            From
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            wire:model="college_from" type="number" placeholder="1996">
                                        @error('college_from') <span
                                                class="error text-red-500 text-xs pl-1 font-bold"><i
                                                    class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                Required</span>
                                        @enderror
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                        <label
                                            class="flex uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-yearto">
                                            To
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            wire:model="college_to" type="number" placeholder="1999">
                                        @error('college_to') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                    class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                Required</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(11)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="twelfthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 13 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 13 ? 'display-none' : '' }}"
            id="step-13">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Employment history</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-2">
                                <label for="jobtitle" class="font-bold mb-1 text-gray-700 block">Enter your Job title
                                </label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="exp_job_title" />
                                @error('exp_job_title') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="employeer" class="font-bold mb-1 text-gray-700 block">Employeer</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="exp_job_employeer" />
                                @error('exp_job_employeer') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-2 flex">
                                <label for="year" class="font-bold mb-1 text-gray-700 block">Year</label>
                                <div class="flex flex-wrap -mx-3 mt-5 mb-2">
                                    <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                        <label
                                            class="flex uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-yearfrom">
                                            From
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            wire:model="exp_from" type="number" placeholder="1996">
                                        @error('exp_from') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                    class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                Required</span>
                                        @enderror
                                    </div>
                                    <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                        <label
                                            class="flex uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-yearto">
                                            To
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            wire:model="exp_to" type="number" placeholder="1999">
                                        @error('exp_to') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                    class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                                Required</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="jobdescription" class="font-bold mb-1 text-gray-700 block">Job
                                    Description</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="exp_job_description"></textarea>
                                @error('exp_job_description') <span
                                        class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(11)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="thirteenthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 14 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 14 ? 'display-none' : '' }}"
            id="step-14">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Resume</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5 text-center">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Resume
                                    </label>
                                    <input class="border" type="text" wire:model="resume">
                                    @error('resume') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                                class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                            Required</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(13)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fourteenthStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 15 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 15 ? 'display-none' : '' }}"
            id="step-15">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Skills</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="skills" class="font-bold mb-1 text-gray-700 block">Skills</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="skills"></textarea>
                                @error('skills') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(14)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="fifteenStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 16 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 16 ? 'display-none' : '' }}"
            id="step-16">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Accomplishment</h4>
                        </div>

                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-2">
                                <label for="title" class="font-bold mb-1 text-gray-700 block">Title
                                </label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="accomplishment_title" />
                                @error('accomplishment_title') <span
                                        class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="description" class="font-bold mb-1 text-gray-700 block">Description</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="accomplishment_description"></textarea>
                                @error('accomplishment_description') <span
                                        class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="relevent_uploads" class="font-bold mb-1 text-gray-700 block">Relevent
                                    Uploads</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="accomplishment_upload"></textarea>
                                @error('accomplishment_upload') <span
                                        class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(15)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="sixteenStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question 17 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 17 ? 'display-none' : '' }}"
            id="step-17">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                What degree did you graduate with?</h4>
                        </div>

                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="degree" class="font-bold mb-1 text-gray-700 block">Enter your
                                    Degree</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="degree_name" />
                                @error('degree_name') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="degree_descripiton" class="font-bold mb-1 text-gray-700 block">brief
                                    description of the course</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="degree_description"></textarea>
                                @error('degree_description') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(16)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="seventeenStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Question 18 -->
        <div class="row w-full flex h-screen setup-content {{ $currentStep != 18 ? 'display-none' : '' }}"
            id="step-18">
            <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
                style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                    <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div
                            class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                            <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                                Additional Accomplishment</h4>
                        </div>

                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="accomplishment" class="font-bold mb-1 text-gray-700 block">What are some
                                    additional accomplishments you'd like to add to help distinguish yourself from other
                                    profiles?</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    wire:model="about_my_profile"></textarea>
                                @error('about_my_profile') <span class="error text-red-500 text-xs pl-1 font-bold"><i
                                            class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Required</span>
                                @enderror
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit"
                                    class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="back(17)">Back</button>
                                <button type="button"
                                    class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                    wire:click="eighteenStepSubmit">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End of the Questions-->
        <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 19 ? 'display-none' : '' }}"
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
                        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%))">eat</span> Account
                </h1>

                <a href="/welcome" class="flex justify-start text-decoration-none">
                    <button type="submit"
                        class="xl:ml-0 py-2 bg-red-700 hover:bg-green-400 text-lg text-white font-semibold rounded-lg
                  px-6 py-2 mt-8"
                        wire:click="submitForm">Go to Dashboard</button>
                </a>
            </div>
        </div>

    </div>
    </div>
