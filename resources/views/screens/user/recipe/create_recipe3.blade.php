<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
   
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        .pagination li {
            display: inline;
            margin-left: 0.5em;
            margin-right: 0.5em;
        }
    </style>

</head>

<body class="antialiased bg-black ">

    <header class="flex justify-evenly py-7 items-center" style="background-color: rgba(20, 20, 20, 1)">

        <div class="flex space-x-4">
            <a href="/welcome"><i class="fas fa-bars text-white text-3xl"></i></a>
            <img src="images\explore_header_logo.png" alt="logo" class="">
        </div>

        @include('searchBar')

        <a href="/HomePage" class="flex space-x-2 items-center">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.0799 18.0482H5.11988C3.66388 18.0482 2.33588 16.9282 2.09588 15.4882L1.03188 9.12018C0.863882 8.12818 1.34389 6.85619 2.13589 6.22419L7.67989 1.78415C8.75189 0.920147 10.4399 0.928155 11.5199 1.79215L17.0639 6.22419C17.8479 6.85619 18.3279 8.12818 18.1679 9.12018L17.1039 15.4882C16.8639 16.9042 15.5119 18.0482 14.0799 18.0482ZM9.59189 2.35216C9.16789 2.35216 8.74388 2.48014 8.43188 2.72814L2.88789 7.16818C2.43189 7.53618 2.11989 8.35214 2.21589 8.92814L3.27989 15.2962C3.42389 16.1362 4.26388 16.8482 5.11988 16.8482H14.0799C14.9359 16.8482 15.7759 16.1362 15.9199 15.2881L16.9839 8.92018C17.0799 8.34418 16.7599 7.52017 16.3119 7.16017L10.7679 2.72814C10.4479 2.48014 10.0239 2.35216 9.59189 2.35216Z"
                    fill="white" />
                <path
                    d="M9.6 13C8.168 13 7 11.832 7 10.4C7 8.96805 8.168 7.80005 9.6 7.80005C11.032 7.80005 12.2 8.96805 12.2 10.4C12.2 11.832 11.032 13 9.6 13ZM9.6 9.00005C8.832 9.00005 8.2 9.63205 8.2 10.4C8.2 11.168 8.832 11.8 9.6 11.8C10.368 11.8 11 11.168 11 10.4C11 9.63205 10.368 9.00005 9.6 9.00005Z"
                    fill="white" />
            </svg>
            <h1 class="text-white">Home</h1>
        </a>

        <a href="/create_recipe" class="flex space-x-2 items-center">
            <svg width="24" height="31" viewBox="0 0 24 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM16.15 12.83L14.42 13.41C13.94 13.57 13.57 13.94 13.41 14.42L12.83 16.15C12.34 17.64 10.24 17.61 9.78 16.12L7.83 9.84C7.45 8.59 8.6 7.44 9.83 7.82L16.12 9.77C17.61 10.24 17.63 12.34 16.15 12.83Z"
                    fill="white" />
                <circle cx="12.7" cy="29" r="2" fill="white" />
            </svg>
            <h1 class="text-white font-semibold">Explore</h1>
        </a>

        <div class="flex space-x-2 items-center">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.5 18.248C9.94799 18.248 9.42799 17.968 9.05999 17.48L7.85999 15.88C7.83599 15.848 7.73999 15.808 7.69999 15.8H7.29999C3.96399 15.8 1.89999 14.896 1.89999 10.4V6.4C1.89999 2.864 3.76399 1 7.29999 1H13.7C17.236 1 19.1 2.864 19.1 6.4V10.4C19.1 13.936 17.236 15.8 13.7 15.8H13.3C13.236 15.8 13.18 15.832 13.14 15.88L11.94 17.48C11.572 17.968 11.052 18.248 10.5 18.248ZM7.29999 2.2C4.43599 2.2 3.09999 3.536 3.09999 6.4V10.4C3.09999 14.016 4.33999 14.6 7.29999 14.6H7.69999C8.10799 14.6 8.57199 14.832 8.81999 15.16L10.02 16.76C10.3 17.128 10.7 17.128 10.98 16.76L12.18 15.16C12.444 14.808 12.86 14.6 13.3 14.6H13.7C16.564 14.6 17.9 13.264 17.9 10.4V6.4C17.9 3.536 16.564 2.2 13.7 2.2H7.29999Z"
                    fill="#FAFAFA" />
                <path
                    d="M14.5 7.00005H6.49999C6.17199 7.00005 5.89999 6.72805 5.89999 6.40005C5.89999 6.07205 6.17199 5.80005 6.49999 5.80005H14.5C14.828 5.80005 15.1 6.07205 15.1 6.40005C15.1 6.72805 14.828 7.00005 14.5 7.00005Z"
                    fill="#FAFAFA" />
                <path
                    d="M11.3 11H6.49999C6.17199 11 5.89999 10.728 5.89999 10.4C5.89999 10.072 6.17199 9.80005 6.49999 9.80005H11.3C11.628 9.80005 11.9 10.072 11.9 10.4C11.9 10.728 11.628 11 11.3 11Z"
                    fill="#FAFAFA" />
            </svg>

            <h1 class="text-white">Profile</h1>
            {{-- <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">

            </div> --}}
        </div>

        <a href="/notifications" class="flex space-x-2 items-center">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.41488 15.2752C7.68125 15.2752 5.94762 14.9999 4.30327 14.4493C3.67827 14.2335 3.20208 13.7946 2.99375 13.2216C2.77798 12.6487 2.85238 12.0163 3.19464 11.4508L4.0503 10.0297C4.22887 9.73206 4.39256 9.13682 4.39256 8.78712V6.63682C4.39256 3.86897 6.64702 1.6145 9.41488 1.6145C12.1827 1.6145 14.4372 3.86897 14.4372 6.63682V8.78712C14.4372 9.12938 14.6009 9.73206 14.7795 10.0371L15.6277 11.4508C15.9476 11.9865 16.0071 12.6338 15.7914 13.2216C15.5756 13.8094 15.1068 14.2559 14.519 14.4493C12.8821 14.9999 11.1485 15.2752 9.41488 15.2752ZM9.41488 2.73057C7.26458 2.73057 5.50863 4.47908 5.50863 6.63682V8.78712C5.50863 9.33028 5.28542 10.1338 5.01012 10.6026L4.15446 12.0237C3.99077 12.299 3.94613 12.5892 4.04286 12.8347C4.13214 13.0877 4.35536 13.2812 4.66042 13.3853C7.77054 14.427 11.0667 14.427 14.1768 13.3853C14.4446 13.296 14.653 13.0952 14.7497 12.8273C14.8464 12.5594 14.8241 12.2693 14.6753 12.0237L13.8196 10.6026C13.5369 10.119 13.3211 9.32283 13.3211 8.77968V6.63682C13.3211 4.47908 11.5726 2.73057 9.41488 2.73057Z"
                    fill="white" />
                <path
                    d="M10.7988 2.9315C10.7467 2.9315 10.6946 2.92406 10.6426 2.90918C10.4268 2.84966 10.2185 2.80501 10.0176 2.77525C9.38512 2.69341 8.775 2.73805 8.20208 2.90918C7.99375 2.97614 7.77054 2.90918 7.62917 2.75293C7.4878 2.59668 7.44315 2.37347 7.525 2.17257C7.83006 1.39132 8.57411 0.87793 9.42232 0.87793C10.2705 0.87793 11.0146 1.38388 11.3196 2.17257C11.394 2.37347 11.3568 2.59668 11.2155 2.75293C11.1039 2.87198 10.9476 2.9315 10.7988 2.9315Z"
                    fill="white" />
                <path
                    d="M9.41488 16.9716C8.67827 16.9716 7.96399 16.674 7.44315 16.1531C6.92232 15.6323 6.6247 14.918 6.6247 14.1814H7.74077C7.74077 14.6204 7.91935 15.0519 8.23185 15.3644C8.54434 15.6769 8.97589 15.8555 9.41488 15.8555C10.3375 15.8555 11.089 15.104 11.089 14.1814H12.2051C12.2051 15.7216 10.9551 16.9716 9.41488 16.9716Z"
                    fill="white" />
            </svg>
            <h1 class="text-white">Notifications</h1>
            <div class="bg-red-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                <h6 class="text-sm text-center">{{ count(auth()->user()->unreadnotifications) }}</h6>
            </div>
        </a>
    </header>
    <main class="mx-auto w-7/12  py-10 mt-10 justify-center item-center">
        <p class="text-lg text-gray-100 ">Step 3 <span class="text-Montserrat opacity-50">of 4</span></p>
        <div class="h-0.5 mt-4 w-11/12 bg-gray-500 rounded-full">
            <div class="w-3/4 h-0.5 bg-white"></div>
        </div>
        <h1 class="text-white py-4">Cooking Steps</h1>
        <h1 class="text-white mt-5 py-10">Make the egg mixture</h1>
        <div class="h-0.5 w-11/12 bg-gray-500 rounded-full"></div>
        {{-- <div class="mt-10 flex flex-col w-11/12 border space-y-5 pl-16">
            <input type="text"
                class="py-4 px-10 bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-2xl placeholder:text-white placeholder:text-start"
                plceholder="In a medium bowl,whisk together the eggs,milk, and cinnamon" />
            <input type="text"
                class="py-4 px-10  bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-2xl text-white placeholder:text-start"
                plceholder="Description" />
            <input type="text"
                class="py-4 px-10  bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-2xl text-white placeholder:text-start"
                plceholder="Description" />
            <div class="">
                <button class="w-10  rounded-lg bg-white border-gray-300 px-4 py-2 text-black-500">+</button> <span
                    class="text-white py-4">Add next step</span>
            </div>
        </div> --}}
        {{-- <div class="py-2 px-4 flex flex-col"> --}}
            {{-- <ol class=" relative border-l border-gray-500 flex flex-col dark:border-gray-700" id=""> --}}
                {{-- <li class="mb-10 ml-4 ">
                   <span class="absolute w-3 h-3 bg-white rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></span>
                     <input type="text" name="step1"
                            class="py-4 px-10 bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-lg  placeholder:text-start"
                            placeholder="In a medium bowl,whisk together the eggs,milk, and cinnamon" />
                </li> --}}
                {{-- <li class="ml-4 mb-10">
                  <span class="absolute w-3 h-3 bg-white rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></span>
                    <input type="text" name="step2"
                            class="steps py-4 px-10 bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-lg  placeholder:text-start"
                            placeholder="In a medium bowl,whisk together the eggs,milk, and cinnamon" />    
                 
                 </li> --}}
                {{-- <li class="ml-4 mb-10">
                    <div class="absolute w-3 h-3 bg-white rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>   
                    <input type="text" name="steps3"
                            class="py-4 px-10 bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-2xl  placeholder:text-start"
                            plceholder="In a medium bowl,whisk together the eggs,milk, and cinnamon" />
                </li> --}}
            {{-- </ol> --}}
            {{-- <div class="recipeSteps">
                <button type="button" id="addSteps"
                    class="w-10  rounded-lg bg-white border-gray-300 px-4 py-2 text-black-500">+</button>
                <span class="text-white py-4">Add next step</span>

            </div> --}}
        {{-- </div> --}}
        <div class="mt-5 flex flex-col w-11/12 space-y-5 pl-16">
            <!-- Side Space::start -->
            <div class="col-lg-4"></div>
            <!-- Side Space::end -->
            <!-- Form-Setps::start -->
            <div class="">
                <label>Steps</label>
                <table id="recipeSteps" class=" table list">
                    <tbody>
                        <tr class="w-full">
                            <div class="steps py-2 px-4 w-full flex flex-col">

                            </div>
                        </tr>
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                           
                        </tr>
                        <tr>
                        </tr>
                    </tfoot> --}}
                </table>
                {{-- <td> --}}
                    <button type="button" class="w-10  rounded-lg bg-white border-gray-300 px-4 py-2 text-black-500"
                        id="addSteps" >+</button><span
                        class="text-white py-4">Add next step</span>
                {{-- </td> --}}
            </div>
            <!-- Form-Setps::end -->
        </div>

        <div>
            <button type="button"name="add" id="add" value="add"
                class="rounded-lg bg-white w-40 py-2 mt-10 text-black">Add title step</button>
        </div>
    </main>
    <div class="w-full flex px-20 justify-between">
        <div class="flex items-center">
            <button class="bg-gray-400 w-40 border px-4 py-1.5 rounded-lg text-white">Save to Drafts</button>
        </div>

        <div class="w-full flex flex-row justify-end py-5 space-x-4">
            <a href="create_recipe2"
                class="bg-transparent text-white rounded lg:text-lg text-base focus:outline-none">
                <i class="fas fa-angle-left text-white mt-1 mr-1"></i>Previous</a>
            <a href="create_recipe4"
                class="bg-red-600 text-white w-28 py-2 flex justify-center item-center rounded-md">Next,Details
                <i class="fas fa-angle-right text-white mt-1 ml-1"></i></a>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            var counter = 0;

            /*Add Steps Row*/
            $("#addSteps").on("click", function() {
                var newSteps = $("<div>");
                var cols = "";

                cols +=
                    '<td><ol class=" relative border-l border-gray-500 flex flex-col dark:border-gray-700" id=""> <li class="ml-4 mb-10"> <div class="absolute w-3 h-3 bg-white rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div><input type="text"class="py-4 px-10 bg-gray-800 rounded-lg w-full text-start text-white justify-end placeholder:text-lg  placeholder:text-start"placeholder="In a medium bowl,whisk together the eggs,milk, and cinnamon"name="steps[]' +  counter + '" /> </li></ol></div></td>';
                cols +=
                    '<td><input type="button" class="btnDel btn btn-sm btn-danger" value="Delete"></td>';
                newSteps.append(cols);
                $("table.list").append(newSteps);
                counter++;
            });

            $("table.list").on("click", ".btnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>

</body>

</html>
