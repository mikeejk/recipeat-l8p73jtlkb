<div>
    {{-- @if (!empty($successMsg))
        <div class="alert alert-success">
            {{ $successMsg }}
        </div>
    @endif


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
                <p class="text-center p-2 text-base">We rated 4.5 out of 5 stars because our users have so much success
                    finding recipes they love.</p>
            </div>
        </div>
        <div class="md:w-3/4 w-full bg-cover bg-no-repeat bg-white flex flex-col justify-center items-center"
            style="background-image:url(https://st4.depositphotos.com/9012638/40083/i/450/depositphotos_400838660-stock-photo-autumn-cooking-background-organic-autumn.jpg)">
            <div class="md:w-3/4 w-full flex lg:justify-start items-center h-auto p-4 justify-center">
                <div class="flex flex-col h-full md:w-3/4 w-full ml-3 shadow-xl">
                    <div
                        class="py-6 bg-gradient-to-tr from-red-900 to-red-600 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                        <h4 class="text-white text-center font-bold lg:text-2xl md:text-xl text-lg">How should we call
                            you ?</h4>
                    </div>
                    <div class="flex flex-col py-6 h-56  px-8 space-y-5 bg-white rounded-b-2xl">
                        <div class="w-full flex flex-col justify-center items-center pt-6 form-group">
                            <input type="text" wire:model="name" placeholder="{{ Auth::user()->name }}"
                                class=" w-1/2 py-3 border-b-2 rounded-md border-gray-800 focus:outline-none text-center"
                                autocomplete required />
                            @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full flex justify-center">
                            <button type="button"
                                class="md:w-1/2 lg:w-1/3 py-2 px-1 bg-green-500 hover:bg-green-600 text-white rounded-md lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                wire:click="firstStepSubmit">Hit me! To Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
