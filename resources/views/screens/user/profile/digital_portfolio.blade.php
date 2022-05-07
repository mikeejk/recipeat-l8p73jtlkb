@extends('layouts.tailwind.guest')
@section('content')
    <div class="py-2 ml-4 mr-4 mt-4 flex justify-evenly items-start space-x-6">
        <div class="w-1/6 py-10 text-white rounded-lg pl-8 pr-2" style="background-color: #1F1F24;">
            <a href="" class="opacity-50 tracking-wider flex space-x-4 items-center py-3 no-underline">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 12.75C8.83 12.75 6.25 10.17 6.25 7C6.25 3.83 8.83 1.25 12 1.25C15.17 1.25 17.75 3.83 17.75 7C17.75 10.17 15.17 12.75 12 12.75ZM12 2.75C9.66 2.75 7.75 4.66 7.75 7C7.75 9.34 9.66 11.25 12 11.25C14.34 11.25 16.25 9.34 16.25 7C16.25 4.66 14.34 2.75 12 2.75Z"
                        fill="white" />
                    <path
                        d="M20.5901 22.75C20.1801 22.75 19.8401 22.41 19.8401 22C19.8401 18.55 16.3202 15.75 12.0002 15.75C7.68015 15.75 4.16016 18.55 4.16016 22C4.16016 22.41 3.82016 22.75 3.41016 22.75C3.00016 22.75 2.66016 22.41 2.66016 22C2.66016 17.73 6.85015 14.25 12.0002 14.25C17.1502 14.25 21.3401 17.73 21.3401 22C21.3401 22.41 21.0001 22.75 20.5901 22.75Z"
                        fill="white" />
                </svg>
                <h1 class="font-semibold text-lg">Profile</h1>
            </a>

            <a href="" class="text-white tracking-wider flex space-x-4 items-center py-3 no-underline">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 22.7498H7.99998C3.37998 22.7498 2.51998 20.5998 2.29998 18.5098L1.54998 10.4998C1.43998 9.44977 1.40998 7.89977 2.44998 6.73977C3.34998 5.73977 4.83998 5.25977 6.99998 5.25977H17C19.17 5.25977 20.66 5.74977 21.55 6.73977C22.59 7.89977 22.56 9.44977 22.45 10.5098L21.7 18.4998C21.48 20.5998 20.62 22.7498 16 22.7498ZM6.99998 6.74977C5.30998 6.74977 4.14998 7.07977 3.55998 7.73977C3.06998 8.27977 2.90998 9.10977 3.03998 10.3498L3.78998 18.3598C3.95998 19.9398 4.38998 21.2498 7.99998 21.2498H16C19.6 21.2498 20.04 19.9398 20.21 18.3498L20.96 10.3598C21.09 9.10977 20.93 8.27977 20.44 7.73977C19.85 7.07977 18.69 6.74977 17 6.74977H6.99998Z"
                        fill="white" />
                    <path
                        d="M16 6.75C15.59 6.75 15.25 6.41 15.25 6V5.2C15.25 3.42 15.25 2.75 12.8 2.75H11.2C8.75 2.75 8.75 3.42 8.75 5.2V6C8.75 6.41 8.41 6.75 8 6.75C7.59 6.75 7.25 6.41 7.25 6V5.2C7.25 3.44 7.25 1.25 11.2 1.25H12.8C16.75 1.25 16.75 3.44 16.75 5.2V6C16.75 6.41 16.41 6.75 16 6.75Z"
                        fill="white" />
                    <path
                        d="M12 16.75C9.25 16.75 9.25 15.05 9.25 14.03V13C9.25 11.59 9.59 11.25 11 11.25H13C14.41 11.25 14.75 11.59 14.75 13V14C14.75 15.04 14.75 16.75 12 16.75ZM10.75 12.75C10.75 12.83 10.75 12.92 10.75 13V14.03C10.75 15.06 10.75 15.25 12 15.25C13.25 15.25 13.25 15.09 13.25 14.02V13C13.25 12.92 13.25 12.83 13.25 12.75C13.17 12.75 13.08 12.75 13 12.75H11C10.92 12.75 10.83 12.75 10.75 12.75Z"
                        fill="white" />
                    <path
                        d="M14 14.7702C13.63 14.7702 13.3 14.4902 13.26 14.1102C13.21 13.7002 13.5 13.3202 13.91 13.2702C16.55 12.9402 19.08 11.9402 21.21 10.3902C21.54 10.1402 22.01 10.2202 22.26 10.5602C22.5 10.8902 22.43 11.3602 22.09 11.6102C19.75 13.3102 16.99 14.4002 14.09 14.7702C14.06 14.7702 14.03 14.7702 14 14.7702Z"
                        fill="white" />
                    <path
                        d="M9.99999 14.7799C9.96999 14.7799 9.93999 14.7799 9.90999 14.7799C7.16999 14.4699 4.49999 13.4699 2.18999 11.8899C1.84999 11.6599 1.75999 11.1899 1.98999 10.8499C2.21999 10.5099 2.68999 10.4199 3.02999 10.6499C5.13999 12.0899 7.56999 12.9999 10.07 13.2899C10.48 13.3399 10.78 13.7099 10.73 14.1199C10.7 14.4999 10.38 14.7799 9.99999 14.7799Z"
                        fill="white" />
                </svg>
                <h1 class="font-semibold text-lg">Digital Portfolio</h1>
            </a>

            <a href="" class="opacity-50 tracking-wider flex space-x-4 items-center py-3 no-underline">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 15.75C7.86 15.75 4.5 12.5 4.5 8.5C4.5 4.5 7.86 1.25 12 1.25C16.14 1.25 19.5 4.5 19.5 8.5C19.5 12.5 16.14 15.75 12 15.75ZM12 2.75C8.69 2.75 6 5.33 6 8.5C6 11.67 8.69 14.25 12 14.25C15.31 14.25 18 11.67 18 8.5C18 5.33 15.31 2.75 12 2.75Z"
                        fill="white" />
                    <path
                        d="M15.62 22.7501C15.34 22.7501 15.06 22.6801 14.77 22.5501L12.08 21.2801C12.05 21.2701 11.94 21.2701 11.9 21.2801L9.23002 22.5401C8.64002 22.8201 8.02001 22.8101 7.54001 22.5001C7.04001 22.1801 6.75002 21.5901 6.76002 20.8901L6.77 13.5101C6.77 13.1001 7.09 12.7401 7.52 12.7601C7.93 12.7601 8.27 13.1001 8.27 13.5101L8.26002 20.8901C8.26002 21.1101 8.32001 21.2201 8.35001 21.2301C8.37001 21.2401 8.46001 21.2501 8.60001 21.1801L11.28 19.9101C11.71 19.7101 12.3 19.7101 12.73 19.9101L15.42 21.1801C15.56 21.2501 15.65 21.2401 15.67 21.2301C15.7 21.2101 15.76 21.1001 15.76 20.8901V13.3301C15.76 12.9201 16.1 12.5801 16.51 12.5801C16.92 12.5801 17.26 12.9201 17.26 13.3301V20.8901C17.26 21.6001 16.97 22.1801 16.47 22.5001C16.21 22.6701 15.92 22.7501 15.62 22.7501Z"
                        fill="white" />
                </svg>
                <h1 class="font-semibold text-lg">My Skills</h1>
            </a>

            <a href="" class="opacity-50 tracking-wider flex space-x-4 items-center py-3 no-underline">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22 7.25H16C15.59 7.25 15.25 6.91 15.25 6.5C15.25 6.09 15.59 5.75 16 5.75H22C22.41 5.75 22.75 6.09 22.75 6.5C22.75 6.91 22.41 7.25 22 7.25Z"
                        fill="white" />
                    <path
                        d="M6 7.25H2C1.59 7.25 1.25 6.91 1.25 6.5C1.25 6.09 1.59 5.75 2 5.75H6C6.41 5.75 6.75 6.09 6.75 6.5C6.75 6.91 6.41 7.25 6 7.25Z"
                        fill="white" />
                    <path
                        d="M10 10.75C7.66 10.75 5.75 8.84 5.75 6.5C5.75 4.16 7.66 2.25 10 2.25C12.34 2.25 14.25 4.16 14.25 6.5C14.25 8.84 12.34 10.75 10 10.75ZM10 3.75C8.48 3.75 7.25 4.98 7.25 6.5C7.25 8.02 8.48 9.25 10 9.25C11.52 9.25 12.75 8.02 12.75 6.5C12.75 4.98 11.52 3.75 10 3.75Z"
                        fill="white" />
                    <path
                        d="M22 18.25H18C17.59 18.25 17.25 17.91 17.25 17.5C17.25 17.09 17.59 16.75 18 16.75H22C22.41 16.75 22.75 17.09 22.75 17.5C22.75 17.91 22.41 18.25 22 18.25Z"
                        fill="white" />
                    <path
                        d="M8 18.25H2C1.59 18.25 1.25 17.91 1.25 17.5C1.25 17.09 1.59 16.75 2 16.75H8C8.41 16.75 8.75 17.09 8.75 17.5C8.75 17.91 8.41 18.25 8 18.25Z"
                        fill="white" />
                    <path
                        d="M14 21.75C11.66 21.75 9.75 19.84 9.75 17.5C9.75 15.16 11.66 13.25 14 13.25C16.34 13.25 18.25 15.16 18.25 17.5C18.25 19.84 16.34 21.75 14 21.75ZM14 14.75C12.48 14.75 11.25 15.98 11.25 17.5C11.25 19.02 12.48 20.25 14 20.25C15.52 20.25 16.75 19.02 16.75 17.5C16.75 15.98 15.52 14.75 14 14.75Z"
                        fill="white" />
                </svg>
                <h1 class="font-semibold text-lg">Settings</h1>
            </a>

            <a href="" class="opacity-50 tracking-wider flex space-x-4 items-center py-3 no-underline">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z"
                        fill="white" />
                    <path
                        d="M8.81994 9.74994C7.96994 9.74994 7.11994 9.42994 6.46994 8.77994C6.17994 8.48994 6.17994 8.00994 6.46994 7.71994C6.75994 7.42994 7.23994 7.42994 7.52994 7.71994C8.23994 8.42994 9.39994 8.42994 10.1099 7.71994C10.3999 7.42994 10.8799 7.42994 11.1699 7.71994C11.4599 8.00994 11.4599 8.48994 11.1699 8.77994C10.5199 9.41994 9.66994 9.74994 8.81994 9.74994Z"
                        fill="white" />
                    <path
                        d="M15.18 9.74994C14.33 9.74994 13.48 9.42994 12.83 8.77994C12.54 8.48994 12.54 8.00994 12.83 7.71994C13.12 7.42994 13.6 7.42994 13.89 7.71994C14.6 8.42994 15.76 8.42994 16.47 7.71994C16.76 7.42994 17.24 7.42994 17.53 7.71994C17.82 8.00994 17.82 8.48994 17.53 8.77994C16.88 9.41994 16.03 9.74994 15.18 9.74994Z"
                        fill="white" />
                    <path
                        d="M12 19.15C9.1 19.15 6.75 16.79 6.75 13.9C6.75 12.99 7.49 12.25 8.4 12.25H15.6C16.51 12.25 17.25 12.99 17.25 13.9C17.25 16.79 14.9 19.15 12 19.15ZM8.4 13.75C8.32 13.75 8.25 13.82 8.25 13.9C8.25 15.97 9.93 17.65 12 17.65C14.07 17.65 15.75 15.97 15.75 13.9C15.75 13.82 15.68 13.75 15.6 13.75H8.4Z"
                        fill="white" />
                </svg>
                <h1 class="font-semibold text-lg">Tastebuds</h1>
            </a>

        </div>
        <div class="w-3/6 text-white rounded-lg">
            <section class="text-gray-600 body-font">
                <div class="flex">
                    <div class="flex py-4 rounded-lg">
                        <div class="flex">
                            @if ($chef_questions->image == '')
                                <img alt="Pic" src="assets/media//users/blank.png" />
                            @else
                                <img class="rounded-lg h-24 w-24" alt="Pic"
                                    src="{{ asset('storage/public/' . $chef_questions->image) }}" />
                            @endif
                            <div class="ml-5 w-4/6">
                                <h1 class="text-white font-semibold text-lg" style="font-family: 'Manrope', sans-serif;">
                                    {{ $chef_questions->name }}</h1>
                                <h3 class="text-white text-xs pt-2">Chef, food activist, Author of bestseller 2020,
                                    Gardener, fishing fanatic & father to three Chef, food activist, Author of
                                    bestseller 2020, Gardener, fishing fanatic & father</h3>
                            </div>
                            <div class="ml-2 w-2/6">
                                <div class="flex text-white font-semibold text-lg">
                                    <a class="flex w-full mt-2 justify-end space-x-2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.1733 14.8334H5.82665C2.55332 14.8334 1.15332 13.4334 1.15332 10.1601V10.0734C1.15332 7.11343 2.31999 5.68677 4.93332 5.4401C5.19999 5.4201 5.45332 5.6201 5.47999 5.89343C5.50665 6.16677 5.30665 6.41343 5.02665 6.4401C2.93332 6.63343 2.15332 7.6201 2.15332 10.0801V10.1668C2.15332 12.8801 3.11332 13.8401 5.82665 13.8401H10.1733C12.8867 13.8401 13.8467 12.8801 13.8467 10.1668V10.0801C13.8467 7.60677 13.0533 6.6201 10.92 6.4401C10.6467 6.41343 10.44 6.17343 10.4667 5.9001C10.4933 5.62677 10.7267 5.4201 11.0067 5.44677C13.66 5.67343 14.8467 7.10677 14.8467 10.0868V10.1734C14.8467 13.4334 13.4467 14.8334 10.1733 14.8334Z"
                                                fill="white" />
                                            <path
                                                d="M8 10.5C7.72667 10.5 7.5 10.2733 7.5 10V2.41333C7.5 2.14 7.72667 1.91333 8 1.91333C8.27333 1.91333 8.5 2.14 8.5 2.41333V10C8.5 10.2733 8.27333 10.5 8 10.5Z"
                                                fill="white" />
                                            <path
                                                d="M10.2333 4.39988C10.1066 4.39988 9.97998 4.35321 9.87998 4.25321L7.99998 2.37321L6.11998 4.25321C5.92664 4.44655 5.60664 4.44655 5.41331 4.25321C5.21998 4.05988 5.21998 3.73988 5.41331 3.54655L7.64664 1.31321C7.83998 1.11988 8.15998 1.11988 8.35331 1.31321L10.5866 3.54655C10.78 3.73988 10.78 4.05988 10.5866 4.25321C10.4933 4.35321 10.36 4.39988 10.2333 4.39988Z"
                                                fill="white" />
                                        </svg>
                                        <h1 class="font-semibold text-sm text-white tracking-wider">Share</h1>
                                    </a>

                                    <a href="/edit_portfolio" class="flex w-full mt-2 space-x-2 justify-end ">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99992 15.1666H5.99992C2.37992 15.1666 0.833252 13.6199 0.833252 9.99992V5.99992C0.833252 2.37992 2.37992 0.833252 5.99992 0.833252H7.33325C7.60659 0.833252 7.83325 1.05992 7.83325 1.33325C7.83325 1.60659 7.60659 1.83325 7.33325 1.83325H5.99992C2.92659 1.83325 1.83325 2.92659 1.83325 5.99992V9.99992C1.83325 13.0733 2.92659 14.1666 5.99992 14.1666H9.99992C13.0733 14.1666 14.1666 13.0733 14.1666 9.99992V8.66659C14.1666 8.39325 14.3933 8.16659 14.6666 8.16659C14.9399 8.16659 15.1666 8.39325 15.1666 8.66659V9.99992C15.1666 13.6199 13.6199 15.1666 9.99992 15.1666Z"
                                                fill="white" />
                                            <path
                                                d="M5.66664 11.7934C5.25997 11.7934 4.88664 11.6467 4.61331 11.38C4.28664 11.0534 4.14664 10.58 4.21997 10.08L4.50664 8.07337C4.55997 7.68671 4.81331 7.18671 5.08664 6.91337L10.34 1.66004C11.6666 0.333372 13.0133 0.333372 14.34 1.66004C15.0666 2.38671 15.3933 3.12671 15.3266 3.86671C15.2666 4.46671 14.9466 5.05337 14.34 5.65337L9.08664 10.9067C8.8133 11.18 8.3133 11.4334 7.92664 11.4867L5.91997 11.7734C5.83331 11.7934 5.74664 11.7934 5.66664 11.7934ZM11.0466 2.36671L5.7933 7.62004C5.66664 7.74671 5.51997 8.04004 5.4933 8.21337L5.20664 10.22C5.17997 10.4134 5.21997 10.5734 5.31997 10.6734C5.41997 10.7734 5.57997 10.8134 5.7733 10.7867L7.77997 10.5C7.9533 10.4734 8.2533 10.3267 8.3733 10.2L13.6266 4.94671C14.06 4.51337 14.2866 4.12671 14.32 3.76671C14.36 3.33337 14.1333 2.87337 13.6266 2.36004C12.56 1.29337 11.8266 1.59337 11.0466 2.36671Z"
                                                fill="white" />
                                            <path
                                                d="M13.2333 6.55343C13.1866 6.55343 13.14 6.54677 13.1 6.53343C11.3466 6.0401 9.95329 4.64677 9.45996 2.89343C9.38662 2.62677 9.53996 2.35343 9.80662 2.27343C10.0733 2.2001 10.3466 2.35343 10.42 2.6201C10.82 4.0401 11.9466 5.16677 13.3666 5.56677C13.6333 5.6401 13.7866 5.9201 13.7133 6.18677C13.6533 6.41343 13.4533 6.55343 13.2333 6.55343Z"
                                                fill="white" />
                                        </svg>
                                        <h1 class="font-semibold text-sm text-white tracking-wider">Edit</h1>
                                    </a>
                                </div>
                                <div class="flex text-white font-semibold justify-end mt-12">
                                    <a href="/" class="flex text-right items-end">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9999 11.8084C8.2249 11.8084 6.7749 10.3667 6.7749 8.58337C6.7749 6.80003 8.2249 5.3667 9.9999 5.3667C11.7749 5.3667 13.2249 6.80837 13.2249 8.5917C13.2249 10.375 11.7749 11.8084 9.9999 11.8084ZM9.9999 6.6167C8.91657 6.6167 8.0249 7.50003 8.0249 8.5917C8.0249 9.68337 8.90824 10.5667 9.9999 10.5667C11.0916 10.5667 11.9749 9.68337 11.9749 8.5917C11.9749 7.50003 11.0832 6.6167 9.9999 6.6167Z"
                                                fill="#F7111D" />
                                            <path
                                                d="M9.9999 18.9665C8.76657 18.9665 7.5249 18.4998 6.55824 17.5748C4.0999 15.2082 1.38324 11.4332 2.40824 6.9415C3.33324 2.8665 6.89157 1.0415 9.9999 1.0415C9.9999 1.0415 9.9999 1.0415 10.0082 1.0415C13.1166 1.0415 16.6749 2.8665 17.5999 6.94984C18.6166 11.4415 15.8999 15.2082 13.4416 17.5748C12.4749 18.4998 11.2332 18.9665 9.9999 18.9665ZM9.9999 2.2915C7.5749 2.2915 4.45824 3.58317 3.63324 7.2165C2.73324 11.1415 5.1999 14.5248 7.43324 16.6665C8.8749 18.0582 11.1332 18.0582 12.5749 16.6665C14.7999 14.5248 17.2666 11.1415 16.3832 7.2165C15.5499 3.58317 12.4249 2.2915 9.9999 2.2915Z"
                                                fill="#F7111D" />
                                        </svg>
                                        <h1 class="font-semibold text-sm text-white pl-2">Saint-Pere-sur-Loire</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font mt-2">
                <div class="py-2 rounded-md" style="background-color: #1F1F24;">
                    <div class="flex border-l-4 border-red-500 items-center justify-start space-x-4 px-1 w-full">
                        <h1 class="pl-3 contant-center text-white text-lg font-medium"
                            style="font-family: 'Manrope', sans-serif;">Proficient in</h1>
                        <div class="flex items-center space-x-4 py-2 pl-10">
                            <div class="py-1.5 px-2 w-auto text-xs text-center rounded text-white tracking-widest"
                                style="background:#303030; font-family: 'Manrope', sans-serif;">
                                NUTRITION</div>
                            <div class="py-1.5 px-2 w-auto text-xs text-center rounded text-white tracking-widest"
                                style="background:#303030; font-family: 'Manrope', sans-serif;">SUPERVISING</div>
                            <div class="py-1.5 px-2 w-auto text-xs text-center rounded text-white tracking-widest"
                                style="background:#303030; font-family: 'Manrope', sans-serif;">MENU CREATION</div>
                            <div class="py-1.5 px-2 w-auto text-xs text-center rounded text-grey-800 tracking-widest font-thin"
                                style="font-family: 'Manrope', sans-serif;">
                                +15 More</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font mt-2">
                <div class="py-2 rounded-md">
                    <div class="flex items-center justify-start space-x-4 px-1 w-full">
                        <h1 class="contant-center text-white text-lg font-medium"
                            style="font-family: 'Manrope', sans-serif;">Languages Known</h1>
                        <div class="flex items-center space-x-4 py-2 px-6">
                            <div class="flex py-1.5 px-2 text-xs text-white font-light tracking-wider"
                                style="font-family: 'Manrope', sans-serif;">
                                English
                                <div
                                    class="ml-2 bg-gray-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                                    <h6 class="text-xs">5</h6>
                                </div>
                            </div>
                            <div class="flex py-1.5 px-2 text-xs text-white font-light tracking-wider"
                                style="font-family: 'Manrope', sans-serif;">
                                French
                                <div
                                    class="ml-2 bg-gray-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                                    <h6 class="text-xs">5</h6>
                                </div>
                            </div>
                            <div class="flex py-1.5 px-2 text-xs text-white font-light tracking-wider"
                                style="font-family: 'Manrope', sans-serif;">
                                Dutch
                                <div
                                    class="ml-2 bg-gray-500 text-white flex items-center justify-center rounded-full h-4 w-4">
                                    <h6 class="text-xs">3</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font">
                <div class="py-2 rounded-md">
                    <div class="flex items-center space-x-4 px-1 w-full">
                        <h1 class="contant-center text-white text-lg font-medium w-3/4"
                            style="font-family: 'Manrope', sans-serif;">Carrer Timeline</h1>
                        <div class="flex items-center py-2 justify-end w-1/4">
                            <div class="bg-white py-1.5 px-1 w-auto text-xs text-center rounded text-black "
                                style="font-family: 'Manrope', sans-serif;">
                                <span class="pr-1">+</span>Add to Timeline
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font">
                <div class="py-3 px-3 rounded-md" style="background-color: #1F1F24;">
                    <div class="flex items-center justify-start space-x-4 px-1 w-full">
                        <span class="flex px-1 contant-center text-white text-xs rounded py-1"
                            style="background-color: #EB2FFC;">CURRENT STATUS</span>
                    </div>
                    <div class="flex items-center space-x-4 px-1 pb-1">
                        <h1 class="flex text-white text-xl font-medium pt-2 w-1/2"
                            style="font-family: 'Manrope', sans-serif;">Senior Executive Chef,</h1>
                        <div class="flex items-end justify-end w-1/2">
                            <div class="flex text-white text-xl font-base px-1" style="font-family: 'Manrope', sans-serif;">
                                2020 - Present
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 px-1">
                        <h1 class="flex text-white text-sm font-thin w-1/2" style="font-family: 'Manrope', sans-serif;">
                            D'Italian Chain of Restaurants</h1>
                        <div class="flex items-end font-thin justify-end w-1/2">
                            <div class="flex text-white text-sm font-light px-1"
                                style="font-family: 'Manrope', sans-serif;">
                                See more <span class="pl-2 mt-1"><svg width="5" height="10" viewBox="0 0 5 10"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.94291 5.24237C4.94291 5.3936 4.89183 5.54416 4.78902 5.66687L1.47245 9.64653C1.2383 9.92776 0.819752 9.96623 0.538507 9.73143C0.257262 9.4973 0.219453 9.07943 0.453603 8.79754L3.42259 5.23507L0.560396 1.67858C0.33089 1.39337 0.375995 0.975504 0.661219 0.74601C0.946444 0.516516 1.36367 0.561619 1.59384 0.846828L4.79631 4.82649C4.89382 4.94787 4.94291 5.09512 4.94291 5.24237"
                                            fill="#454545" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <!-- component -->
                <div class="w-full h-full">
                    <div class="relative wrap overflow-hidden p-10 h-full">
                        <div class="border-2-2 absolute border-opacity-20 border-white h-full border" style="left: 358px">
                        </div>

                        <!-- right timeline -->
                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="flex order-1 w-5/12 justify-end ">
                                <h3><span class="text-white text-manrope font-bold text-xl">2019</span><br><span
                                        class="text-manrope font-bold text-xl" style="color: #494949;">2020</span></h3>
                            </div>
                            <div
                                class="z-20 flex items-center order-1 bg-black shadow-xl w-4 h-4 rounded-full border border-white">
                            </div>
                            <div class="order-1 rounded-lg shadow-xl w-5/12 px-4 py-4 border-t border-white"
                                style="background-color: #141414;">
                                <h3 class="text-montserrat mb-1 font-bold text-white text-xl">Junior Pastry Chef</h3>
                                <p
                                    class="opacity-80 flex text-montserrat text-sm leading-snug tracking-wide text-white text-opacity-100">
                                    D'Italian Chain of
                                    Restaurants</p>
                                <h3 class="flex text-montserrat mb-1 text-white text-xs mt-2"><span
                                        class="pr-1 "><svg width="15" height="15" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9999 11.8084C8.2249 11.8084 6.7749 10.3667 6.7749 8.58337C6.7749 6.80003 8.2249 5.3667 9.9999 5.3667C11.7749 5.3667 13.2249 6.80837 13.2249 8.5917C13.2249 10.375 11.7749 11.8084 9.9999 11.8084ZM9.9999 6.6167C8.91657 6.6167 8.0249 7.50003 8.0249 8.5917C8.0249 9.68337 8.90824 10.5667 9.9999 10.5667C11.0916 10.5667 11.9749 9.68337 11.9749 8.5917C11.9749 7.50003 11.0832 6.6167 9.9999 6.6167Z"
                                                fill="#707070" />
                                            <path
                                                d="M9.9999 18.9665C8.76657 18.9665 7.5249 18.4998 6.55824 17.5748C4.0999 15.2082 1.38324 11.4332 2.40824 6.9415C3.33324 2.8665 6.89157 1.0415 9.9999 1.0415C9.9999 1.0415 9.9999 1.0415 10.0082 1.0415C13.1166 1.0415 16.6749 2.8665 17.5999 6.94984C18.6166 11.4415 15.8999 15.2082 13.4416 17.5748C12.4749 18.4998 11.2332 18.9665 9.9999 18.9665ZM9.9999 2.2915C7.5749 2.2915 4.45824 3.58317 3.63324 7.2165C2.73324 11.1415 5.1999 14.5248 7.43324 16.6665C8.8749 18.0582 11.1332 18.0582 12.5749 16.6665C14.7999 14.5248 17.2666 11.1415 16.3832 7.2165C15.5499 3.58317 12.4249 2.2915 9.9999 2.2915Z"
                                                fill="#707070" />
                                        </svg>
                                    </span>Saint-pere-sur-Loire</h3>
                            </div>
                        </div>

                        <!-- left timeline -->
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="flex order-1 w-5/12 justify-start ">
                                <h3><span class="text-white text-manrope font-bold text-xl">2015</span><br><span
                                        class="text-manrope font-bold text-xl" style="color: #494949;">2018</span></h3>
                            </div>
                            <div
                                class="z-20 flex items-center order-1 bg-black shadow-xl w-4 h-4 rounded-full border border-white">
                            </div>
                            <div class="order-1 rounded-lg shadow-xl w-5/12 px-4 py-4 border border-cyan-200"
                                style="background-color: #141414;">
                                <h3 class="text-montserrat mb-1 font-bold text-white text-xl">Deploma in Food Tech.</h3>
                                <p
                                    class="opacity-80 flex text-montserrat text-sm leading-snug tracking-wide text-white text-opacity-100">
                                    Artisans Institute Of Baking</p>
                                <h3 class="flex text-montserrat mb-1 text-white text-xs mt-2"><span
                                        class="pr-1 "><svg width="15" height="15" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9999 11.8084C8.2249 11.8084 6.7749 10.3667 6.7749 8.58337C6.7749 6.80003 8.2249 5.3667 9.9999 5.3667C11.7749 5.3667 13.2249 6.80837 13.2249 8.5917C13.2249 10.375 11.7749 11.8084 9.9999 11.8084ZM9.9999 6.6167C8.91657 6.6167 8.0249 7.50003 8.0249 8.5917C8.0249 9.68337 8.90824 10.5667 9.9999 10.5667C11.0916 10.5667 11.9749 9.68337 11.9749 8.5917C11.9749 7.50003 11.0832 6.6167 9.9999 6.6167Z"
                                                fill="#707070" />
                                            <path
                                                d="M9.9999 18.9665C8.76657 18.9665 7.5249 18.4998 6.55824 17.5748C4.0999 15.2082 1.38324 11.4332 2.40824 6.9415C3.33324 2.8665 6.89157 1.0415 9.9999 1.0415C9.9999 1.0415 9.9999 1.0415 10.0082 1.0415C13.1166 1.0415 16.6749 2.8665 17.5999 6.94984C18.6166 11.4415 15.8999 15.2082 13.4416 17.5748C12.4749 18.4998 11.2332 18.9665 9.9999 18.9665ZM9.9999 2.2915C7.5749 2.2915 4.45824 3.58317 3.63324 7.2165C2.73324 11.1415 5.1999 14.5248 7.43324 16.6665C8.8749 18.0582 11.1332 18.0582 12.5749 16.6665C14.7999 14.5248 17.2666 11.1415 16.3832 7.2165C15.5499 3.58317 12.4249 2.2915 9.9999 2.2915Z"
                                                fill="#707070" />
                                        </svg>
                                    </span>Paris, FR</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="w-2/6 py-2 top-0">
            <section class="text-gray-600 body-font">
                <div class="pt-2 rounded" style="background-color: #1F1F24;">
                    <div class="rounded-b-xl" style="background-color: #303030;">
                        <div class="border-t-4 border-cyan-400 px-6 py-4">
                            <h1 class="text-montserrat flex text-sm text-white font-light mt-3">
                                EDUCATION
                            </h1>
                            <h1 class="text-monrope pt-5 flex text-2xl text-white font-semibold tracking-wider">
                                Artisans Institute Of Baking
                            </h1>
                            <div class="flex">
                                <h1
                                    class="text-montserrat flex py-2 px-2 mt-3 w-auto text-xs text-center rounded text-white tracking-widest w-1/6">
                                    2015-18</h1>
                                <h1
                                    class="text-montserrat flex py-1.5 px-12 mt-3 w-auto text-xs text-center rounded text-white tracking-widest w-5/6">
                                    <span class="pr-1"><svg width="15" height="15" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9999 11.8084C8.2249 11.8084 6.7749 10.3667 6.7749 8.58337C6.7749 6.80003 8.2249 5.3667 9.9999 5.3667C11.7749 5.3667 13.2249 6.80837 13.2249 8.5917C13.2249 10.375 11.7749 11.8084 9.9999 11.8084ZM9.9999 6.6167C8.91657 6.6167 8.0249 7.50003 8.0249 8.5917C8.0249 9.68337 8.90824 10.5667 9.9999 10.5667C11.0916 10.5667 11.9749 9.68337 11.9749 8.5917C11.9749 7.50003 11.0832 6.6167 9.9999 6.6167Z"
                                                fill="#707070" />
                                            <path
                                                d="M9.9999 18.9665C8.76657 18.9665 7.5249 18.4998 6.55824 17.5748C4.0999 15.2082 1.38324 11.4332 2.40824 6.9415C3.33324 2.8665 6.89157 1.0415 9.9999 1.0415C9.9999 1.0415 9.9999 1.0415 10.0082 1.0415C13.1166 1.0415 16.6749 2.8665 17.5999 6.94984C18.6166 11.4415 15.8999 15.2082 13.4416 17.5748C12.4749 18.4998 11.2332 18.9665 9.9999 18.9665ZM9.9999 2.2915C7.5749 2.2915 4.45824 3.58317 3.63324 7.2165C2.73324 11.1415 5.1999 14.5248 7.43324 16.6665C8.8749 18.0582 11.1332 18.0582 12.5749 16.6665C14.7999 14.5248 17.2666 11.1415 16.3832 7.2165C15.5499 3.58317 12.4249 2.2915 9.9999 2.2915Z"
                                                fill="#707070" />
                                        </svg>
                                    </span>Paris, FR
                                </h1>
                            </div>
                            <div class="flex items-center">
                                <h1
                                    class="text-monrope flex py-2 px-2 mt-3 w-auto text-base text-center rounded text-white tracking-widest w-4/6">
                                    <span class="pr-1"><svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0101 16.9998C11.1601 16.9998 10.3001 16.7798 9.63007 16.3498L3.61007 12.4198C2.49007 11.6898 1.82007 10.4598 1.82007 9.11979C1.82007 7.77979 2.49007 6.54979 3.61007 5.81979L9.64007 1.89979C10.9801 1.02979 13.0701 1.02979 14.4001 1.90979L20.3901 5.83979C21.5001 6.56979 22.1701 7.79979 22.1701 9.12979C22.1701 10.4598 21.5001 11.6898 20.3901 12.4198L14.4001 16.3498C13.7301 16.7898 12.8701 16.9998 12.0101 16.9998ZM12.0101 2.74979C11.4401 2.74979 10.8701 2.87979 10.4601 3.15979L4.44007 7.07979C3.74007 7.53979 3.33007 8.27979 3.33007 9.11979C3.33007 9.95979 3.73007 10.6998 4.44007 11.1598L10.4601 15.0898C11.2901 15.6298 12.7501 15.6298 13.5801 15.0898L19.5701 11.1598C20.2701 10.6998 20.6701 9.95979 20.6701 9.11979C20.6701 8.27979 20.2701 7.53979 19.5701 7.07979L13.5801 3.14979C13.1601 2.88979 12.5901 2.74979 12.0101 2.74979Z"
                                                fill="#707070" />
                                            <path
                                                d="M11.9999 22.7501C11.5599 22.7501 11.1099 22.6901 10.7499 22.5701L7.55994 21.5101C6.04994 21.0101 4.85994 19.3601 4.86994 17.7701L4.87994 13.0801C4.87994 12.6701 5.21994 12.3301 5.62994 12.3301C6.03994 12.3301 6.37994 12.6701 6.37994 13.0801L6.36994 17.7701C6.36994 18.7101 7.14994 19.7901 8.03994 20.0901L11.2299 21.1501C11.6299 21.2801 12.3699 21.2801 12.7699 21.1501L15.9599 20.0901C16.8499 19.7901 17.6299 18.7101 17.6299 17.7801V13.1401C17.6299 12.7301 17.9699 12.3901 18.3799 12.3901C18.7899 12.3901 19.1299 12.7301 19.1299 13.1401V17.7801C19.1299 19.3701 17.9499 21.0101 16.4399 21.5201L13.2499 22.5801C12.8899 22.6901 12.4399 22.7501 11.9999 22.7501Z"
                                                fill="#707070" />
                                            <path
                                                d="M21.3999 15.75C20.9899 15.75 20.6499 15.41 20.6499 15V9C20.6499 8.59 20.9899 8.25 21.3999 8.25C21.8099 8.25 22.1499 8.59 22.1499 9V15C22.1499 15.41 21.8099 15.75 21.3999 15.75Z"
                                                fill="#707070" />
                                        </svg>
                                    </span>Deploma in Food Tech.
                                </h1>
                                <h1
                                    class="text-monrope flex py-2 px-2 mt-3 w-auto text-base text-center rounded text-white tracking-widest w-2/6">
                                    <span class="pr-1"><svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22.7501C11.4 22.7501 10.81 22.6101 10.33 22.3401L5.60001 19.6101C3.64001 18.2901 3.51001 18.0501 3.51001 15.9801V11.0201C3.51001 8.95006 3.64001 8.71006 5.56001 7.42006L10.34 4.66006C11.29 4.11006 12.72 4.11006 13.67 4.66006L18.4 7.39006C20.36 8.71006 20.49 8.95006 20.49 11.0201V15.9801C20.49 18.0501 20.36 18.2901 18.44 19.5801L13.66 22.3401C13.19 22.6201 12.59 22.7501 12 22.7501ZM12 5.75006C11.66 5.75006 11.32 5.82006 11.08 5.96006L6.35001 8.69006C5.01001 9.60006 5.01001 9.60006 5.01001 11.0201V15.9801C5.01001 17.4001 5.01001 17.4001 6.40001 18.3401L11.09 21.0401C11.57 21.3201 12.44 21.3201 12.92 21.0401L17.65 18.3101C18.99 17.4001 18.99 17.4001 18.99 15.9801V11.0201C18.99 9.60006 18.99 9.60006 17.6 8.66006L12.91 5.96006C12.68 5.82006 12.34 5.75006 12 5.75006Z"
                                                fill="#707070" />
                                            <path
                                                d="M17.5 8.38C17.09 8.38 16.75 8.04 16.75 7.63V5C16.75 3.42 16.08 2.75 14.5 2.75H9.5C7.92 2.75 7.25 3.42 7.25 5V7.56C7.25 7.97 6.91 8.31 6.5 8.31C6.09 8.31 5.75 7.98 5.75 7.56V5C5.75 2.58 7.08 1.25 9.5 1.25H14.5C16.92 1.25 18.25 2.58 18.25 5V7.63C18.25 8.04 17.91 8.38 17.5 8.38Z"
                                                fill="#707070" />
                                            <path
                                                d="M13.63 17.6301C13.42 17.6301 13.2 17.5901 12.98 17.5001L12 17.1201L11.02 17.5101C10.49 17.7201 9.94999 17.6701 9.54999 17.3801C9.14999 17.0901 8.93999 16.5901 8.96999 16.0201L9.02999 14.9701L8.35999 14.1601C7.99999 13.7101 7.87999 13.1901 8.03999 12.7101C8.18999 12.2401 8.59999 11.8801 9.14999 11.7401L10.17 11.4801L10.74 10.5901C11.35 9.63012 12.66 9.63012 13.27 10.5901L13.84 11.4801L14.86 11.7401C15.41 11.8801 15.82 12.2401 15.97 12.7101C16.12 13.1801 16 13.7101 15.64 14.1501L14.97 14.9601L15.03 16.0101C15.06 16.5801 14.85 17.0701 14.45 17.3701C14.21 17.5401 13.93 17.6301 13.63 17.6301ZM9.51999 13.2001L10.19 14.0101C10.42 14.2801 10.55 14.7101 10.53 15.0601L10.47 16.1101L11.45 15.7201C11.78 15.5901 12.22 15.5901 12.55 15.7201L13.53 16.1101L13.47 15.0601C13.45 14.7101 13.58 14.2901 13.81 14.0101L14.48 13.2001L13.46 12.9401C13.12 12.8501 12.76 12.5901 12.57 12.3001L12.01 11.4201L11.44 12.3001C11.25 12.6001 10.89 12.8601 10.55 12.9501L9.51999 13.2001Z"
                                                fill="#707070" />
                                        </svg>
                                    </span>8.4
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
