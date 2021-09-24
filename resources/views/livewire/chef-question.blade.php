<div>
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif

    <!-- Question 01 -->

    <div class="row w-full flex h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
          <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
            <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
              <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your name?</h4>
              </div>
              {{-- <div class="flex flex-col py-6 h-56  px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="name" placeholder="{{ Auth::user()->name }}" class=" w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Hit me! To Next</button>
                </div>
              </div> --}}
              <div class="bg-white shadow-2xl p-4 rounded-lg">
                <div class="mb-5">
                    <label for="firstname" wire:model="name" class="font-bold mb-1 text-gray-700 block">Firstname</label>
                    <input type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        placeholder="Enter your firstname..." required />
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="mb-5">
                    <label for="middlename" wire:model="name" class="font-bold mb-1 text-gray-700 block">Middle Name</label>
                    <input type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        placeholder="Enter your middlename..." required />
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-5">
                    <label for="lastname" wire:model="name" class="font-bold mb-1 text-gray-700 block">Last Name</label>
                    <input type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        placeholder="Enter your lastname..." required/>
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                    <button type="button" class=" py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Hit me! To Next</button>
                  </div>
            </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Question 02 -->

    <div class="row w-full flex h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your date of
                    birth?</h4>
                </div>
                {{-- <div class="flex flex-col py-6 h-56  px-8 space-y-5 bg-white rounded-b-2xl">
                  <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                    <input type="text" wire:model="name" placeholder="{{ Auth::user()->name }}" class=" w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                    @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                  </div>
                  <div class="w-full flex justify-center">
                    <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Hit me! To Next</button>
                  </div>
                </div> --}}
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="password" class="font-bold mb-1 text-gray-700 block">Date
                            Of Birth</label>

                        <div class="flex flex-wrap -mx-3 mt-10 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="date">
                                    Date
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white shadow-md text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-date" type="text" placeholder="14" required>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="month">
                                    Month
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-white shadow-md border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-month">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>Augest</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-year">
                                    Year
                                </label>
                                <input
                                    class="appearance-none block w-full bg-white shadow-md text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="year" type="text" placeholder="1999">
                            </div>
                        </div>

                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(1)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="secondStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Question 03 -->

    <div class="row w-full flex h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">What is your current line
                    of work?</h4>
                </div>
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="designation" class="font-bold mb-1 text-gray-700 block">Current
                            designation</label>
                        <input type="profession"
                            class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Chef" />

                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(2)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="thirdStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Question 04 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
                <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                    <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                      <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                          <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Do you specialise in a
                            certain style of cooking?</h4>
                        </div>
                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="specialisation" class="font-bold mb-1 text-gray-700 block">Specialisation</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    placeholder="eg. Chicken Curry" />
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(3)">Back</button>
                                <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fourthStepSubmit">Next</button>
                              </div>
                        </div>
                      </div>
                    </div>
                </div>
    </div>
    <!-- Question 05 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which company do you
                    currently work with?</h4>
                </div>
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="company_name" class="font-bold mb-1 text-gray-700 block">Company name</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-md focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Hotel Accord" />
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(4)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fifthStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Question 06 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
                    <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
                      <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                        <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                          <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How many years have you
                            been working at the company name?</h4>
                        </div>

                        <div class="bg-white shadow-2xl p-4 rounded-lg">
                            <div class="mb-5">
                                <label for="experience" class="font-bold mb-1 text-gray-700 block">Experience (years)</label>
                                <input type="number"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    placeholder="eg. 10" />
                            </div>
                            <div class="w-full flex justify-center">
                                <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(5)">Back</button>
                                <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="sixthStepSubmit">Next</button>
                              </div>
                        </div>
                      </div>
                    </div>
        </div>
    </div>
    <!-- Question 07 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which state do you reside
                    in?</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="state" class="font-bold mb-1 text-gray-700 block">State</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Kerala" />
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(6)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="seventhStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Question 08 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 8 ? 'display-none' : '' }}" id="step-8">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">Which city are you
                    currently situated in?</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="location" class="font-bold mb-1 text-gray-700 block">Location</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Kozhikode" />
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(7)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="eighthStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Question 09 -->

    <div class="row w-full flex h-screen setup-content {{ $currentStep != 9 ? 'display-none' : '' }}" id="step-9">

        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Describe your job title?</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="jobtype" class="font-bold mb-1 text-gray-700 block">Job type</label>
                        <textarea type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Information Tehnology" ></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(8)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="ninthStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Question 10 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 10 ? 'display-none' : '' }}" id="step-10">

        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center p-2 font-bold lg:text-2xl md:text-xl text-lg">
                    What are the main
                    responsibilities associated with your job title?</h4>
                </div>
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="job" class="font-bold mb-1 text-gray-700 block">Job Description</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Associate Software Engineer"></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(9)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="tenthStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Question 11 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 11 ? 'display-none' : '' }}" id="step-11">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Upload profile picture</h4>
                </div>
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5 text-center">
                        <div
                            class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                            <img id="image" class="object-cover w-full h-32 rounded-full" :src="image" />
                        </div>

                        <label for="fileInput" type="button"
                            class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path
                                    d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                <circle cx="12" cy="13" r="3" />
                            </svg>
                            Browse Photo
                        </label>

                        <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Click to add profile
                            picture</div>

                        <input name="photo" id="fileInput" accept="image/*" class="hidden" type="file"
                            @change="let file = document.getElementById('fileInput').files[0];
                            var reader = new FileReader();
                            reader.onload = (e) => image = e.target.result;
                            reader.readAsDataURL(file);">
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(10)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="twelvethStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Question 12 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 12 ? 'display-none' : '' }}" id="step-12">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Education</h4>
                </div>
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="school" class="font-bold mb-1 text-gray-700 block">Enter your School
                            Name</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your school name..." />
                    </div>
                    <div class="mb-5">
                        <label for="degree" class="font-bold mb-1 text-gray-700 block">Enter your Degree</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your degree..." />
                    </div>
                    <div class="mb-5 flex">
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
                                    id="grid-date" type="number" placeholder="1996">
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                <label
                                    class="flex uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-yearto">
                                    To
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-year" type="number" placeholder="1999">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(11)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="thirteenthStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
      </div>



    <!-- Question 13 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 13 ? 'display-none' : '' }}" id="step-13">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Employment history</h4>
                </div>
                {{-- <div class="flex flex-col py-6 h-56  px-8 space-y-5 bg-white rounded-b-2xl">
                  <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                    <input type="text" wire:model="name" placeholder="{{ Auth::user()->name }}" class=" w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                    @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                  </div>
                  <div class="w-full flex justify-center">
                    <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Hit me! To Next</button>
                  </div>
                </div> --}}
                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-2">
                        <label for="jobtitle" class="font-bold mb-1 text-gray-700 block">Enter your Job title
                            </label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your job title..." />
                    </div>
                    <div class="mb-2">
                        <label for="employeer" class="font-bold mb-1 text-gray-700 block">Employeer</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Employeer..." />
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
                                    id="grid-date" type="number" placeholder="1996">
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                <label
                                    class="flex uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-yearto">
                                    To
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-year" type="number" placeholder="1999">
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="jobdescription" class="font-bold mb-1 text-gray-700 block">Job Description</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your job description..."></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(11)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Question 14 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 14 ? 'display-none' : '' }}" id="step-14">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Resume(Optional)</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5 text-center">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                              Resume
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                              <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                  <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                  </label>

                                </div>
                                <p class="text-xs text-gray-500">
                                  PDF or Word
                                </p>
                              </div>
                            </div>
                          </div>

                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(13)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fourteenStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

     <!-- Question 15 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 15 ? 'display-none' : '' }}" id="step-15">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Skills</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="skills" class="font-bold mb-1 text-gray-700 block">Skills</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="eg. Enter yourskills..."></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(14)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="fifteenStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

     <!-- Question 16 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 16 ? 'display-none' : '' }}" id="step-16">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Accomplishment</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-2">
                        <label for="title" class="font-bold mb-1 text-gray-700 block">Title
                            </label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your title..." />
                    </div>
                    <div class="mb-2">
                        <label for="description" class="font-bold mb-1 text-gray-700 block">Description</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your Description..."></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="relevent_uploads" class="font-bold mb-1 text-gray-700 block">Relevent Uploads</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="About your relevent uploads..."></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(15)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="sixteenStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

     <!-- Question 17 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 17 ? 'display-none' : '' }}" id="step-17">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    What degree did you graduate with?</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="degree" class="font-bold mb-1 text-gray-700 block">Enter your Degree</label>
                        <input type="text"
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Enter your degree..." />
                    </div>
                    <div class="mb-5">
                        <label for="degree_descripiton" class="font-bold mb-1 text-gray-700 block">brief description of the course</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="About degree description..."></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(16)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="seventeenStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>

    </div>

     <!-- Question 18 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 18 ? 'display-none' : '' }}" id="step-18">
        <div class=" w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://img1.wsimg.com/isteam/ip/5086b5de-5e42-44ab-8021-9f54dcff236a/AdobeStock_232483527.jpeg')">
            <div class="md:w-3/4 mx-auto w-full flex lg:justify-center items-center h-auto p-4 justify-center">
              <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                <div class="py-6 bg-gradient-to-tr from-red-900 to-red-600 mb-2 border-b-2 border-white rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                  <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">
                    Additional Accomplishment</h4>
                </div>

                <div class="bg-white shadow-2xl p-4 rounded-lg">
                    <div class="mb-5">
                        <label for="accomplishment" class="font-bold mb-1 text-gray-700 block">What are some additional accomplishments you'd like to add to help distinguish yourself from other profiles?</label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                            placeholder="Additional Accomplishments..."></textarea>
                    </div>
                    <div class="w-full flex justify-center">
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold px-5 focus:outline-none bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="back(17)">Back</button>
                        <button type="button" class="ml-2 py-2 px-5 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="eighteenStepSubmit">Next</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>

<!--End of the Questions-->
     <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 19 ? 'display-none' : '' }}" id="step-19" style="background-image:url(https://www.wallpaperkiss.com/wimg/b/108-1089799_big.jpg)">
            <div class="w-full flex flex-col justify-center px-20 items-start">
                   <h1
                    class="text-xl text-start  text-white md:text-4xl md:tracking-widest bg-cover font-bold leading-tight mt-12 mb-4 pb-2">
                    Hi {{ Auth::user()->name }}! Welcome to your Personal  </h1>
                    <h1 class="text-xl text-start bg-cover md:text-3xl md:tracking-widest font-bold leading-tight text-white mb-10"><span class="text-3xl md:text-5xl pl-3 pt-1 pb-1 text-white rounded-l-md" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%))">Recip</span><span  class="text-3xl md:text-5xl bg-cover pr-3 pt-1 pb-1 text-red-600 rounded-r-md" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%))">eat</span> Account</h1>

                <a href="/welcome" class="flex justify-start text-decoration-none">
                    <button type="submit" class="xl:ml-0 py-2 bg-red-700 hover:bg-green-400 text-lg text-white font-semibold rounded-lg
                  px-6 py-2 mt-8" wire:click="submitForm">Go to Dashboard</button>
                </a>
           </div>
     </div>
</div>
