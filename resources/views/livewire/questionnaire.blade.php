<div>
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif

    <!-- Question 01 -->
    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
            <div class="flex flex-col border-2 lg:mt-40 mt-20 p-2">
                <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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
        <div class="md:w-8/12 lg:w-9/12 w-full px-5 flex flex-col justify-center items-center">
            <div for="name"
                class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">How
                should we call you ?
            </div>
            <div class="form-group">
                <input type="text" wire:model="name" placeholder="{{ Auth::user()->name }}"
                    class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none "
                    autocomplete required>
                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-md
              px-6 py-2 mt-8 focus:outline-none" wire:click="firstStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 02 -->
    <div class="row w-full overflow-hidden h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
            <div class="flex px-6 py-2 mt-2 ">
                <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                " wire:click="back(1)">Back</button>
            </div>
            <div class="flex flex-col lg:mt-40 mt-20 p-2">
                <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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
        <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
            <div for="name"
                class="md:text-center mb-10 p-2  text-center lg:text-4xl text-black font-bold text-xl  font-serif italic">How
                do
                you I dentify
                yourself ?
            </div>
            <div class="form-group lg:text-xl md:text-lg w-full">
                <div class="flex md:flex-row flex-col md:space-x-4 px-5 justify-center">
                    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                        <div class="p-2 sm:w-1/2 w-full">
                          <div class="bg-gray-100 rounded flex p-2 h-full items-center">
                            <label class="radio-inline"><input type="radio" wire:model="gender" value="Male"
                                          {{{ $gender == 'Male' ? "checked" : "" }}}>&nbsp; <i class="fas fa-male"></i> &nbsp; Male
                                  </label>

                          </div>
                        </div>
                        <div class="p-2 sm:w-1/2 w-full">
                          <div class="bg-gray-100 rounded flex p-2 h-full items-center">
                            <label class="radio-inline"><input type="radio" wire:model="gender" value="Fe-Male"
                                          {{{ $gender == 'Fe-Male' ? "checked" : "" }}}>&nbsp; <i class="fas fa-female"></i> &nbsp;
                                      Fe-Male</label>
                          </div>
                        </div>
                        <div class="p-2 sm:w-1/2 w-full">
                          <div class="bg-gray-100 rounded flex p-2 h-full items-center">
                            <label class="radio-inline"><input type="radio" wire:model="gender" value="Other"
                                          {{{ $gender == 'Other' ? "checked" : "" }}}>&nbsp; <i class="fas fa-mars"></i> &nbsp; Other
                                  </label>
                          </div>
                        </div>
                      </div>
            </div>

                @error('gender') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex justify-center items-center">
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md
              px-6 py-2 focus:outline-none" wire:click="secondStepSubmit">Next</button>
            </div>
        </div>
    </div>

    <!-- Question 03 -->
    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
            <div class="flex px-6 py-2 mt-2 ">
                <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                " wire:click="back(2)">Back</button>
            </div>
            <div class="flex flex-col lg:mt-40 mt-20 p-2">
                <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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
        <div class="md:w-8/12 lg:9/12 w-full px-5 flex flex-col justify-center items-center">
            <div for="name"
            class="md:text-center mb-10 text-center lg:text-3xl text-black font-bold text-xl leading-relaxed font-serif italic ">For your
                monthly dose of Mouth-watering content ?</div>
            <div class="form-group">
                <input type="email" wire:model="mail" placeholder="{{ Auth::user()->email }}" required
                    class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none "
                    autocomplete required>
                @error('mail') <span class="error text-red-500">{{ $message }}</span> @enderror

            </div>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl
            px-6 py-2 focus:outline-none" wire:click="thirdStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 04 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(3)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

                <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                    <div for="cookinglevel"
                        class=" mb-10 p-2  text-center lg:text-3xl text-black font-bold text-lg  font-serif italic">If
                        you have to choose a level for your cooking ?</div>
                    <div class="form-group lg:text-xl md:text-lg">
                        <div class="flex lg:flex-row flex-col justify-center lg:space-x-4 lg:space-y-0 md:space-y-4 space-y-4">
                            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                                <div class="p-2 sm:w-1/2 w-full">
                                  <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                     <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="try"
                                                          {{{ $cookinglevel == 'try' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-pawn"></i> &nbsp;
                                                      I Can Try
                                                  </label>

                                  </div>
                                </div>
                                <div class="p-2 sm:w-1/2 w-full">
                                  <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                    <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="cook"
                                                          {{{ $cookinglevel == 'cook' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-rook"></i> &nbsp;
                                                      I Can Cook</label>
                                  </div>
                                </div>
                                <div class="p-2  w-full">
                                  <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                                            <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="great"
                                                          {{{ $cookinglevel == 'great' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-queen"></i>
                                                      &nbsp; Your Kidding? I am Great
                                                  </label>
                                  </div>
                                </div>
                              </div>

                    </div>
                        @error('cookinglevel') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md
                      px-6 py-2 focus:outline-none" wire:click="fourthStepSubmit">Next</button>
                </div>
            </div>



    <!-- Question 05 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
                <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(4)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

                <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                    <div for="allergies"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">Do
                        you have any specific allergies ?
                    </div>
                    <div class="form-group">
                        <input type="text" wire:model="allergies" placeholder="Specific Allergies"
                            class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none "
                            autocomplete required>
                         @error('allergies') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="fifthStepSubmit">Next</button>
                </div>
    </div>

    <!-- Question 06 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(5)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

                <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                       <div for="lifestyle"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">Do
                        you follow a particular lifestyle ?
                    </div>
                    <div class="form-group lg:text-xl md:text-lg">
                        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Vegan"
                                                      {{{ $lifestyle == 'Vegan' ? "checked" : "" }}}>&nbsp; <i class="fas fa-pizza-slice"></i> &nbsp;
                                                  Vegan
                                              </label>

                              </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Keto"
                                                      {{{ $lifestyle == 'Keto' ? "checked" : "" }}}>&nbsp; <i class="fas fa-seedling"></i> &nbsp;
                                                  Keto</label>
                              </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                                         <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Pescetarian"
                                                      {{{ $lifestyle == 'Pescetarian' ? "checked" : "" }}}>&nbsp; <i class="fas fa-fish"></i>
                                                  &nbsp; Pescetarian
                                              </label>
                              </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                                         <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Vegetarian"
                                                      {{{ $lifestyle == 'Vegetarian' ? "checked" : "" }}}>&nbsp; <i class="fas fa-carrot"></i> &nbsp;
                                                  Vegetarian</label>
                              </div>
                            </div>
                            <input type="text" wire:model="lifestyle" placeholder="Lifestyle"
                            class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none "
                            autocomplete required>
                          </div>

                        @error('lifestyle') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="sixthStepSubmit">Next</button>
                </div>
            </div>





    <!-- Question 07 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(6)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

                <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                       <div for="ingredient"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic"> Do
                        you have any ingredients that you would like to avoid ?
                        </div>
                    <div class="form-group lg:text-xl md:text-lg">
                        <input type="text" wire:model="ingredient" placeholder="You Like to Avoid Ingredient"
                            class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none"
                            autocomplete required>
                        @error('ingredient') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="seventhStepSubmit">Next</button>
                </div>
     </div>




    <!-- Question 08 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 8 ? 'display-none' : '' }}" id="step-8">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(7)">Back</button>
                </div>
                <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

        <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                <div for="ingredient"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  What are your favourite cuisines ?
                </div>
                <div class="form-group lg:text-xl md:text-lg">
                        <input type="text" wire:model="pref_cuisine" placeholder="Favourite Cuisine"
                            class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none"
                            autocomplete required>
                        @error('pref_cuisine') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="eighthStepSubmit">Next
                </button>
        </div>
    </div>

    <!-- Question 09 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 9 ? 'display-none' : '' }}" id="step-9">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(8)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

            <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                   <div for="goals"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  If
                           you have to choose a level for your cooking ?
                   </div>
                    <div class="form-group lg:text-xl md:text-lg">

                            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                              <div class="p-1 sm:w-1/2 w-full">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                   <label class="radio-inline"><input type="radio" wire:model="goals" value="New Skill"
                                                    {{{ $goals == 'New Skill' ? "checked" : "" }}}>&nbsp; <i class="fas fa-book-reader"></i> &nbsp;
                                                    New Skill
                                                </label>

                                </div>
                              </div>
                              <div class="p-1 sm:w-1/2 w-full">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="goals" value="Experiment With Cuisine"
                                                    {{{ $goals == 'Experiment With Cuisine' ? "checked" : "" }}}>&nbsp; <i
                                                    class="fas fa-drumstick-bite"></i> &nbsp;
                                                Experiment With Cuisine</label>
                                </div>
                              </div>
                              <div class="p-1 sm:w-1/2 w-full">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="goals" value="Save Time"
                                                    {{{ $goals == 'Save Time' ? "checked" : "" }}}>&nbsp; <i class="fas fa-stopwatch"></i>
                                                &nbsp; Save Time
                                            </label>
                                </div>
                              </div>
                              <div class="p-1 sm:w-1/2 w-full">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                        <label class="radio-inline"><input type="radio" wire:model="goals" value="Save Money"
                                                    {{{ $goals == 'Save Money' ? "checked" : "" }}}>&nbsp; <i class="fas fa-hand-holding-usd"></i>
                                                &nbsp;
                                                Save Money
                                            </label>
                                </div>
                              </div>
                              <div class="p-1 sm:w-1/2 w-full">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                   <label class="radio-inline"><input type="radio" wire:model="goals" value=" Eat Healthy "
                                                    {{{ $goals == 'Eat Healthy' ? "checked" : "" }}}>&nbsp; <i class="fas fa-heartbeat"></i> &nbsp;
                                                Eat Healthy </label>
                                </div>
                              </div>
                              <div class="p-1 sm:w-1/2 w-full">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="goals" value="Dietary Goal"
                                                    {{{ $goals == 'Dietary Goal' ? "checked" : "" }}}>&nbsp; <i class="fas fa-apple-alt"></i>
                                                &nbsp; Dietary Goal
                                            </label>
                                </div>
                              </div>
                            </div>

                    @error('goals') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-3 focus:outline-none" wire:click="ninthStepSubmit">Next</button>
           </div>
     </div>




    <!-- Question 10 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 10 ? 'display-none' : '' }}" id="step-10">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(9)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

            <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                   <div for="serving_time"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  How
                    many people do you usually cook for ?
                   </div>
                    <div class="form-group lg:text-xl md:text-lg">
                        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="serving_time" value="01 - 10"
                                                  {{{ $serving_time == '01 - 10' ? "checked" : "" }}}>&nbsp; <i class="fas fa-user-alt"></i>
                                              &nbsp;
                                              01 - 10
                                          </label>

                              </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                <label class="radio-inline"><input type="radio" wire:model="serving_time" value="10 - 50"
                                                  {{{ $serving_time == '11 - 50' ? "checked" : "" }}}>&nbsp; <i
                                                  class="fas fa-user-friends"></i>&nbsp;
                                              11 - 50</label>
                              </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                                         <label class="radio-inline"><input type="radio" wire:model="serving_time" value="51 - 100"
                                                  {{{ $serving_time == '51 - 100' ? "checked" : "" }}}>&nbsp; <i class="fas fa-users"></i>
                                              &nbsp; 51 - 100
                                          </label>
                              </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                                        <label class="radio-inline"><input type="radio" wire:model="serving_time" value="101 - More"
                                                  {{{ $serving_time == '101 - More' ? "checked" : "" }}}>&nbsp; <i class="fas fa-users"></i>
                                              &nbsp; 101 - More
                                          </label>
                              </div>
                            </div>
                          </div>
                    @error('serving_time') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-md
                      px-6 py-2 mt-8 focus:outline-none" wire:click="tenthStepSubmit">Next</button>
           </div>
     </div>





    <!-- Question 11 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 11 ? 'display-none' : '' }}" id="step-11">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(10)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

            <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                   <div for="cho_cook"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  Which one would you rather cook ?
                   </div>
                    <div class="form-group lg:text-xl md:text-lg">
                    <input type="text" wire:model="cho_cook" placeholder="Rather Cook"
                        class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none"
                        autocomplete required>
                    @error('cho_cook') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="eleventhStepSubmit">Next</button>
           </div>
     </div>




    <!-- Question 12 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 12 ? 'display-none' : '' }}" id="step-12">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(11)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

            <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                   <div for="cho_cook"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  What is one ingredient you will never get tired ?
                   </div>
                    <div class="form-group lg:text-xl md:text-lg">
                   <input type="text" wire:model="fav_ingr" placeholder="Your Never get Tried Ingredient"
                        class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none"
                        autocomplete required>
                    @error('fav_ingr') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="twelfthStepSubmit">Next</button>
           </div>
     </div>





    <!-- Question 13 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 13 ? 'display-none' : '' }}" id="step-13">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(12)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

            <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                   <div for="level_spici"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  What is your preferred level of spiciness?
                   </div>
                    <div class="form-group lg:text-xl md:text-lg">
                   <input type="text" wire:model="level_spici" placeholder="Level of Spiciness"
                        class="w-full px-4 py-3 mb-2  text-xl mt-2 border-b-2 border-gray-500 text-center focus:border-b-2 focus:outline-none "
                        autocomplete required>
                    @error('level_spici') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-xl
                      px-6 py-2 mt-8 focus:outline-none" wire:click="thirteenthStepSubmit">Next</button>
           </div>
     </div>





    <!-- Question 14 -->

    <div class="row w-full -mx-2 h-screen setup-content {{ $currentStep != 14 ? 'display-none' : '' }}" id="step-14">
        <div class="md:w-4/12 lg:w-3/12 bg-gray-200  flex px-2 h-full md:block hidden">
                    <div class="flex px-6 py-2 mt-2 ">
                        <i class="las la-angle-left mt-1"></i>
                        <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none
                        " wire:click="back(13)">Back</button>
                    </div>
                    <div class="flex flex-col lg:mt-40 mt-20 p-2">
                        <h1 class="text-gray-900 text-center font-medium  lg:text-3xl text-xl mb-2 ">Cooks Love us!</h1>
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

            <div class="md:w-8/12 lg:9/12 w-full px-5  flex flex-col justify-center items-center">
                   <div for="time_spend"
                        class="md:text-center mb-10 text-center lg:text-4xl text-black font-bold text-2xl leading-relaxed font-serif italic">  How much time do you have to spare for each ?
                   </div>
                    <div class="form-group lg:text-xl md:text-lg">
                        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                            <div class="p-1 sm:w-2/4 w-full">
                              <div class="bg-gray-100 rounded flex p-2 h-full items-center">
                                 <label class="radio-inline"><input type="radio" wire:model="time_spend" value="30 Mins and below"
                                                {{{ $time_spend == '30 Mins and below' ? "checked" : "" }}}>&nbsp; <i
                                                class="fas fa-hourglass-start"></i>
                                            &nbsp;
                                            30 Mins and Below
                                        </label>

                              </div>
                            </div>
                            <div class="p-1 sm:w-1/2 w-full">
                              <div class="bg-gray-100 rounded flex p-2 h-full items-center">
                                <label class="radio-inline"><input type="radio" wire:model="time_spend" value="more than 1 hour"
                                                {{{ $time_spend == 'more than 1 hour' ? "checked" : "" }}}>&nbsp; <i
                                                class="fas fa-hourglass"></i> &nbsp;
                                            More than 1 Hour</label>
                              </div>
                            </div>

                          </div>
                    @error('time_spend') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-md
                      px-6 py-2 mt-8 focus:outline-none" wire:click="fourteenthStepSubmit">Next</button>
           </div>
     </div>

<!--End of the Questions-->
     <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 15 ? 'display-none' : '' }}" id="step-15" style="background-image:url(https://images.squarespace-cdn.com/content/v1/5f0c93dc1b1bc1564c698499/1623190785337-OUCJGE8KPPOAXQRHIQ6U/Campo+Website+Extended.jpg?format=2500w)">
            <div class="w-full flex flex-col justify-center px-20 items-start">
                   <h1
                    class="text-xl text-start md:text-3xl md:tracking-widest font-bold leading-tight mt-12 mb-4">
                    Hi {{ Auth::user()->name }}! Welcome to your Personal  </h1>
                    <h1 class="text-xl text-start md:text-3xl md:tracking-widest font-bold leading-tight  mb-10"><span class="text-3xl md:text-5xl text-red-600">Recip</span><span  class="text-3xl md:text-5xl text-black">eat</span> Account</h1>

                <a href="/" class="flex justify-start text-decoration-none">
                    <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-lg
                  px-6 py-2 mt-8" wire:click="submitForm">Go to Dashboard</button>
                </a>


           </div>
     </div>




</div>
