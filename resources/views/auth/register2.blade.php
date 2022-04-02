<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Recipeat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Roboto+Slab:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- end:: Custom Stylesheets -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {}

        input[type=radio]:checked+label {
            border: 1px solid indigo;
            background-color: white;
            color: black;
        }

        input[type=radio]:checked+label>span.icon {
            display: inline-block;
        }

        div::-webkit-scrollbar {
            display: none;
        }

        .hitter {
            display: none;
        }

        .seat {}

        .selected {
            border-style: inset;
            background-color: rgb(240, 30, 30);
            color: rgb(255, 255, 255);
        }

        .reserved {
            border-style: outset;
            background-color: gray;
            color: darkred;
        }

    </style>
</head>

<body class="antialiased overflow-x-hidden">
    <section class="" style="background: rgba(21, 17, 17, 1);">
        <div class="flex items-center w-full">
            <div class="w-1/2 flex justify-end ">
                <img class="h-48 w-52 top-3 -mr-20" src="images\logo 1.png" alt="logo" />
            </div>
            <div class="w-1/2 flex justify-center">
                <div class="flex justify-center items-center text-white text-base font normal space-x-4  w-full">
                    <h1 class="text-lg font-semibold">Already have an account?</h1>
                    <a href="/login1"
                        class="flex justify-center items-center bg-red-600 text-white w-24 h-10 px-2 rounded">Login</a>
                </div>
            </div>
        </div>

        <h1 class="text-center py-6 text-white text-4xl font-bold" style="font-family: 'Manrope', sans-serif;">Pick
            topics that interests you</h1>
        <div class="w-1/2 mx-auto  py-10">
            <form method="POST" action="/storeUser2">
                @csrf

            <div class="flex justify-between w-full mx-auto ">
                <h1 class="text-white font-bold">Step 2 <span class="font-normal text-gray-300">of 4</span></h1>
                <div class="flex items-center justify-end space-x-4 mb-4 text-white">
                    Skip
                    <i class="fas fa-angle-right text-white text-xl mt-1"></i>
                </div>

            </div>
            <div class="w-full h-1 bg-gray-400 rounded-xl">
                <div class="w-1/2 h-full bg-white rounded-xl"></div>
            </div>
            <h1 id="text" class="text-white py-4 text-lg text-left" style="font-family: 'Manrope', sans-serif;">Please select a
                minimum of 3 topics</h1>
            <div class="w-full mx-auto py-5">
                <div class="w-full mx-auto py-3">
                    <h1 class="text-white py-4" style="font-family: 'Manrope', sans-serif;">Diets</h1>
                    <div class="flex space-x-5 text-white ">
                        <input class="hidden " id="Vegetarian" name="diets" type="radio" value="Vegetarian" {{{ (isset($product->diets) && $product->diets == 'Vegetarian') ? "checked" : "" }}} checked />
                        <label class="flex justify-center items-center   border rounded-md p-2 " for="Vegetarian">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2 "></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Vegetarian</span>
                        </label>

                        <input class="hidden" id="Vegan" name="diets" type="radio" value="Vegan" {{{ (isset($product->diets) && $product->diets == 'Vegan') ? "checked" : "" }}} />
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

                        <input class="hidden" id="Paleo" name="diets" type="radio" value="Paleo" {{{ (isset($product->diets) && $product->diets == 'Paleo') ? "checked" : "" }}} />
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

                        <input class="hidden" id="Pescatarian" name="diets" type="radio" value="Pescatarian" {{{ (isset($product->diets) && $product->diets == 'Pescatarian') ? "checked" : "" }}} />
                        <label class="flex justify-center items-center  border rounded-md p-2 " for="Pescatarian">
                            <span class='hidden icon bg-white'><i
                                    class="fas fa-check border border-gray-600 bg-white text-black rounded-full text-xs font-semibold p-1 mr-2"></i></span>

                            <span class="text-uzs text-base font-Rubik font-semibold">Pescatarian</span>
                        </label>

                    </div>
                </div>

                <div class="w-full mx-auto py-3 border-r-2 border-gray-500">
                    <h1 class="text-white py-4" style="font-family: 'Manrope', sans-serif;">Cuisines</h1>
                    <div class="flex space-x-8 text-white overflow-auto container" id="items-container">

                        <input id="seats" name="cusinies" class="hidden text-gray-600" value="">
                        <br>
                        <br>

                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="Chinese" id="Chinese">
                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="Italian" id="Italian">
                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="Arabic" id="Arabic">
                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="Indian" id="Indian">
                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="American" id="American">
                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="Asian" id="Asian">
                        <input type="button" class="seat px-4  text-white border h-10 rounded-md bg-transparent"
                            value="Mexian" id="Mexian">


                        {{-- <div class="wrap ">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">
                                <div class="flex space-x-2 bg-gray-600 w-1/2 -mx-auto py-5">
                                    <h1 class="bg-red-600 text-white rounded-lg px-2"><input type="checkbox">Raja</h1>
                                    <h1>Ramesh</h1>
                                    <h1>King</h1>
                                    <h1>legend</h1>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <button class="but">SHOW / hide</button>
                            <div class="content w-full h-auto absolute hidden">king</div>
                        </div>

                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>

                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>

                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>

                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>


                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>


                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>
                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>
                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>
                        <div class="wrap">
                            <button class="but">SHOW / HIDE</button>
                            <div class="content w-full h-auto absolute hidden">sdfsf</div>
                        </div>

                        <div class="hitter "></div> --}}

                    </div>


                </div>
            </div>

            <div class="w-full flex items-center justify-end py-10 space-x-5">
                <a href="/register1" class="text-white w-36 py-2 flex justify-center item-center rounded-md">
                    <i class="fas fa-angle-left text-white mt-1 mr-1"></i>
                    Previous
                </a>
                <button type="submit"
                    class="bg-red-600 text-white w-28 py-2 flex justify-center item-center rounded-md">Next
                    <i class="fas fa-angle-right text-white mt-1 ml-1"></i></button>
            </div>

        </form>
        </div>
    </section>

    <script>
        const container = document.querySelector('#items-container');

        let startY;
        let startX;
        let scrollLeft;
        let scrollTop;
        let isDown;

        container.addEventListener('mousedown', e => mouseIsDown(e));
        container.addEventListener('mouseup', e => mouseUp(e))
        container.addEventListener('mouseleave', e => mouseLeave(e));
        container.addEventListener('mousemove', e => mouseMove(e));

        function mouseIsDown(e) {
            isDown = true;
            startY = e.pageY - container.offsetTop;
            startX = e.pageX - container.offsetLeft;
            scrollLeft = container.scrollLeft;
            scrollTop = container.scrollTop;
        }

        function mouseUp(e) {
            isDown = false;
        }

        function mouseLeave(e) {
            isDown = false;
        }

        function mouseMove(e) {
            if (isDown) {
                e.preventDefault();
                //Move vertcally
                const y = e.pageY - container.offsetTop;
                const walkY = y - startY;
                container.scrollTop = scrollTop - walkY;

                //Move Horizontally
                const x = e.pageX - container.offsetLeft;
                const walkX = x - startX;
                container.scrollLeft = scrollLeft - walkX;

            }
        }
    </script>

    <script>
        $(".but").click(function() {


            // Close all open windows
            $(".content").stop().slideUp(300);
            // Toggle this window open/close
            $(this).next(".content").stop().slideToggle(300);
            //hitter test//
            $(".hitter").show()
        });

        $(".hitter").click(function() {
            // Close all open windows
            $(".content").stop().slideUp(300);
        });
    </script>

    <script>
        //remove seat from list
        function removeSeat(seatListElm, seatValue) {
            var arr = seatListElm.value.split(',');

            var p = arr.indexOf(seatValue);
            if (p != -1) {
                arr.splice(p, 1);
                seatListElm.value = arr.join(',');
            }
        }

        function mapSeats() {
            return document.getElementsByClassName("seat");
        }

        function findIndex(object, value) {
            for (i = 0; i < object.length; i++) {
                if (object[i].value == value)
                    return i;
            }
            return null;
        }

        function isSelected(element) {
            if ((" " + element.className + " ").replace(/[\n\t]/g, " ").indexOf(" selected ") > -1)
                return true;
            else
                return false;
        }

        //add seat to list
        function addSeat(seatListElm, seatValue) {
            var arr = seatListElm.value.split(',');
            var len = arr.length;
//   if(len>2  ){
//                 document.getElementById('text').style.color='white';
//         }
//         else{
//             document.getElementById('text').style.color='red';
            if (arr.join() == '') {
                arr = [];

            }
            var p = arr.indexOf(seatValue);
            if (p == -1) {
                arr.push(seatValue); //append
                arr = arr.sort(); //sort list
                seatListElm.value = arr.join(',');
            }

        // }


        }

        var start = end = -1;

        //called everytime a seat is clicked
        function seatClick() {

            if (this.classList.contains('reserved') == false) {


                if (start == -1)
                    start = this.value;
                else if (end == -1)
                    end = this.value;

                if (start != -1 && end != -1) {
                    console.log(start, end);

                    seats = mapSeats();

                    console.log(seats);

                    indexS = findIndex(seats, start);
                    indexE = findIndex(seats, end);

                    console.log(indexS, indexE);

                    if (indexE >= indexS) {
                        for (i = indexS + 1; i < indexE; i++) {
                            if (!isSelected(seats[i])) {
                                console.log("A");
                                addSeat(document.getElementById('seats'), seats[i].value);
                                seats[i].classList.toggle('selected');
                            } else {
                                console.log("B");
                                removeSeat(document.getElementById('seats'), seats[i].value);
                                seats[i].classList.toggle('selected');
                            }
                        }
                    }
                    /*else{
                                    for(i= indexE ; i> indexS+1  ;i--){
                                        if (!isSelected(seats[i])) {
                                            console.log("C");
                                            addSeat(document.getElementById('seats'), seats[i].value);
                                            seats[i].classList.toggle('selected');
                                        } else {
                                            console.log("D");
                                            removeSeat(document.getElementById('seats'), seats[i].value);
                                            seats[i].classList.toggle('selected');
                                        }
                                    }
                                }*/
                    start = end = -1;
                }

                if (this.classList.toggle('selected')) {
                    addSeat(document.getElementById('seats'), this.value);
                } else {
                    removeSeat(document.getElementById('seats'), this.value);
                }

            } else {
                alert("This seat is reserved!\nPlease select another seat");
                removeSeat(document.getElementById('seats'), this.value);
                return;
            }
        }


        //adding event click to seats
        var elms = document.getElementsByClassName('seat');
        for (var i = 0, l = elms.length; i < l; i++) {
            elms[i].onclick = seatClick;
        }

        /* PS:
         I used this way to keep this simple without the crossbrowser handling,
         but maybe you want to add events by adding/attaching event listener
        */
    </script>




</body>

</html>
