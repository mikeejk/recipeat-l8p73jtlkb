<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('question.css') }}" rel="stylesheet" id="bootstrap">
    <!-- icon8 - font-awesome-line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- icon8 - line-awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- end:: Custom Stylesheets -->

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
        .cuisine {}

        .selectedcuisine {
            border-style: inset;
            background-color: rgb(240, 30, 30);
            color: rgb(255, 255, 255);
        }

        .reservedcuisine {
            border-style: outset;
            background-color: gray;
            color: darkred;
        }
    </style>

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
            return document.getElementsByClassName("cuisine");
        }

        function findIndex(object, value) {
            for (i = 0; i < object.length; i++) {
                if (object[i].value == value)
                    return i;
            }
            return null;
        }

        function isSelected(element) {
            if ((" " + element.className + " ").replace(/[\n\t]/g, " ").indexOf('selectedcuisine') > -1)
                return true;
            else
                return false;
        }

        //add seat to list
        function addSeat(seatListElm, seatValue) {
            var arr = seatListElm.value.split(',');
            var len = arr.length;

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

            if (this.classList.contains('reservedcuisine') == false) {


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
                                addSeat(document.getElementById('cusiniesId'), seats[i].value);
                                seats[i].classList.toggle('selectedcuisine');
                            } else {
                                console.log("B");
                                removeSeat(document.getElementById('cusiniesId'), seats[i].value);
                                seats[i].classList.toggle('selectedcuisine');
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

                if (this.classList.toggle('selectedcuisine')) {
                    addSeat(document.getElementById('cusiniesId'), this.value);
                } else {
                    removeSeat(document.getElementById('cusiniesId'), this.value);
                }

            } else {
                alert("This seat is reserved!\nPlease select another seat");
                removeSeat(document.getElementById('cusiniesId'), this.value);
                return;
            }
        }


        //adding event click to seats
        var elms = document.getElementsByClassName('cuisine');
        for (var i = 0, l = elms.length; i < l; i++) {
            elms[i].onclick = seatClick;
        }

        /* PS:
         I used this way to keep this simple without the crossbrowser handling,
         but maybe you want to add events by adding/attaching event listener
        */
    </script>

</head>

<body class="bg-black">
    <div class="">
        <!--Content area here-->
        @yield('content')
    </div>
</body>

</html>
