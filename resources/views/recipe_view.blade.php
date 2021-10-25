<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body class="antialiased">
    <div class="bg-fixed bg-center flex flex-col justify-center items-center"
        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('http://recipeat.in/styles/site/default/images/demo/slides/slide-image-01.jpg')">
<div class="flex w-full">
    <a href="/welcome" class="px-5 m-3 py-2 rounded-md bg-blue-400 text-white">Back</a></div>
        <div class="flex flex-col lg:flex-row w-full justify-center gap-5 pt-3">

            <div class="bg-white rounded-md w-full lg:w-1/3 p-5 rounded-lg order-2 lg:order-first">
                <h1 class="text-gray-700 font-bold tracking-wider">Description</h1>
                <p class="text-gray-500 mt-4">{{ $recipe->description }}</p>

                <div
                    class="flex w-full my-10 border-2 border-blue-700 rounded-sm p-2 bg-blue-50 justify-between items-center">
                    <div class="flex flex-col w-full justify-start gap-5 items-center">
                        <div class="w-full h-10 flex justify-center bg-blue-700 text-white rounded-lg">
                            <h1 class="items-center flex">Steps</h1>
                        </div>
                        <div>
                            <h1 class="font-bold tracking-wider text-gray-700">{{ $recipe->steps }}</h1>
                            <!-- <span class="tracking-wider uppercase text-xs text-blue-700 font-bold">change plan</span> -->
                        </div>
                    </div>
                    <div></div>
                </div>

                <h1 class="text-gray-700 font-bold tracking-wider">Taste Bud</h1>
                <div class="my-10">
                    <div class="flex justify-between items-center">
                        <div class="flex justify-items-start gap-5 items-stretch">
                            <h1 class="font-bold text-gray-700">Sweet</h1>
                            <div class="bg-gray-200 flex items-center justify-center text-sm w-14 h-8 mr-1">
                                {{ $recipe->bud_sweet }}</div>
                        </div>
                        <div class="flex justify-items-start gap-5 items-stretch">
                            <h1 class="font-bold text-gray-700">Salt</h1>
                            <div class="bg-gray-200 flex items-center justify-center text-sm w-14 h-8 mr-1">
                                {{ $recipe->bud_salt }}</div>
                        </div>
                        <div class="flex justify-items-start gap-5 items-stretch">
                            <h1 class="font-bold text-gray-700">Spicy</h1>
                            <div class="bg-gray-200 flex items-center justify-center text-sm w-14 h-8 mr-1">
                                {{ $recipe->bud_spicy }}</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-5">
                        <div class="flex justify-items-start gap-3 items-stretch">
                            <h1 class="font-bold text-gray-700">Bitter</h1>
                            <div class="flex items-center justify-center bg-gray-200 text-sm w-14 h-8 mr-1">
                                {{ $recipe->bud_bitter }}</div>
                        </div>
                        <div class="flex justify-items-start gap-3 items-stretch">
                            <h1 class="font-bold text-gray-700">astringent</h1>
                            <div class="bg-gray-200 flex items-center justify-center text-sm w-14 h-8 mr-1">
                                {{ $recipe->bud_astringent }}</div>
                        </div>
                        <div class="flex justify-items-start gap-5 items-stretch">
                            <h1 class="font-bold text-gray-700">Sour</h1>
                            <div class="bg-gray-200 flex items-center justify-center text-sm w-14 h-8 mr-1">
                                {{ $recipe->bud_sour }}</div>
                        </div>
                    </div>
                </div>

                <h1 class="uppercase font-bold tracking-widest text-blue-600 text-sm">Meta Description</h1>
                <textarea class="w-full outline-none border-2 border-gray-300 py-3  rounded-sm mt-4"> {{ $recipe->meta_description }}
                    </textarea>
            </div>
            <div class="w-full lg:w-2/5 order-1 lg:order-last flex flex-col justify-start gap-7">
                <div class="bg-white p-2 rounded-lg text-center">

                    <img src="https://spicecravings.com/wp-content/uploads/2021/04/Chicken-Biryani-Featured-2-500x375.jpg"
                        alt="" class="h-60 w-full object-cover content-center rounded-t-lg" />
                    <h1 class="text-center font-bold tracking-wider text-gray-700 mt-4">
                        cuisine: {{ $recipe->cuisine->cuisine }}</h1>
                    <p class="text-gray-500 mt-1 text-center">{{ $recipe->created_at }}</p>
                    <br />
                    <p class="bg-blue-700 py-2 px-4  text-white text-sm font-semibold">
                        {{ $recipe->recipe_name }}
                    </p>

                    <div class="mt-5 flex justify-between mx-5 mb-5">
                        <div class="text-left">
                            <h1 class="text-gray-500">Preparing Time</h1>
                            <p class="text-3xl text-gray-800">{{ $recipe->preparing_time }} (mins)</p>
                        </div>
                        <div class="text-left">
                            <h1 class="text-gray-500">Cooking Time</h1>
                            <p class="text-3xl text-gray-800">{{ $recipe->cooking_time }} (mins)</p>
                        </div>
                        <div class="text-left">
                            <h1 class="text-gray-500">Serve Peoples</h1>
                            <p class="text-3xl text-gray-800">{{ $recipe->serves_people }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6">
                    <h1 class="font-bold tracking-wider flex text-gray-800">
                        Calories :
                        <p class="text-sm text-gray-800 mt-1 ml-4">{{ $recipe->calories_in }}</p>
                    </h1>

                    <div class="my-4 flex justify-between gap-5">
                        <div
                            class="border-2 flex flex-col border-blue-400 rounded-lg py-1 w-full text-gray-700 text-center">
                            Created At<span>{{ $recipe->created_at }} </span></div>
                        <div
                            class="border-2 flex flex-col border-gray-200 rounded-lg py-1 w-full text-gray-700 text-center">
                            Updated At <span>{{ $recipe->updated_at }}</span></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="p-3">
        </div>
    </div>
</body>

</html>
