<div>
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif

    <!-- Question 01 -->

   <div class="row w-full flex h-screen setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="md:w-1/4 bg-gray-200 md:flex px-2 h-full hidden">
          <div class="flex flex-col border-2 lg:mt-40 mt-20 p-2">
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
                <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How should we call you ?</h4>
              </div>
              <div class="flex flex-col py-6 h-56  px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="name" placeholder="{{ Auth::user()->name }}" class=" w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="firstStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Question 02 -->

    <div class="row w-full flex h-screen setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
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
      </div>
    <!-- Question 03 -->

    <div class="row w-full flex h-screen setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="md:w-1/4 lg:w-3/12 bg-gray-200 px-2 h-full md:block hidden">
          <div class="flex px-6 py-2 mt-2">
            <i class="las la-angle-left mt-1"></i>
            <button type="submit" class="xl:ml-0 text-gray-800 font-semibold rounded-xl focus:outline-none" wire:click="back(2)">Back</button>
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
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">For your monthly dose of Mouth-watering content ?</h4>
              </div>
              <div class="flex flex-col py-6 h-56 px-8 space-y-5 bg-white rounded-b-2xl">
                <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                  <input type="text" wire:model="mail" placeholder="{{ Auth::user()->email }}" class="w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center" autocomplete required />
                  @error('mail') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="w-full flex justify-center">
                  <button type="button" class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg" wire:click="thirdStepSubmit">Hit me! To Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Question 04 -->
            <div class="row w-full flex h-screen setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
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
                                  <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="try" {{{ $cookinglevel == 'try' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-pawn"></i> &nbsp; I Can Try </label>
                                </div>
                              </div>
                              <div class="p-2 sm:w-1/2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="cook" {{{ $cookinglevel == 'cook' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-rook"></i> &nbsp; I Can Cook</label>
                                </div>
                              </div>
                              <div class="p-2 w-full font-medium">
                                <div class="bg-gray-100 rounded flex p-3 h-full items-center">
                                  <label class="radio-inline"
                                    ><input type="radio" wire:model="cookinglevel" value="great" {{{ $cookinglevel == 'great' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-queen"></i>
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
              </div>


    <!-- Question 05 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
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
      </div>
    <!-- Question 06 -->
            <div class="row w-full flex h-screen setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
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
              </div>


    <!-- Question 07 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7">
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
      </div>



    <!-- Question 08 -->
    <div class="row w-full flex h-screen setup-content {{ $currentStep != 8 ? 'display-none' : '' }}" id="step-8">
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
      </div>
    <!-- Question 09 -->

     <div class="row w-full flex h-screen setup-content {{ $currentStep != 9 ? 'display-none' : '' }}" id="step-9">
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
                          <label class=" w-full  radio-inline border-red-700 border-2 rounded-md p-2"><input type="radio" wire:model="goals" value=" Eat Healthy " {{{ $goals == 'Eat Healthy' ? "checked" : "" }}}>&nbsp; <i class="fas fa-heartbeat"></i> &nbsp; Eat Healthy </label>
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
      </div>


    <!-- Question 10 -->


     <div class="row w-full flex h-screen setup-content {{ $currentStep != 10 ? 'display-none' : '' }}" id="step-10">
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
      </div>



    <!-- Question 11 -->

     <div class="row w-full flex h-screen setup-content {{ $currentStep != 11 ? 'display-none' : '' }}" id="step-11">
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
                <h4 class="text-white text-center font-bold lg:text-xl md:text-xl text-lg">Which one would you rather cook ?</h4>
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
      </div>


    <!-- Question 12 -->

     <div class="row w-full flex h-screen setup-content {{ $currentStep != 12 ? 'display-none' : '' }}" id="step-12">
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
      </div>



    <!-- Question 13 -->
     <div class="row w-full flex h-screen setup-content {{ $currentStep != 13 ? 'display-none' : '' }}" id="step-13">
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
      </div>



    <!-- Question 14 -->


     <div class="row w-full flex h-screen setup-content {{ $currentStep != 14 ? 'display-none' : '' }}" id="step-14">
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
      </div>

<!--End of the Questions-->
     <div class="row w-full h-screen bg-cover bg-center setup-content {{ $currentStep != 15 ? 'display-none' : '' }}" id="step-15" style="background-image:url(https://images.squarespace-cdn.com/content/v1/5f0c93dc1b1bc1564c698499/1623190785337-OUCJGE8KPPOAXQRHIQ6U/Campo+Website+Extended.jpg?format=2500w)">
            <div class="w-full flex flex-col justify-center px-20 items-start">
                   <h1
                    class="text-xl text-start md:text-3xl md:tracking-widest font-bold leading-tight mt-12 mb-4">
                    Hi {{ Auth::user()->name }}! Welcome to your Personal  </h1>
                    <h1 class="text-xl text-start md:text-3xl md:tracking-widest font-bold leading-tight  mb-10"><span class="text-3xl md:text-5xl text-red-600">Recip</span><span  class="text-3xl md:text-5xl text-black">eat</span> Account</h1>

                <a href="/welcome" class="flex justify-start text-decoration-none">
                    <button type="submit" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-lg
                  px-6 py-2 mt-8" wire:click="submitForm">Go to Dashboard</button>
                </a>


           </div>
     </div>
</div>
