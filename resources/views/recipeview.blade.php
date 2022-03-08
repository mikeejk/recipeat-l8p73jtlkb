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
    <div class="bg-fixed bg-cover flex flex-col justify-center items-center bg-no-repeat"
        style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)), url('https://image.shutterstock.com/image-photo/dark-food-background-empty-black-260nw-1682369737.jpg')">
        <div class="flex w-full">
            <a href="\search_ingredient" class="px-5 m-3 py-2 rounded-md bg-blue-400 text-white">Back</a>
        </div>
        <div class="flex flex-col lg:flex-row w-full justify-center gap-5 pt-3">

            <div class="bg-white rounded-md w-full lg:w-1/3 p-5 rounded-lg order-2 lg:order-first">


                <!-- <button class="bg-blue-500 flex items-center text-white px-2 py-1 rounded">Follow
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                          </svg>
                    </button> -->
                <form class="form" action="/recipeview/{recipes->recipe}" method="post">
                    @csrf
                    <div class="flex w-full justify-between">

                        @foreach ($pinboards as $pin)
                            <input type="hidden" name="recipe_id" id="recipe_id" value="{{ $recipe->id }}" />
                            <button type="submit"
                                class="bg-blue-500 flex items-center text-white px-2 py-1 rounded-full"
                                name="pinboard_id" id="pinboard_id" value="{{ $pin->id }} ">
                                {{ $pin->pin_name }}
                            </button>
                        @endforeach
                    </div>
                </form>
                <h1 class="text-gray-700 flex  items-center font-bold tracking-wider">Description</h1>
                <p class="text-gray-500 mt-2">{{ $recipe->description }}</p>
                <div class="flex w-full my-5 border-2 border-blue-700 rounded-sm p-2 bg-blue-50 justify-between items-center">
                    <div class="flex flex-col w-full justify-start gap-5 items-center">
                        <div class="w-full h-10 flex justify-center bg-blue-700 text-white rounded-lg">
                            <h1 class="items-center flex">Steps</h1>
                        </div>
                        <div>
                            @foreach ($recipe_steps as $steps)
                            {{-- @for ($i = 1; $i < $count; $i++) --}}

                            {{-- <h1 class="font-bold tracking-wider text-gray-700">Steps{{ $i }}:{{ $steps }}</h1> --}}
                            <h1 class="font-bold tracking-wider text-gray-700">{{ $steps }}</h1>

                            {{-- @endfor --}}
                            @endforeach
                            <!-- <span class="tracking-wider uppercase text-xs text-blue-700 font-bold">change plan</span> -->
                        </div>

                    </div>
                    <div></div>
                </div>
                <div class="flex w-full my-5 border-2 border-green-700 rounded-sm p-1 bg-blue-50 justify-between items-center">
                    <div class="flex flex-col w-full justify-start gap-5 items-center">
                        <div class="w-full h-7 flex justify-center bg-green-700 text-white rounded-lg">
                            <h1 class="items-center flex">Ingredients</h1>
                        </div>
                        <div>
                            <table>
                                <thead>
                                    <tr class="unread bggrn">
                                        <th>Ingredient</th>
                                        <th>Quantity</th>
                                        <th>Measurement</th>

                                    </tr>
                                </thead>
                                <tbody class="capital">

                                     @foreach($recipe_ingredients as $ingredient)

                                    <tr class="profile-table">

                                        <td> {{ $ingredient->ingredient->ingredient }}  </td>
                                        <td> {{  $ingredient->quantity }} </td>
                                        <td>{{ $ingredient->measurement->measurement }}</td>
                                    </tr>

                                    @endforeach

                                 </tbody>
                            </table>
                            {{-- @foreach ($recipe_ingredients as $ingredient)
                                <h1 class="font-bold tracking-wider text-gray-700">{{ $ingredient->ingredient()->ingredient}}</h1>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                <h1 class="uppercase font-bold tracking-widest text-green-600 text-sm">Comments</h1>
                <div class="flex border-2 mt-2 h-56  overflow-y-auto">
                    <div class="p-2 w-full">
                        {{--  <div class="w-full card-body">

                            @include('partials.recipes.replies', ['comments' => $recipe->comments, 'recipe_id' =>
                            $recipe->id])
                            <hr />
                        </div>  --}}
                        <div class="card-body w-full">
                            <h5 class="mt-2">Leave a comment</h5>
                            <form  method="post" action="{{ route('comment.add') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="comment" placeholder="enter your comment here.."
                                        class="form-control p-2 w-full border-b-2 mb-4  focus:outline-none  focus:ring-0" />
                                    <input type="hidden" name="recipe_id" value="{{ $recipe->id }}" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="px-2 py-1 bg-green-300 mb-2 text-white py-0"
                                        style="font-size: 0.8em;" value="Add Comment" />

                                </div>
                            </form>
                            <div class="w-full card-body">
                                @include('partials.recipes.replies', ['comments' => $recipe->comments, 'recipe_id' =>$recipe->id])
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="uppercase font-bold tracking-widest text-blue-600 text-sm mt-4">Taste Bud</h1>
                <div class="py-5">
                    <div class="flex justify-between items-start ">
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
                <p class="w-full outline-none border-2 border-gray-300 py-3  rounded-sm mt-4"> {{ $recipe->meta_description }}
                    </p>
            </div>
            <div class="w-full lg:w-2/5 order-1 lg:order-last flex flex-col justify-start gap-7">
                <div class="bg-white p-2 rounded-lg text-center">

                    <img src="{{ $recipe->getFirstMediaUrl('cover') }}" alt=""
                        class="h-60 w-full object-cover content-center rounded-t-lg" />
                    <h1 class="text-center font-bold tracking-wider text-gray-700 mt-4">
                        cuisine: {{ $recipe->cuisine->cuisine }}</h1>
                    <p class="text-gray-500 mt-1 text-center">{{ $recipe->created_at->diffForHumans() }}</p>
                    <br />
                    @include('like', ['model' => $recipe])
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
                            Created At<span>{{ $recipe->created_at->diffForHumans() }} </span></div>
                        <div
                            class="border-2 flex flex-col border-gray-200 rounded-lg py-1 w-full text-gray-700 text-center">
                            Updated At <span>{{ $recipe->updated_at->diffForHumans() }}</span></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="p-3">
        </div>
    </div>
</body>

</html>
