<div>
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif

    <!-- Question 01 -->
    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="w-2/6 bg-gray-800 h-full -mt-10">
            Hi
        </div>
        <div class="w-4/6">
            <div for="name"
                class="xl:text-center xl:text-4xl text-black font-bold text-3xl leading-relaxed font-serif italic">How
                should we call you ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="name" placeholder="Name"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <a href="/dashboard">
                <button type="submit" class="xl:ml-96 bg-yellow-500 hover:bg-yellow-400 text-white font-semibold rounded-l-2xl
              px-6 py-2">Skip</button></a>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="firstStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 02 -->
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="col-md-12">
            <div for="gender"
                class="xl:text-center xl:text-4xl text-black font-bold text-3xl leading-relaxed font-serif italic">How
                do
                you I dentify
                yourself ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group text-black text-xl">
                <label class="radio-inline"><input type="radio" wire:model="gender" value="Male"
                        {{{ $gender == 'Male' ? "checked" : "" }}}>&nbsp; <i class="fas fa-male"></i> &nbsp; Male
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="gender" value="Fe-Male"
                        {{{ $gender == 'Fe-Male' ? "checked" : "" }}}>&nbsp; <i class="fas fa-female"></i> &nbsp;
                    Fe-Male</label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="gender" value="Other"
                        {{{ $gender == 'Other' ? "checked" : "" }}}>&nbsp; <i class="fas fa-mars"></i> &nbsp; Other
                </label>
                <br />
                @error('gender') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(1)">Back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="secondStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 03 -->
    <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="col-md-12">
            <div for="mail" class="xl:text-center xl:text-4xl text-black font-bold text-3xl font-serif italic">For your
                monthly dose of Mouth-watering content ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="email" wire:model="mail" placeholder="E-Mail ID" required
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('mail') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(2)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="thirdStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 04 -->
    <div class="row setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
        <div class="col-md-12">
            <div for="cookinglevel"
                class="xl:text-center xl:text-4xl text-black font-bold text-3xl leading-relaxed font-serif italic">If
                you have to choose a level for your cooking ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group text-black text-xl">
                <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="try"
                        {{{ $cookinglevel == 'try' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-pawn"></i> &nbsp;
                    I Can Try
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="cook"
                        {{{ $cookinglevel == 'cook' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-rook"></i> &nbsp;
                    I Can Cook</label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="cookinglevel" value="great"
                        {{{ $cookinglevel == 'great' ? "checked" : "" }}}>&nbsp; <i class="fas fa-chess-queen"></i>
                    &nbsp; Your Kidding? I am Great
                </label>
                <br />
                @error('cookinglevel') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(3)">Back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="fourthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 05 -->
    <div class="row setup-content {{ $currentStep != 5 ? 'display-none' : '' }}" id="step-5">
        <div class="col-md-12">
            <div for="allergies" class="xl:text-center xl:text-4xl text-black font-bold text-3xl font-serif italic">Do
                you have any specific allergies ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="allergies" placeholder="Specific Allergies"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('allergies') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(4)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="fifthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 06 -->
    <div class="row setup-content {{ $currentStep != 6 ? 'display-none' : '' }}" id="step-6">
        <div class="col-md-12">
            <div for="lifestyle"
                class="xl:text-center xl:text-4xl text-white font-bold text-3xl leading-relaxed font-serif italic"> Do
                you follow a particular lifestyle ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group text-white text-xl">
                <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Vegan"
                        {{{ $lifestyle == 'Vegan' ? "checked" : "" }}}>&nbsp; <i class="fas fa-pizza-slice"></i> &nbsp;
                    Vegan
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Keto"
                        {{{ $lifestyle == 'Keto' ? "checked" : "" }}}>&nbsp; <i class="fas fa-seedling"></i> &nbsp;
                    Keto</label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Pescetarian"
                        {{{ $lifestyle == 'Pescetarian' ? "checked" : "" }}}>&nbsp; <i class="fas fa-fish"></i>
                    &nbsp; Pescetarian
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="lifestyle" value="Vegetarian"
                        {{{ $lifestyle == 'Vegetarian' ? "checked" : "" }}}>&nbsp; <i class="fas fa-carrot"></i> &nbsp;
                    Vegetarian</label>
                <br /><br />
                <input type="text" wire:model="lifestyle" placeholder="Lifestyle"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('lifestyle') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(5)">Back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="sixthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 07 -->
    <div class="row setup-content {{ $currentStep != 7 ? 'display-none' : '' }}" id="step-7">
        <div class="col-md-12">
            <div for="ingredient" class="xl:text-center xl:text-4xl text-white font-bold text-3xl font-serif italic"> Do
                you have any ingredients that you would like to avoid ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="ingredient" placeholder="You Like to Avoid Ingredient"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('ingredient') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(6)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="seventhStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 08 -->
    <div class="row setup-content {{ $currentStep != 8 ? 'display-none' : '' }}" id="step-8">
        <div class="col-md-12">
            <div for="pref_cuisine" class="xl:text-center xl:text-4xl text-white font-bold text-3xl font-serif italic">
                What are your favourite cuisines ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="pref_cuisine" placeholder="Favourie Cuisine"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('pref_cuisine') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(7)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="eighthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 09 -->
    <div class="row setup-content {{ $currentStep != 9 ? 'display-none' : '' }}" id="step-9">
        <div class="col-md-12">
            <div for="goals"
                class="xl:text-center xl:text-4xl text-white font-bold text-3xl leading-relaxed font-serif italic">If
                you have to choose a level for your cooking ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group text-white text-xl">
                <label class="radio-inline"><input type="radio" wire:model="goals" value="New Skill"
                        {{{ $goals == 'New Skill' ? "checked" : "" }}}>&nbsp; <i class="fas fa-book-reader"></i> &nbsp;
                    New Skill
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="goals" value="Experiment With Cuisine"
                        {{{ $goals == 'Experiment With Cuisine' ? "checked" : "" }}}>&nbsp; <i
                        class="fas fa-drumstick-bite"></i> &nbsp;
                    Experiment With Cuisine</label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="goals" value="Save Time"
                        {{{ $goals == 'Save Time' ? "checked" : "" }}}>&nbsp; <i class="fas fa-stopwatch-20"></i>
                    &nbsp; Save Time
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="goals" value="Save Money"
                        {{{ $goals == 'Save Money' ? "checked" : "" }}}>&nbsp; <i class="fas fa-hand-holding-usd"></i>
                    &nbsp;
                    Save Money
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="goals" value=" Eat Healthy "
                        {{{ $goals == 'Eat Healthy' ? "checked" : "" }}}>&nbsp; <i class="fas fa-heartbeat"></i> &nbsp;
                    Eat Healthy </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="goals" value="Dietary Goal"
                        {{{ $goals == 'Dietary Goal' ? "checked" : "" }}}>&nbsp; <i class="fas fa-apple-alt"></i>
                    &nbsp; Dietary Goal
                </label>
                <br />
                @error('goals') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(8)">Back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="ninthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 10 -->
    <div class="row setup-content {{ $currentStep != 10 ? 'display-none' : '' }}" id="step-10">
        <div class="col-md-12">
            <div for="serving_time"
                class="xl:text-center xl:text-4xl text-white font-bold text-3xl leading-relaxed font-serif italic">How
                many people do you usually cook for ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group text-white text-xl">
                <label class="radio-inline"><input type="radio" wire:model="serving_time" value="01 - 10"
                        {{{ $serving_time == '01 - 10' ? "checked" : "" }}}>&nbsp; <i class="fas fa-user-alt"></i>
                    &nbsp;
                    01 - 10
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="serving_time" value="10 - 50"
                        {{{ $serving_time == '10 - 50' ? "checked" : "" }}}>&nbsp; <i
                        class="fas fa-user-friends"></i>&nbsp;
                    11 - 50</label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="serving_time" value="51 - 100"
                        {{{ $serving_time == '51 - 100' ? "checked" : "" }}}>&nbsp; <i class="fas fa-users"></i>
                    &nbsp; 51 - 100
                </label>
                <br /><br />
                <input type="text" wire:model="serving_time" placeholder="101 and above"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('serving_time') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(9)">Back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="tenthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 11 -->
    <div class="row setup-content {{ $currentStep != 11 ? 'display-none' : '' }}" id="step-11">
        <div class="col-md-12">
            <div for="cho_cook" class="xl:text-center xl:text-4xl text-white font-bold text-3xl font-serif italic">
                Which one would you rather cook ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="cho_cook" placeholder="Rather Cook"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('cho_cook') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(10)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="eleventhStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 12 -->
    <div class="row setup-content {{ $currentStep != 12 ? 'display-none' : '' }}" id="step-12">
        <div class="col-md-12">
            <div for="fav_ingr" class="xl:text-center xl:text-4xl text-white font-bold text-3xl font-serif italic">
                What is one ingredient you will never get tired ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="fav_ingr" placeholder="Your Never get Tried Ingredient"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('fav_ingr') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(11)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="twelfthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 13 -->
    <div class="row setup-content {{ $currentStep != 13 ? 'display-none' : '' }}" id="step-13">
        <div class="col-md-12">
            <div for="level_spici" class="xl:text-center xl:text-4xl text-white font-bold text-3xl font-serif italic">
                What is your preferred level of spiciness?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group">
                <input type="text" wire:model="level_spici" placeholder="Level of Spiciness"
                    class="w-full px-4 py-3 mb-2 rounded-lg bg-gray-700 text-white text-xl mt-2 border-opacity-50 border-b-2 text-center focus:outline-none focus:ring-2 focus:ring-gray-700 focus:border-transparent"
                    autocomplete required>
                @error('level_spici') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(12)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="thirteenthStepSubmit">Next</button>
        </div>
    </div>

    <!-- Question 14 -->
    <div class="row setup-content {{ $currentStep != 14 ? 'display-none' : '' }}" id="step-14">
        <div class="col-md-12">
            <div for="time_spend" class="xl:text-center xl:text-4xl text-white font-bold text-3xl font-serif italic">
                How much time do you have to spare for each ?</div>
            <div class="xl:mr-60 xl:ml-60 mt-14 form-group text-white text-xl">
                <label class="radio-inline"><input type="radio" wire:model="time_spend" value="30 Mins and below"
                        {{{ $time_spend == '30 Mins and below' ? "checked" : "" }}}>&nbsp; <i
                        class="fas fa-hourglass-start"></i>
                    &nbsp;
                    30 Mins and Below
                </label>
                <br /><br />
                <label class="radio-inline"><input type="radio" wire:model="time_spend" value="more than 1 hour"
                        {{{ $time_spend == 'more than 1 hour' ? "checked" : "" }}}>&nbsp; <i
                        class="fas fa-hourglass"></i> &nbsp;
                    More than 1 Hour</label>
                <br />
                @error('time_spend') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(13)">back</button>
            <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="fourteenthStepSubmit">Next</button>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 15 ? 'display-none' : '' }}" id="step-15">
        <div class="col-md-12">
            <h1
                class="text-xl text-white text-center md:text-3xl md:tracking-widest font-bold leading-tight mt-12 mb-10">
                Hi there! Welcome to your Personal <span class="text-3xl md:text-5xl">Recipeat </span> Account <br />
            </h1>
            <button type="submit" class="xl:ml-96 bg-red-500 hover:bg-red-400 text-white font-semibold rounded-l-2xl
              px-6 py-2" wire:click="back(14)">back</button>
            <a href="/dashboard">
                <button type="button" class="xl:ml-0 bg-green-500 hover:bg-green-400 text-white font-semibold rounded-r-2xl
              px-6 py-2 mt-8" wire:click="submitForm">Go to My Dashboard</button>
            </a>
        </div>
    </div>
</div>
