<main class="mx-auto w-7/12  py-10 mt-10 justify-center item-center">
    <p class="text-lg text-gray-100 ">Step 1 <span class="text-Montserrat opacity-50">of 4</span></p>
    <div class="h-0.5 mt-4 w-11/12 bg-gray-500 rounded-full">
        {{-- <div class="w-1/4 h-0.5 bg-white"></div> --}}
    </div>
    <h1 class="text-white py-4">Basic Information</h1>
    <section class="bg-black">
        <main class="mx-auto w-11/12 bg-black py-2 justify-start">
            <div class="w-full py-4">
                <input type="text"
                    class="py-4 border-b-2 bg-transparent w-full text-center justify-center placeholder:text-4xl placeholder:text-center text-white"
                    wire:model="recipe_name" placeholder="What are you cooking?">
                <h1 class="text-base text-gray-400 py-3">Give Your recipe a tasty title</h1>
            </div>
            <div class="flex justify-between w-full">
                <section class="w-1/2 space-y-4 py-4">
                    <div class=" flex w-full pr-4 items-center justify-between">
                        <h1 class=" text-white">Servings</h1>
                        <div class="flex space-x-2">
                            <button
                                class="w-12 space-y-2 rounded-lg border border-gray-500 px-4 py-2 text-gray-300">
                            </button>
                            <input type="text" wire:model="serves_people" class="w-24 rounded-md text-white bg-gray-500 items-center py-2" />
                            <button
                                class="w-12 rounded-lg border border-gray-500 px-4 py-2 text-gray-300">+</button>
                        </div>
                    </div>
                    <div class=" flex w-full items-center pr-4 justify-between ">
                        <h1 class=" text-white">Cook Time</h1>
                        <div class="flex space-x-2">
                            <button
                                class="w-12 rounded-lg border border-gray-500 px-4 py-2 text-gray-300">-</button>
                            <input type="text" wire:model="cooking_time" class="w-24 rounded-md text-white bg-gray-600 py-2 items-center" />
                            <button
                                class="w-12 rounded-lg border border-gray-500 px-4 py-2 text-gray-300">+</button>
                        </div>
                    </div>
                    <div class="flex w-full pr-4 items-center justify-between">
                        <h1 class="text-white">Prep Time</h1>
                        <div class="flex space-x-2">
                            <button
                                class="w-12 rounded-lg  border border-gray-500 px-4 py-2 text-gray-300">-</button>
                            <input type="text" wire:model="preparing_time" class="w-24 rounded-md text-white bg-gray-600 py-2 items-center" />
                            <button
                                class="w-12 rounded-lg  border border-gray-500 px-4 py-2 text-gray-300">+</button>
                        </div>
                    </div>
                    <div class=" w-full  items-center justify-between">
                        <h1 class="text-base text-white py-3">Recipe Cusine/Category</h1>
                        <select  wire:model="selectedCategory">
                            {{-- class="w-full rounded-md bg-gray-600 py-2 px-2 text-white placeholder:text-m placeholder:text-center" --}}
                             @foreach($category as $category)
                            <option value = {{$category->id}}>{{$category}} </option>
                            @endforeach
                    </select>
                            <input type="text" wire:model="cuisine_id"
                            class="w-full rounded-md bg-gray-600 py-2 px-2 text-white placeholder:text-m placeholder:text-center"
                            placeholder="Eg: Dessert or sweet" />
                    </div>
                    <div class=" w-full  items-center  justify-between">
                        <h1 class="text-base text-white py-3">Add Recipe Description</h1>
                        <textarea class="bg-black placeholder:text-m text-white w-full placeholder:text-start"wire:model="description" placeholder="Max 700 characters"></textarea>
                    </div>
                </section>
                <section class="w-1/2 bg-black flex justify-center items-center">
                    {{-- <div class=""> --}}
                         {{-- <div class="max-w-2xl rounded-lg "> --}}
                          <div class="ml-8 mb-8 mr-8">  
                            <h1 class=" text-white">Add Pictures</h1>
                            <label class="mb-2 text-gray-500">Min resolution 1080*1080 </label>
                            <main class="grid w-3/4 grid-cols-2 gap-2">
                              <div class="flex  items-center justify-center">
                                <label class="flex h-32 w-full flex-col items-center justify-center rounded-xl hover:bg-gray-100" style="background-color:#252525">
                                  <div class="flex flex-col items-center justify-center pt-7">
                                    <svg class="h-8 w-8 text-gray-300" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M14.4319 9.10585H1.31916C0.647134 9.10585 0.0898438 8.54856 0.0898438 7.87653C0.0898438 7.20451 0.647134 6.64722 1.31916 6.64722H14.4319C15.1039 6.64722 15.6612 7.20451 15.6612 7.87653C15.6612 8.54856 15.1039 9.10585 14.4319 9.10585Z" fill="#515050" />
                                      <path d="M7.87531 15.6612C7.20329 15.6612 6.646 15.1039 6.646 14.4319V1.31916C6.646 0.647134 7.20329 0.0898438 7.87531 0.0898438C8.54734 0.0898438 9.10463 0.647134 9.10463 1.31916V14.4319C9.10463 15.1039 8.54734 15.6612 7.87531 15.6612Z" fill="#515050" />
                                    </svg>
                                  </div>
                                  <input type="file" class="opacity-0" />
                                </label>
                              </div>
                              <div class="flex w-full items-center justify-center">
                                <label class="flex h-32 w-full flex-col items-center justify-center rounded-xl hover:bg-gray-100" style="background-color:#252525">
                                  <div class="flex flex-col items-center justify-center pt-7">
                                    <svg class="h-8 w-8 text-gray-300" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M14.4319 9.10585H1.31916C0.647134 9.10585 0.0898438 8.54856 0.0898438 7.87653C0.0898438 7.20451 0.647134 6.64722 1.31916 6.64722H14.4319C15.1039 6.64722 15.6612 7.20451 15.6612 7.87653C15.6612 8.54856 15.1039 9.10585 14.4319 9.10585Z" fill="#515050" />
                                      <path d="M7.87531 15.6612C7.20329 15.6612 6.646 15.1039 6.646 14.4319V1.31916C6.646 0.647134 7.20329 0.0898438 7.87531 0.0898438C8.54734 0.0898438 9.10463 0.647134 9.10463 1.31916V14.4319C9.10463 15.1039 8.54734 15.6612 7.87531 15.6612Z" fill="#515050" />
                                    </svg>
                                  </div>
                                  <input type="file" class="opacity-0" />
                                </label>
                              </div>
                              <div class="flex w-full items-center justify-center">
                                <label class="flex h-32 w-full flex-col items-center justify-center rounded-xl hover:bg-gray-100" style="background-color:#252525">
                                  <div class="flex flex-col items-center justify-center pt-7">
                                    <svg class="h-8 w-8 text-gray-300" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M14.4319 9.10585H1.31916C0.647134 9.10585 0.0898438 8.54856 0.0898438 7.87653C0.0898438 7.20451 0.647134 6.64722 1.31916 6.64722H14.4319C15.1039 6.64722 15.6612 7.20451 15.6612 7.87653C15.6612 8.54856 15.1039 9.10585 14.4319 9.10585Z" fill="#515050" />
                                      <path d="M7.87531 15.6612C7.20329 15.6612 6.646 15.1039 6.646 14.4319V1.31916C6.646 0.647134 7.20329 0.0898438 7.87531 0.0898438C8.54734 0.0898438 9.10463 0.647134 9.10463 1.31916V14.4319C9.10463 15.1039 8.54734 15.6612 7.87531 15.6612Z" fill="#515050" />
                                    </svg>
                                  </div>
                                  <input type="file" class="opacity-0" />
                                </label>
                              </div>
                              <div class="flex w-full items-center justify-center">
                                <label class="flex h-32 w-full flex-col items-center justify-center rounded-xl hover:bg-gray-100" style="background-color:#252525">
                                  <div class="flex flex-col items-center justify-center pt-7">
                                    <svg class="h-8 w-8 text-gray-300" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M14.4319 9.10585H1.31916C0.647134 9.10585 0.0898438 8.54856 0.0898438 7.87653C0.0898438 7.20451 0.647134 6.64722 1.31916 6.64722H14.4319C15.1039 6.64722 15.6612 7.20451 15.6612 7.87653C15.6612 8.54856 15.1039 9.10585 14.4319 9.10585Z" fill="#515050" />
                                      <path d="M7.87531 15.6612C7.20329 15.6612 6.646 15.1039 6.646 14.4319V1.31916C6.646 0.647134 7.20329 0.0898438 7.87531 0.0898438C8.54734 0.0898438 9.10463 0.647134 9.10463 1.31916V14.4319C9.10463 15.1039 8.54734 15.6612 7.87531 15.6612Z" fill="#515050" />
                                    </svg>
                                  </div>
                                  <input type="file" class="opacity-0" />
                                </label>
                              </div>
                            </main>
                            </div> 
                        {{-- </div>  --}}
                      {{-- </div> --}}
                      
                </section> 
            </div>
        </main>
    </section>
</main>
<div class="w-full flex px-20 justify-between">
    {{-- <div class="flex items-center">
        <button class="bg-gray-400 w-40 border px-4 py-1.5 rounded-lg text-white">Save to Drafts</button>
    </div> --}}
        <div class="w-full flex flex-row justify-end py-5 space-x-4">
            <a href="/HomePage"
                class="bg-transparent text-white rounded lg:text-lg text-base focus:outline-none">
                <i class="fas fa-angle-left text-white mt-1 mr-1"></i>Previous</a>
                <button
                    class="bg-red-600 text-white w-30 py-2 flex justify-center item-center rounded-md" wire:click="firstStepSubmit">Next,Ingredients
                    <i class="fas fa-angle-right text-white mt-1 ml-1"></i></button>
        </div>
</div>
<!--End Question 01 -->
<!--Start Question 02-->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="w-full py-10">
            <div class="flex w-full justify-center">
                <img src="images\logo 1.png" alt="logo" class="w-52 h-48">
            </div>
            <div class="w-full mx-auto  py-4 rounded-xl shadow-lg shadow-blue-500/50 ">
                <div class="w-1/2 mx-auto py-10 flex flex-col ">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Welcome to Recip<span class="text-red-600">eat! ,</span> {{auth()->user()->name}}</h1>
                        <p class="text-lg text-gray-100 mt-4">Step 2 <span class="text-Montserrat opacity-50">of 4</span></p>
                        <div class="h-0.5 mt-4 w-11/12 bg-gray-500 rounded-full">
                            <div class="w-1/2 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-base text-manrope text-gray-300">We would like to improve your cooking experience. This will take less than a minute</h1>

                        <div class="mt-4 w-full flex flex justify-center items-center py-2 space-x-6 form-group">
                            <div class="w-1/2 flex flex-col justify-center ">
                                <label class="text-gray-100 text-manrope mb-2">What’s your current designation?</label>
                                <input type="text" wire:model="designation" placeholder="What’s your Name?"
                                class="w-full py-2.5 mx-auto border-2 rounded-xl bg-white text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope  border-gray-400  focus:outline-none px-4"
                                autocomplete required />
                            @error('designation')
                                <span class="error text-red-500 text-base pl-1 py-2 font-bold text-manrope tracking-wider"><i
                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Designation Required</span>
                            @enderror
                            </div>
                            <div class="w-1/2 flex flex-col justify-center ">
                                <label class="text-gray-100 text-manrope mb-2">Where do you work currently?</label>
                                <input type="text" wire:model="company" placeholder="Eg; Sous Chef"
                                class="w-full py-2.5 mx-auto border-2 rounded-xl bg-white text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope  border-gray-400 focus:outline-none px-4"
                                autocomplete required />
                            @error('company')
                                <span class="error text-red-500 text-base pl-1 py-2 font-bold text-manrope tracking-wider"><i
                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                        Company Required</span>
                            @enderror
                            </div>
                        </div>

                        <div class="w-full mx-auto py-3 text-manrope" >
                            <h1 class="text-white py-4 text-lg">Years of Experience</h1>
                            <div class="flex space-x-6 text-white text-montserrat justify-between">

                                <input class="hidden" id="lessThanOneYear"  wire:model="experience" value="Less than 1 year" type="radio" checked />
                                <label class="flex justify-center items-center   border rounded-md p-2 " for="lessThanOneYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2 "></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">Less than 1 year</span>
                                </label>
                                <input class="hidden" id="oneToThreeYear"  wire:model="experience" value="1-3 years"  type="radio" />
                                <label class="flex justify-center items-center   border rounded-md p-2 " for="oneToThreeYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">1-3 years</span>
                                </label>

                                <input class="hidden" id="threeToFiveYear"  wire:model="experience" value="3-5 years"  type="radio" />
                                <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="threeToFiveYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">3-5 years</span>
                                </label>

                                <input class="hidden" id="fiveToSevenYear"  wire:model="experience" value="5-7 years"  type="radio" />
                                <label class="flex justify-center items-center  border rounded-md p-2 " for="fiveToSevenYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">5-7 years</span>
                                </label>

                                <input class="hidden" id="sevenPulseYear"  wire:model="experience" value="7+ Years" type="radio" />
                                <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="sevenPulseYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">7+ Years</span>
                                </label>

                            </div>
                        </div>

                        <div class="w-full mx-auto flex justify-end py-3 space-x-10">
                            <button class="text-gray-100 flex items-center text-lg focus:outline-none focus:ring-0" wire:click="back(1)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.575 17.225C12.7333 17.225 12.8916 17.1667 13.0166 17.0417C13.2583 16.8 13.2583 16.4 13.0166 16.1583L7.58329 10.725C7.18329 10.325 7.18329 9.67502 7.58329 9.27502L13.0166 3.84168C13.2583 3.60002 13.2583 3.20002 13.0166 2.95835C12.775 2.71668 12.375 2.71668 12.1333 2.95835L6.69996 8.39168C6.27496 8.81668 6.03329 9.39168 6.03329 10C6.03329 10.6084 6.26663 11.1834 6.69996 11.6084L12.1333 17.0417C12.2583 17.1584 12.4166 17.225 12.575 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                                    <span>Previous</span>
                                </button>
                            <button 
                                class="flex items-center space-x-3 py-2 px-3 text-white rounded bg-red-600  hover:bg-red-700 text-lg focus:outline-none focus:border-transparent shadow-lg"
                                wire:click="secondStepSubmit">Next, Skills <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.42504 17.225C7.26671 17.225 7.10837 17.1667 6.98337 17.0417C6.74171 16.8 6.74171 16.4 6.98337 16.1583L12.4167 10.725C12.8167 10.325 12.8167 9.67502 12.4167 9.27502L6.98337 3.84168C6.74171 3.60002 6.74171 3.20002 6.98337 2.95835C7.22504 2.71668 7.62504 2.71668 7.86671 2.95835L13.3 8.39168C13.725 8.81668 13.9667 9.39168 13.9667 10C13.9667 10.6084 13.7334 11.1834 13.3 11.6084L7.86671 17.0417C7.74171 17.1584 7.58337 17.225 7.42504 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                                
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Question 02 -->
    <!--Start Question 03 -->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="w-full py-10">
            <div class="flex w-full justify-center">
                <img src="images\logo 1.png" alt="logo" class="w-52 h-48">
            </div>
            <div class="w-full mx-auto  py-4 rounded-xl shadow-lg shadow-blue-500/50 ">
                <div class="w-1/2 mx-auto py-10 flex flex-col ">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Hey Chef,Welcome to Recip<span class="text-red-600">eat!</span></h1>
                        <p class="text-lg text-gray-100 mt-4">Step 3 <span class="text-Montserrat opacity-50">of 4</span></p>
                        <div class="h-0.5 mt-4 w-11/12 bg-gray-500 rounded-full">
                            <div class="w-1/2 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-base text-manrope text-gray-300">We would like to improve your cooking experience. This will take less than a minute</h1>

                        <div class="mt-4 w-full flex flex justify-center items-center py-2 space-x-6 form-group">
                            <div class="w-1/2 flex flex-col justify-center ">
                                <label class="text-gray-100 text-manrope mb-2">Select your specialized culinary skills</label>
                                <select wire:model="culinary_skills" ="culinary_skills"
                                placeholder="Eg.Baking"
                                class="w-full py-2.5 mx-auto border-2 rounded-xl bg-white text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope  border-gray-400  focus:outline-none px-4"
                                autocomplete required >
                                <option>Baking</option>
                                <option>Grilling</option>
                                <option>Nutrician</option>
                            </select>
                            @error('culinary_skills')
                                <span class="error text-red-500 text-base pl-1 py-2 font-bold text-manrope tracking-wider"><i
                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                         skills Required</span>
                            @enderror
                            </div>
                        </div>
                        <div class="w-full mx-auto flex justify-end py-3 space-x-10">
                            <button class="text-gray-100 flex items-center text-lg focus:outline-none focus:ring-0" wire:click="back(2)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.575 17.225C12.7333 17.225 12.8916 17.1667 13.0166 17.0417C13.2583 16.8 13.2583 16.4 13.0166 16.1583L7.58329 10.725C7.18329 10.325 7.18329 9.67502 7.58329 9.27502L13.0166 3.84168C13.2583 3.60002 13.2583 3.20002 13.0166 2.95835C12.775 2.71668 12.375 2.71668 12.1333 2.95835L6.69996 8.39168C6.27496 8.81668 6.03329 9.39168 6.03329 10C6.03329 10.6084 6.26663 11.1834 6.69996 11.6084L12.1333 17.0417C12.2583 17.1584 12.4166 17.225 12.575 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                                    <span>Previous</span>
                                </button>
                            <button 
                                class="flex items-center space-x-3 py-2 px-3 text-white rounded bg-red-600  hover:bg-red-700 text-lg focus:outline-none focus:border-transparent shadow-lg"
                                wire:click="thirdStepSubmit">Next, Topics <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.42504 17.225C7.26671 17.225 7.10837 17.1667 6.98337 17.0417C6.74171 16.8 6.74171 16.4 6.98337 16.1583L12.4167 10.725C12.8167 10.325 12.8167 9.67502 12.4167 9.27502L6.98337 3.84168C6.74171 3.60002 6.74171 3.20002 6.98337 2.95835C7.22504 2.71668 7.62504 2.71668 7.86671 2.95835L13.3 8.39168C13.725 8.81668 13.9667 9.39168 13.9667 10C13.9667 10.6084 13.7334 11.1834 13.3 11.6084L7.86671 17.0417C7.74171 17.1584 7.58337 17.225 7.42504 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Question 03 -->
    <!--Start Question 04 -->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
        <div class="w-full py-10">
            <div class="flex w-full justify-center">
                <img src="images\logo 1.png" alt="logo" class="w-52 h-48">
            </div>
            <div class="w-full mx-auto  py-4 rounded-xl shadow-lg shadow-blue-500/50 ">
                <div class="w-1/2 mx-auto py-10 flex flex-col ">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Pick topics that interests you </h1>
                        <p class="text-lg text-gray-100 mt-4">Final Step </p>
                        <div class="h-0.5 mt-4 w-11/12 bg-gray-500 rounded-full">
                            <div class="w-1/2 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-base text-manrope text-gray-300">Please select a minimum 3 topics</h1>
                        {{-- <div class="w-full mx-auto py-5"> --}}
                            <div class="w-full mx-auto py-3">
                                <h1 class="text-white py-4" style="font-family: 'Manrope', sans-serif;">Diets</h1>
                                <div class="flex space-x-5 text-white ">
                                    <input class="hidden " id="Vegetarian" name="diets" type="radio" value="Vegetarian" {{{ (isset($product->diets) && $product->diets == 'Vegetarian') ? "checked" : "" }}} checked />
                                    <label class="flex justify-center items-center   border rounded-md p-2 " for="Vegetarian">
                                        <span class='hidden icon bg-white'><i
                                                class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2 "></i></span>
            
                                        <span class="text-uzs text-base font-Rubik font-semibold">Vegetarian</span>
                                    </label>
            
                                    <input class="hidden" id="Vegan" name="diets" type="radio" value="Vegan"
                                     {{-- {{{ (isset($product->diets) && $product->diets == 'Vegan') ? "checked" : "" }}}   --}}
                                    />
                                    <label class="flex justify-center items-center   border rounded-md p-2 " for="Vegan">
                                        <span class='hidden icon bg-white'><i
                                                class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>
            
                                        <span class="text-uzs text-base font-Rubik font-semibold">Vegan</span>
                                    </label>
            
                                    <input class="hidden" id="NonVeg" name="diets" type="radio" value="Non Veg" {{{ (isset($product->diets) && $product->diets == 'Non Veg') ? "checked" : "" }}} />
                                    <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="NonVeg">
                                        <span class='hidden icon bg-white'><i
                                                class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>
            
                                        <span class="text-uzs text-base font-Rubik font-semibold">Non Veg</span>
                                    </label>
            
                                    <input class="hidden" id="Paleo" name="diets" type="radio" value="Paleo" 
                                    {{-- {{{ (isset($product->diets) && $product->diets == 'Paleo') ? "checked" : "" }}}  --}}
                                    />
                                    <label class="flex justify-center items-center  border rounded-md p-2 " for="Paleo">
                                        <span class='hidden icon bg-white'><i
                                                class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>
            
                                        <span class="text-uzs text-base font-Rubik font-semibold">Paleo</span>
                                    </label>
            
                                    <input class="hidden" id="Ketogenic" name="diets" type="radio" value="Ketogenic" {{{ (isset($product->diets) && $product->diets == 'Ketogenic') ? "checked" : "" }}} />
                                    <label class="flex justify-center items-center  border rounded-md p-2 " for="Ketogenic">
                                        <span class='hidden icon bg-white'><i
                                                class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>
            
                                        <span class="text-uzs text-base font-Rubik font-semibold">Ketogenic</span>
                                    </label>
            
                                    <input class="hidden" id="Pescatarian" name="diets" type="radio" value="Pescatarian" 
                                    {{-- {{{ (isset($product->diets) && $product->diets == 'Pescatarian') ? "checked" : "" }}}  --}}
                                    />
                                    <label class="flex justify-center items-center  border rounded-md p-2 " for="Pescatarian">
                                        <span class='hidden icon bg-white'><i
                                                class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>
            
                                        <span class="text-uzs text-base font-Rubik font-semibold">Pescatarian</span>
                                    </label>
            
                                </div>
                            </div>
            
                            <div class="w-full mx-auto py-3 border-r-2 border-gray-500">
                                <h1 class="text-white py-4" style="font-family: 'Manrope', sans-serif;">Cuisines</h1>
                                <div class="flex space-x-8 text-white" id="items-container">
            
                                    <input id="seats" name="cusinies" class="hidden text-gray-600" value="">
                                    <br>
                                    <br>
            
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="Chinese" id="Chinese">
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="Italian" id="Italian">
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="Arabic" id="Arabic">
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="Indian" id="Indian">
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="American" id="American">
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="Asian" id="Asian">
                                    <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                                        value="Mexian" id="Mexian">
                                                                  </div>
                            </div>
                        {{-- </div> --}}
                        {{-- <div class="mt-4 w-full flex flex justify-center items-center py-2 space-x-6 form-group">
                            <div class="w-1/2 flex flex-col justify-center ">
                                <label class="text-gray-100 text-manrope mb-2">Select your specialized culinary skills</label>
                                <input type="text" wire:model="cooking_style"data-role="tagsinput" name="tags"
                                placeholder="Eg.Baking"
                                class="w-full py-2.5 mx-auto border-2 rounded-xl bg-white text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope  border-gray-400  focus:outline-none px-4"
                                autocomplete required />
                            @error('culinary')
                                <span class="error text-red-500 text-base pl-1 py-2 font-bold text-manrope tracking-wider"><i
                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                         Required</span>
                            @enderror
                            </div>
                        </div> --}}
                        <div class="w-full mx-auto flex justify-end py-3 space-x-10">
                            <button class="text-gray-100 flex items-center text-lg focus:outline-none focus:ring-0" wire:click="back(2)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.575 17.225C12.7333 17.225 12.8916 17.1667 13.0166 17.0417C13.2583 16.8 13.2583 16.4 13.0166 16.1583L7.58329 10.725C7.18329 10.325 7.18329 9.67502 7.58329 9.27502L13.0166 3.84168C13.2583 3.60002 13.2583 3.20002 13.0166 2.95835C12.775 2.71668 12.375 2.71668 12.1333 2.95835L6.69996 8.39168C6.27496 8.81668 6.03329 9.39168 6.03329 10C6.03329 10.6084 6.26663 11.1834 6.69996 11.6084L12.1333 17.0417C12.2583 17.1584 12.4166 17.225 12.575 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                                    <span>Previous</span>
                                </button>
                            <button 
                                class="flex items-center space-x-3 py-2 px-3 text-white rounded bg-red-600  hover:bg-red-700 text-lg focus:outline-none focus:border-transparent shadow-lg"
                                wire:click="fourthStepSubmit">Finish <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.42504 17.225C7.26671 17.225 7.10837 17.1667 6.98337 17.0417C6.74171 16.8 6.74171 16.4 6.98337 16.1583L12.4167 10.725C12.8167 10.325 12.8167 9.67502 12.4167 9.27502L6.98337 3.84168C6.74171 3.60002 6.74171 3.20002 6.98337 2.95835C7.22504 2.71668 7.62504 2.71668 7.86671 2.95835L13.3 8.39168C13.725 8.81668 13.9667 9.39168 13.9667 10C13.9667 10.6084 13.7334 11.1834 13.3 11.6084L7.86671 17.0417C7.74171 17.1584 7.58337 17.225 7.42504 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Question 04 -->
    <!--Start Question 05-->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
        <div class="w-full py-10">
            <div class="flex w-full justify-center">
                <img src="images\logo 1.png" alt="logo" class="w-52 h-48">
            </div>
        <div class="w-1/2  mx-auto">
            <a href="/mainDashboard" class="text-gray-100 font-semibold">
                <i class="fas fa-angle-left text-white font-bold"></i>Back Home
            </a>
        </div>

        <h1 class="text-center py-6 text-white text-4xl font-bold" style="font-family: 'Manrope', sans-serif;">Create
            your Recip<span class="text-red-600">eat</span> account</h1>
        <div class="w-1/2 mx-auto  py-5">
            <div class="w-full h-1 bg-gray-400 rounded-xl">
                <div class="w-full h-full bg-white rounded-xl"></div>
            </div>

            <div class="w-7/12 mx-auto py-5" style="font-family: 'Manrope', sans-serif;">
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
            </div>
    </div>
 
    <!--End Question 05 -->
    <script>
        const container = document.querySelector('#items-container');

        let startY;
        let startX;
        let scrollLeft;
        let scrollTop;
        let isDown;

        container.addEventListener('mousedown', e => mouseIsDown(e));
        container.addEventListener('mouseup', e => mouseUp(e))
        container.addEventListener('mouseleave', e => mouseLeave(e));
        container.addEventListener('mousemove', e => mouseMove(e));

        function mouseIsDown(e) {
            isDown = true;
            startY = e.pageY - container.offsetTop;
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
            scrollTop = container.scrollTop;
        }

        function mouseUp(e) {
            isDown = false;
        }

        function mouseLeave(e) {
            isDown = false;
        }

        function mouseMove(e) {
            if (isDown) {
                e.preventDefault();
                //Move vertcally
                const y = e.pageY - container.offsetTop;
                const walkY = y - startY;
                container.scrollTop = scrollTop - walkY;

                //Move Horizontally
                const x = e.pageX - container.offsetLeft;
                const walkX = x - startX;
                container.scrollLeft = scrollLeft - walkX;

            }
        }
    </script>

    <script>
        $(".but").click(function() {


            // Close all open windows
            $(".content").stop().slideUp(300);
            // Toggle this window open/close
            $(this).next(".content").stop().slideToggle(300);
            //hitter test//
            $(".hitter").show()
        });

        $(".hitter").click(function() {
            // Close all open windows
            $(".content").stop().slideUp(300);
        });
    </script>

    <script>
        //remove seat from list
        function removeSeat(seatListElm, seatValue) {
            var arr = seatListElm.value.split(',');

            var p = arr.indexOf(seatValue);
            if (p != -1) {
                arr.splice(p, 1);
                seatListElm.value = arr.join(',');
            }
        }

        function mapSeats() {
            return document.getElementsByClassName("seat");
        }

        function findIndex(object, value) {
            for (i = 0; i < object.length; i++) {
                if (object[i].value == value)
                    return i;
            }
            return null;
        }

        function isSelected(element) {
            if ((" " + element.className + " ").replace(/[\n\t]/g, " ").indexOf(" selected ") > -1)
                return true;
            else
                return false;
        }

        //add seat to list
        function addSeat(seatListElm, seatValue) {
            var arr = seatListElm.value.split(',');
            var len = arr.length;
//   if(len>2  ){
//                 document.getElementById('text').style.color='white';
//         }
//   else{
//             document.getElementById('text').style.color='red';
            if (arr.join() == '') {
                arr = [];

            }
            var p = arr.indexOf(seatValue);
            if (p == -1) {
                arr.push(seatValue); //append
                arr = arr.sort(); //sort list
                seatListElm.value = arr.join(',');
            }

        // }


        }

        var start = end = -1;

        //called everytime a seat is clicked
        function seatClick() {

            if (this.classList.contains('reserved') == false) {


                if (start == -1)
                    start = this.value;
                else if (end == -1)
                    end = this.value;

                if (start != -1 && end != -1) {
                    console.log(start, end);

                    seats = mapSeats();

                    console.log(seats);

                    indexS = findIndex(seats, start);
                    indexE = findIndex(seats, end);

                    console.log(indexS, indexE);

                    if (indexE >= indexS) {
                        for (i = indexS + 1; i < indexE; i++) {
                            if (!isSelected(seats[i])) {
                                console.log("A");
                                addSeat(document.getElementById('seats'), seats[i].value);
                                seats[i].classList.toggle('selected');
                            } else {
                                console.log("B");
                                removeSeat(document.getElementById('seats'), seats[i].value);
                                seats[i].classList.toggle('selected');
                            }
                        }
                    }
                    /*else{
                                    for(i= indexE ; i> indexS+1  ;i--){
                                        if (!isSelected(seats[i])) {
                                            console.log("C");
                                            addSeat(document.getElementById('seats'), seats[i].value);
                                            seats[i].classList.toggle('selected');
                                        } else {
                                            console.log("D");
                                            removeSeat(document.getElementById('seats'), seats[i].value);
                                            seats[i].classList.toggle('selected');
                                        }
                                    }
                                }*/
                    start = end = -1;
                }

                if (this.classList.toggle('selected')) {
                    addSeat(document.getElementById('seats'), this.value);
                } else {
                    removeSeat(document.getElementById('seats'), this.value);
                }

            } else {
                alert("This seat is reserved!\nPlease select another seat");
                removeSeat(document.getElementById('seats'), this.value);
                return;
            }
        }
        //adding event click to seats
        var elms = document.getElementsByClassName('seat');
        for (var i = 0, l = elms.length; i < l; i++) {
            elms[i].onclick = seatClick;
        }

        /* PS:
         I used this way to keep this simple without the crossbrowser handling,
         but maybe you want to add events by adding/attaching event listener
        */
    </script>
</main>
<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
