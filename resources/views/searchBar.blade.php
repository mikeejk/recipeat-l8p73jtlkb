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

<body class="antialiased bg-black">
    <!-- Search Bar -->
    <div class="pt-2 w-1/3 text-gray-600">
        <form action="/searchResults" method="GET" role="search">
            {{ csrf_field() }}
            <div class=" w-full rounded-lg flex" style="background-color:rgba(37, 37, 37, 1)">
                <button type="submit" class=" right-0 top-0 pl-4 ">
                    <svg class="text-gray-700 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
                <input type="search" name="term" id="term" value="{{ isset($_GET['term']) ? $_GET['term'] : '' }}"
                    class="h-10 px-5 w-96 rounded-lg text-sm focus:outline-none" style="background-color:
        rgba(37, 37, 37, 1)" type="search" name="search" placeholder="Search for recipes, chefs and more">

                {{-- <img src="images\explore_search_filter.png" class="my-2 mx-2 flex justify-end"/> --}}
                <svg class="my-2 mx-2 flex justify-end" width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="29" height="28" rx="6" fill="#39393A"/>
                    <path d="M21.1667 10.8333H17.1667C16.8933 10.8333 16.6667 10.6066 16.6667 10.3333C16.6667 10.0599 16.8933 9.83325 17.1667 9.83325H21.1667C21.44 9.83325 21.6667 10.0599 21.6667 10.3333C21.6667 10.6066 21.44 10.8333 21.1667 10.8333Z" fill="#FAFAFA"/>
                    <path d="M10.5 10.8333H7.83333C7.55999 10.8333 7.33333 10.6066 7.33333 10.3333C7.33333 10.0599 7.55999 9.83325 7.83333 9.83325H10.5C10.7733 9.83325 11 10.0599 11 10.3333C11 10.6066 10.7733 10.8333 10.5 10.8333Z" fill="#FAFAFA"/>
                    <path d="M13.1667 13.1667C11.6067 13.1667 10.3333 11.8933 10.3333 10.3333C10.3333 8.77333 11.6067 7.5 13.1667 7.5C14.7267 7.5 16 8.77333 16 10.3333C16 11.8933 14.7267 13.1667 13.1667 13.1667ZM13.1667 8.5C12.1533 8.5 11.3333 9.32 11.3333 10.3333C11.3333 11.3467 12.1533 12.1667 13.1667 12.1667C14.18 12.1667 15 11.3467 15 10.3333C15 9.32 14.18 8.5 13.1667 8.5Z" fill="#FAFAFA"/>
                    <path d="M21.1667 18.1667H18.5C18.2267 18.1667 18 17.9401 18 17.6667C18 17.3934 18.2267 17.1667 18.5 17.1667H21.1667C21.44 17.1667 21.6667 17.3934 21.6667 17.6667C21.6667 17.9401 21.44 18.1667 21.1667 18.1667Z" fill="#FAFAFA"/>
                    <path d="M11.8333 18.1667H7.83333C7.55999 18.1667 7.33333 17.9401 7.33333 17.6667C7.33333 17.3934 7.55999 17.1667 7.83333 17.1667H11.8333C12.1067 17.1667 12.3333 17.3934 12.3333 17.6667C12.3333 17.9401 12.1067 18.1667 11.8333 18.1667Z" fill="#FAFAFA"/>
                    <path d="M15.8333 20.4999C14.2733 20.4999 13 19.2266 13 17.6666C13 16.1066 14.2733 14.8333 15.8333 14.8333C17.3933 14.8333 18.6667 16.1066 18.6667 17.6666C18.6667 19.2266 17.3933 20.4999 15.8333 20.4999ZM15.8333 15.8333C14.82 15.8333 14 16.6533 14 17.6666C14 18.6799 14.82 19.4999 15.8333 19.4999C16.8467 19.4999 17.6667 18.6799 17.6667 17.6666C17.6667 16.6533 16.8467 15.8333 15.8333 15.8333Z" fill="#FAFAFA"/>
                    </svg>

            </div>
        </form>
    </div>
</body>

</html>
