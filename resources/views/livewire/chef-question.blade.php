
<main class="bg-black w-full">
    <!-- Question 01 -->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="w-full py-5">
            <div class="flex w-full justify-center">
                <img src="images\recipeatLOGO.png" alt="logo" class="w-60 h-52">
            </div>
            <div class="w-full mx-auto py-4">
                <div class="w-1/2 mx-auto py-2 flex flex-col">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Hey Chef,Welcome to Recip<span class="text-red-600">eat!</span></h1>
                        <p class="text-base text-montserrat text-gray-100 mt-4">Step 1 <span class="text-montserrat opacity-50">of 4</span></p>
                        <div class="h-0.5 mt-2 w-12/12 bg-gray-500 rounded-full">
                            <div class="w-1/4 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-sm text-manrope text-gray-300">We would like to improve your cooking experience. This will take less than a minute</h1>
                        <div class="mt-4 w-full flex flex-col justify-center items-center py-2 form-group">
                            <input type="text" wire:model="name" placeholder="What’s your Name?"
                                class="w-3/4 py-3 mx-auto border-b text-3xl font-semibold text-gray-100 placeholder:text-gray-400 text-Manrope  border-gray-600 bg-transparent focus:outline-none text-center"
                                autocomplete required />
                            @error('name')
                                <span class="error text-red-500 text-base pl-1 py-2 font-bold text-manrope tracking-wider"><i
                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                    Name Required</span>
                            @enderror
                        </div>
                        <div class="w-full flex justify-end py-3">
                            <button type="button"
                                class="py-2 text-white rounded lg:text-lg text-base focus:outline-none focus:border-transparent shadow-lg"
                                wire:click="firstStepSubmit">
                                <svg width="216" height="48" viewBox="0 0 216 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="216" height="48" rx="6" fill="url(#paint0_linear_461_516)"/>
                                    <path d="M33.5547 29.5V18.3125H35.4375L41.9375 26.6719V18.3125H43.8203V29.5H41.7734L35.4375 21.3438V29.5H33.5547ZM47.3828 28.4375C46.5443 27.6406 46.125 26.5729 46.125 25.2344C46.125 23.8958 46.5521 22.8333 47.4062 22.0469C48.2604 21.2552 49.2656 20.8594 50.4219 20.8594C51.5781 20.8594 52.5625 21.2083 53.375 21.9062C54.1875 22.6042 54.5938 23.5677 54.5938 24.7969V26.0312H47.9219C47.9635 26.651 48.2448 27.151 48.7656 27.5312C49.2917 27.9062 49.8906 28.0938 50.5625 28.0938C51.6302 28.0938 52.4401 27.7578 52.9922 27.0859L54.0156 28.2031C53.099 29.151 51.9036 29.625 50.4297 29.625C49.237 29.625 48.2214 29.2292 47.3828 28.4375ZM47.9219 24.6172H52.7969C52.7969 23.9036 52.5729 23.3568 52.125 22.9766C51.6771 22.5911 51.125 22.3984 50.4688 22.3984C49.8125 22.3984 49.224 22.599 48.7031 23C48.1823 23.3958 47.9219 23.9349 47.9219 24.6172ZM55.5703 29.5L58.5938 25.1641L55.7266 20.9844H57.9219L59.7422 23.7891L61.6328 20.9844H63.7578L60.7891 25.1484L63.8906 29.5H61.6797L59.6484 26.6719L57.6641 29.5H55.5703ZM64.8281 22.4297V20.9844H65.8984V18.3125H67.6953V20.9844H69.9297V22.4297H67.6953V26.75C67.6953 27.1562 67.7995 27.4792 68.0078 27.7188C68.2214 27.9583 68.5208 28.0781 68.9062 28.0781C69.2917 28.0781 69.6589 27.8906 70.0078 27.5156L70.75 28.7812C70.125 29.349 69.4323 29.6328 68.6719 29.6328C68.6719 29.6328 68.6667 29.6302 68.6562 29.625C67.8958 29.625 67.2448 29.362 66.7031 28.8359C66.1667 28.3099 65.8984 27.599 65.8984 26.7031V22.4297H64.8281ZM71.9297 28.4609C71.9297 28.1172 72.0469 27.8307 72.2812 27.6016C72.5156 27.3724 72.7917 27.2578 73.1094 27.2578C73.4323 27.2578 73.7135 27.3724 73.9531 27.6016C74.1927 27.8307 74.3125 28.1068 74.3125 28.4297C74.3125 28.7474 74.1693 29.1354 73.8828 29.5938L72.9219 31.1797H71.9922L72.5859 29.5156C72.1484 29.3125 71.9297 28.9609 71.9297 28.4609ZM81.3203 29.5V18.3125H89.1719V20.0938H83.2031V23.0547H88.5625V24.7344H83.2031V27.7266H89.3672V29.5H81.3203ZM90.5391 29.5L93.5625 25.1641L90.6953 20.9844H92.8906L94.7109 23.7891L96.6016 20.9844H98.7266L95.7578 25.1484L98.8594 29.5H96.6484L94.6172 26.6719L92.6328 29.5H90.5391ZM100.453 32.6016V20.9844H102.242V22.4766C102.945 21.3984 103.867 20.8594 105.008 20.8594C106.154 20.8594 107.13 21.2552 107.938 22.0469C108.75 22.8333 109.156 23.8828 109.156 25.1953C109.156 26.5078 108.753 27.5755 107.945 28.3984C107.143 29.2161 106.206 29.625 105.133 29.625C104.06 29.625 103.096 29.1562 102.242 28.2188V32.6016H100.453ZM102.945 23.2422C102.456 23.7786 102.211 24.4531 102.211 25.2656C102.211 26.0729 102.456 26.737 102.945 27.2578C103.44 27.7734 104.039 28.0312 104.742 28.0312C105.445 28.0312 106.057 27.776 106.578 27.2656C107.104 26.75 107.367 26.0859 107.367 25.2734C107.367 24.4557 107.109 23.7786 106.594 23.2422C106.083 22.7005 105.471 22.4297 104.758 22.4297C104.044 22.4297 103.44 22.7005 102.945 23.2422ZM111.914 28.4375C111.076 27.6406 110.656 26.5729 110.656 25.2344C110.656 23.8958 111.083 22.8333 111.938 22.0469C112.792 21.2552 113.797 20.8594 114.953 20.8594C116.109 20.8594 117.094 21.2083 117.906 21.9062C118.719 22.6042 119.125 23.5677 119.125 24.7969V26.0312H112.453C112.495 26.651 112.776 27.151 113.297 27.5312C113.823 27.9062 114.422 28.0938 115.094 28.0938C116.161 28.0938 116.971 27.7578 117.523 27.0859L118.547 28.2031C117.63 29.151 116.435 29.625 114.961 29.625C113.768 29.625 112.753 29.2292 111.914 28.4375ZM112.453 24.6172H117.328C117.328 23.9036 117.104 23.3568 116.656 22.9766C116.208 22.5911 115.656 22.3984 115 22.3984C114.344 22.3984 113.755 22.599 113.234 23C112.714 23.3958 112.453 23.9349 112.453 24.6172ZM121.094 29.5V20.9844H122.883V22.7031C123.169 22.1719 123.56 21.7344 124.055 21.3906C124.555 21.0469 125.083 20.8698 125.641 20.8594L125.656 22.6719C125.62 22.6719 125.586 22.6719 125.555 22.6719C124.669 22.6719 124.003 22.9609 123.555 23.5391C123.107 24.112 122.883 24.8828 122.883 25.8516V29.5H121.094ZM126.797 22.4297V20.9844H127.867V18.3125H129.664V20.9844H131.898V22.4297H129.664V26.75C129.664 27.1562 129.768 27.4792 129.977 27.7188C130.19 27.9583 130.49 28.0781 130.875 28.0781C131.26 28.0781 131.628 27.8906 131.977 27.5156L132.719 28.7812C132.094 29.349 131.401 29.6328 130.641 29.6328C130.641 29.6328 130.635 29.6302 130.625 29.625C129.865 29.625 129.214 29.362 128.672 28.8359C128.135 28.3099 127.867 27.599 127.867 26.7031V22.4297H126.797ZM134.25 19.2891C134.026 19.0651 133.914 18.7995 133.914 18.4922C133.914 18.1849 134.026 17.9193 134.25 17.6953C134.474 17.4714 134.74 17.3594 135.047 17.3594C135.359 17.3594 135.628 17.4714 135.852 17.6953C136.076 17.9193 136.188 18.1849 136.188 18.4922C136.188 18.7995 136.076 19.0651 135.852 19.2891C135.628 19.513 135.359 19.625 135.047 19.625C134.74 19.625 134.474 19.513 134.25 19.2891ZM134.141 29.5V20.9844H135.93V29.5H134.141ZM137.766 28.3516L138.625 26.9531C139.615 27.6979 140.576 28.0729 141.508 28.0781C141.914 28.0781 142.234 27.9844 142.469 27.7969C142.703 27.6094 142.82 27.3724 142.82 27.0859C142.82 26.6589 142.255 26.2734 141.125 25.9297C141.042 25.8984 140.977 25.8776 140.93 25.8672C139.159 25.388 138.273 24.5885 138.273 23.4688C138.273 22.6771 138.581 22.0443 139.195 21.5703C139.81 21.0964 140.607 20.8594 141.586 20.8594C142.565 20.8594 143.492 21.1484 144.367 21.7266L143.695 23.0547C143.003 22.5964 142.253 22.3672 141.445 22.3672C141.018 22.3672 140.669 22.4453 140.398 22.6016C140.133 22.7526 140 22.9818 140 23.2891C140 23.5651 140.141 23.7682 140.422 23.8984C140.615 23.9922 140.883 24.0833 141.227 24.1719C141.576 24.2552 141.883 24.3411 142.148 24.4297C142.414 24.513 142.672 24.6094 142.922 24.7188C143.172 24.8229 143.44 24.9714 143.727 25.1641C144.305 25.5495 144.594 26.1484 144.594 26.9609C144.594 27.7682 144.299 28.4141 143.711 28.8984C143.128 29.3828 142.378 29.625 141.461 29.625C140.841 29.625 140.198 29.513 139.531 29.2891C138.865 29.0651 138.276 28.7526 137.766 28.3516ZM147.336 28.4375C146.497 27.6406 146.078 26.5729 146.078 25.2344C146.078 23.8958 146.505 22.8333 147.359 22.0469C148.214 21.2552 149.219 20.8594 150.375 20.8594C151.531 20.8594 152.516 21.2083 153.328 21.9062C154.141 22.6042 154.547 23.5677 154.547 24.7969V26.0312H147.875C147.917 26.651 148.198 27.151 148.719 27.5312C149.245 27.9062 149.844 28.0938 150.516 28.0938C151.583 28.0938 152.393 27.7578 152.945 27.0859L153.969 28.2031C153.052 29.151 151.857 29.625 150.383 29.625C149.19 29.625 148.174 29.2292 147.336 28.4375ZM147.875 24.6172H152.75C152.75 23.9036 152.526 23.3568 152.078 22.9766C151.63 22.5911 151.078 22.3984 150.422 22.3984C149.766 22.3984 149.177 22.599 148.656 23C148.135 23.3958 147.875 23.9349 147.875 24.6172Z" fill="#F9FBFC"/>
                                    <path d="M171.425 31.225C171.267 31.225 171.108 31.1667 170.983 31.0417C170.742 30.8 170.742 30.4 170.983 30.1583L176.417 24.725C176.817 24.325 176.817 23.675 176.417 23.275L170.983 17.8417C170.742 17.6 170.742 17.2 170.983 16.9583C171.225 16.7167 171.625 16.7167 171.867 16.9583L177.3 22.3917C177.725 22.8167 177.967 23.3917 177.967 24C177.967 24.6084 177.733 25.1834 177.3 25.6084L171.867 31.0417C171.742 31.1584 171.583 31.225 171.425 31.225Z" fill="#F9FBFC"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_461_516" x1="103.598" y1="18.9296" x2="161.091" y2="24.6381" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F7162D"/>
                                    <stop offset="1" stop-color="#E4182A"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Question 01 -->

    <!--Start Question 02 -->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="w-full py-5">
            <div class="flex w-full justify-center">
                <img src="images\recipeatLOGO.png" alt="logo" class="w-60 h-52">
            </div>
            <div class="w-full mx-auto py-4 rounded-xl">
                <div class="w-1/2 mx-auto py-2 flex flex-col">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Welcome to Recip<span class="text-red-600">eat! ,</span> {{auth()->user()->name}}</h1>
                        <p class="text-base text-gray-100 mt-4 text-montserrat">Step 2 <span class="text-montserrat opacity-50">of 4</span></p>
                        <div class="h-0.5 mt-2 w-12/12 bg-gray-500 rounded-full">
                            <div class="w-1/2 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-sm text-manrope text-gray-300">We would like to improve your cooking experience. This will take less than a minute</h1>

                        <div class="mt-4 w-full flex flex justify-center items-center py-2 space-x-6 form-group">
                            <div class="w-1/2 flex flex-col justify-center ">
                                <label class="text-gray-100 text-manrope mb-2">What’s your current designation?</label>
                                <input type="text" wire:model="designation" placeholder="Eg; Sous Chef?"
                                class="w-full py-2.5 mx-auto border-2 rounded-md bg-white text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope  border-gray-400  focus:outline-none px-4"
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
                                class="w-full py-2.5 mx-auto border-2 rounded-md bg-white text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope  border-gray-400 focus:outline-none px-4"
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

                                <input class="hidden" id="lessThanOneYear" name="experience" value="Less than 1 year" type="radio" checked />
                                <label class="flex justify-center items-center   border rounded-md p-2 " for="lessThanOneYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2 "></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">Less than 1 year</span>
                                </label>
                                <input class="hidden" id="oneToThreeYear" name="experience" value="1-3 years"  type="radio" />
                                <label class="flex justify-center items-center   border rounded-md p-2 " for="oneToThreeYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">1-3 years</span>
                                </label>

                                <input class="hidden" id="threeToFiveYear" name="experience" value="3-5 years"  type="radio" />
                                <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="threeToFiveYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">3-5 years</span>
                                </label>

                                <input class="hidden" id="fiveToSevenYear" name="experience" value="5-7 years"  type="radio" />
                                <label class="flex justify-center items-center  border rounded-md p-2 " for="fiveToSevenYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">5-7 years</span>
                                </label>

                                <input class="hidden" id="sevenPulseYear" name="experience" value="7+ Years" type="radio" />
                                <label class="flex justify-center items-center px-2  border rounded-md p-2 " for="sevenPulseYear">
                                    <span class='hidden icon bg-white'><i
                                            class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                                    <span class="text-uzs text-base font-Rubik font-semibold">7+ Years</span>
                                </label>

                            </div>
                        </div>

                        <div class="w-full mx-auto flex justify-end items-center py-3 space-x-10">
                            <button class="text-gray-100 flex items-center text-lg focus:outline-none focus:ring-0" wire:click="back(1)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.575 17.225C12.7333 17.225 12.8916 17.1667 13.0166 17.0417C13.2583 16.8 13.2583 16.4 13.0166 16.1583L7.58329 10.725C7.18329 10.325 7.18329 9.67502 7.58329 9.27502L13.0166 3.84168C13.2583 3.60002 13.2583 3.20002 13.0166 2.95835C12.775 2.71668 12.375 2.71668 12.1333 2.95835L6.69996 8.39168C6.27496 8.81668 6.03329 9.39168 6.03329 10C6.03329 10.6084 6.26663 11.1834 6.69996 11.6084L12.1333 17.0417C12.2583 17.1584 12.4166 17.225 12.575 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                                    <span>Previous</span>
                                </button>
                            <button
                                class="flex items-center space-x-3 py-2 px-3 text-white rounded buttonRed hover:bg-red-700 text-lg focus:outline-none focus:border-transparent shadow-lg"
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
        <div class="w-full py-5">
            <div class="flex w-full justify-center">
                <img src="images\recipeatLOGO.png" alt="logo" class="w-60 h-52">
            </div>
            <div class="w-full mx-auto py-4">
                <div class="w-1/2 mx-auto py-2 flex flex-col ">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Hey Chef,Welcome to Recip<span class="text-red-600">eat!</span></h1>
                        <p class="text-base text-montserrat text-gray-100 mt-4">Step 3 <span class="text-montserrat opacity-50">of 4</span></p>
                        <div class="h-0.5 mt-2 w-12/12 bg-gray-500 rounded-full">
                            <div class="w-3/4 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-sm text-manrope text-gray-300">We would like to improve your cooking experience. This will take less than a minute</h1>

                        <div class="mt-4 w-full flex flex justify-center items-center py-2 space-x-6 form-group">
                            <div class="w-full flex flex-col justify-center ">
                                <label class="text-gray-100 text-manrope mb-2">Select your specialized culinary skills</label>
                            <select x-cloak id="select" wire:model="culinary_skills" name="culinary_skills"
                            placeholder="Eg.Baking"
                            class="w-full py-2.5  rounded-xl buttonRed text-xl text-gray-600 placeholder:text-gray-400 placeholder:text-base text-Manrope focus:outline-none px-4"
                            autocomplete required>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                                <option value="6">Option 6</option>
                                <option value="7">Option 7</option>
                                <option value="8">Option 8</option>
                              </select>

                              <div x-data="dropdown()" x-init="loadOptions()" class="w-full md:w-full  flex flex-col items-center h-auto mx-auto">
                                <input name="values" type="hidden" x-bind:value="selectedValues()">
                                <div class="inline-block relative w-full">
                                  <div class="flex flex-col items-center relative">
                                    <div x-on:click="open" class="w-full">
                                      <div class="my-2 p-1 flex border border-gray-200 bg-white rounded">
                                        <div class="flex flex-auto flex-wrap">
                                          <template x-for="(option,index) in selected" :key="options[option].value">
                                            <div class="flex justify-center items-center m-1 font-medium py-1 px-1 buttonRed text-white rounded bg-gray-100 border">
                                              <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                              <div class="flex flex-auto flex-row-reverse">
                                                <div x-on:click.stop="remove(index,option)">
                                                  <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                         c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                         l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                         C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                          </template>
                                          <div x-show="selected.length == 0" class="flex">
                                            <input placeholder="Eg.Baking" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
                                          </div>
                                        </div>
                                        <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                                          <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                            <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                              <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                  c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                  L17.418,6.109z" />
                                            </svg>
                                          </button>
                                          <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                              <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                                  c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                                  " />
                                            </svg>

                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="w-full px-4">
                                      <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select" x-on:click.away="close">
                                        <div class="flex flex-col w-full overflow-y-auto h-64">
                                          <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
                                              <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                <div class="w-full items-center flex justify-between">
                                                  <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                  <div x-show="option.selected">
                                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                                      <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                                                          C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                                                          L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                    </svg>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </template>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            <div class="w-full mx-auto flex justify-end py-3 mt-10 space-x-10">
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
                            {{-- @error('culinary_skills')
                                <span class="error text-red-500 text-base pl-1 py-2 font-bold text-manrope tracking-wider"><i
                                        class="las la-exclamation-circle text-red-500 text-xs pl-1 font-bold"></i>
                                         skills Required</span>
                            @enderror --}}
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Question 03 -->

    <!--Start Question 04 -->
    <div class=" w-full flex h-full setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
        <div class="w-full py-5">
            <div class="flex w-full justify-center">
                <img src="images\recipeatLOGO.png" alt="logo" class="w-60 h-52">
            </div>
            <div class="w-full mx-auto py-4">
                <div class="w-1/2 mx-auto py-2 flex flex-col">
                        <h1 class="text-manrope text-white text-4xl font-bold tracking-wider text-center">Pick topics that interests you </h1>
                        <p class="text-base text-gray-100 mt-4">Final Step </p>
                        <div class="h-0.5 mt-2 w-12/12 bg-gray-500 rounded-full">
                            <div class="w-11/12 h-0.5 bg-white"></div>
                        </div>
                        <h1 class="mt-2 text-sm text-manrope text-gray-300">Please select a minimum 3 topics</h1>
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


                <div class="w-full mx-auto py-3  border-gray-500">
                    <h1 class="text-white  text-manrope">Cuisines</h1>
                    <div class="overflow-auto container border-r" id="items-container">
                        <input id="cusiniesId" name="cusinies" class="hidden text-gray-600" value="">
                        <br>
                        <br>
                        <div class="flex space-x-6 text-white pr-4">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md "
                            value="Chinese" id="Chinese">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md"
                            value="Italian" id="Italian">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md"
                            value="Arabic" id="Arabic">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md"
                            value="Indian" id="Indian">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md"
                            value="American" id="American">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md"
                            value="Asian" id="Asian">
                        <input type="button" class="cuisine px-4 text-white border h-10 rounded-md"
                            value="Mexian" id="Mexian">
                        </div>
                    </div>
                </div>
                        <div class="w-full mx-auto flex justify-end items-center py-3 space-x-10">
                            <button class="text-gray-100 flex items-center justify-center text-lg focus:outline-none focus:ring-0" wire:click="back(3)">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.575 17.225C12.7333 17.225 12.8916 17.1667 13.0166 17.0417C13.2583 16.8 13.2583 16.4 13.0166 16.1583L7.58329 10.725C7.18329 10.325 7.18329 9.67502 7.58329 9.27502L13.0166 3.84168C13.2583 3.60002 13.2583 3.20002 13.0166 2.95835C12.775 2.71668 12.375 2.71668 12.1333 2.95835L6.69996 8.39168C6.27496 8.81668 6.03329 9.39168 6.03329 10C6.03329 10.6084 6.26663 11.1834 6.69996 11.6084L12.1333 17.0417C12.2583 17.1584 12.4166 17.225 12.575 17.225Z" fill="#F9FBFC"/>
                                    </svg>
                                    <span>Previous</span>
                                </button>
                            <button
                                class="flex justify-center items-center text-montserrat space-x-3 py-2 px-3 text-white rounded buttonRed  hover:bg-red-700 text-lg focus:outline-none focus:border-transparent shadow-lg"
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
        <div class="w-full py-5">
            <div class="flex w-full justify-center">
                <img src="images\recipeatLOGO.png" alt="logo" class="w-60 h-52">
            </div>
        <div class="w-1/2 mx-auto">
            <a href="/mainDashboard" class="text-gray-100 font-semibold no-underline text-manrope">
                <i class="fas fa-angle-left text-white font-bold"></i>Back Home
            </a>
        </div>

        <h1 class="text-center py-6 text-white text-4xl font-bold text-manrope">Create
            your Recip<span class="text-red-600">eat</span> account</h1>
        <div class="w-1/2 mx-auto">
            <div class="w-7/12 mx-auto py-4 text-manrope">
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
                        class="flex justify-center py-3 buttonRed text-white text-montserrat text-xl mt-4 rounded-md w-full">{{ __('Create Account') }}</button>
                    <div class="flex justify-between py-8">
                        <button class="text-white text-manrope flex items-center border rounded-md px-6 py-2"><img
                                class="mr-2" src="images\GoogleLogo.png">Google Login</button>
                        <button class="text-white text-manrope flex items-center  border rounded-md px-4 py-2"><img
                                class="mr-2" src="images\FBLogo.png">Facebook Login</button>
                    </div>
            </div>
    </div>
    <!--End Question 05 -->

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <style>
            [x-cloak] {
        display: none;
        }

        .svg-icon {
        width: 1em;
        height: 1em;
        }

        .svg-icon path,
        .svg-icon polygon,
        .svg-icon rect {
        fill: #333;
        }

        .svg-icon circle {
        stroke: #4691f6;
        stroke-width: 1;
        }

    </style>
    <script>
        function dropdown() {
        return {
            options: [],
            selected: [],
            show: false,
            open() {
            this.show = true;
            },
            close() {
            this.show = false;
            },
            isOpen() {
            return this.show === true;
            },
            select(index, event) {
            if (!this.options[index].selected) {
                this.options[index].selected = true;
                this.options[index].element = event.target;
                this.selected.push(index);
            } else {
                this.selected.splice(this.selected.lastIndexOf(index), 1);
                this.options[index].selected = false;
            }
            },
            remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);
            },
            loadOptions() {
            const options = document.getElementById("select").options;
            for (let i = 0; i < options.length; i++) {
                this.options.push({
                value: options[i].value,
                text: options[i].innerText,
                selected:
                    options[i].getAttribute("selected") != null
                    ? options[i].getAttribute("selected")
                    : false
                });
            }
            },
            selectedValues() {
            return this.selected.map((option) => {
                return this.options[option].value;
            });
            }
        };
        }
    </script>


</main>
