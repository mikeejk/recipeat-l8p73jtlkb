@extends('layouts.bootstrap.guest')
@section('content')
    @if ($user->hasrole('Chef'))
        <div class="row w-100 h-100">
            <!--Column 1 Profile-->
            <div class="col-md-4">
                <!--Profile-->
                <div class="">
                    <div class="container mt-2 mb-4 d-flex justify-content-center">
                        <div class="card">
                            <div class="image d-flex flex-column justify-content-center align-items-center">
                                {{-- @empty($chef_questions->image)
                                    <button class="btn btn-secondary btn2"> <img class="rounded-circle"
                                            src="assets/media//users/blank.png"
                                            height="100" width="100" />
                                    </button>
                                @else
                                    <button class="btn btn-secondary btn2"> <img class="rounded-circle"
                                            src="{{ asset('storage/public/'. $chef_questions->image) }}"
                                            height="100" width="100" /> </button>
                                @endempty --}}
                                <span class="name mt-3">{{ $user->name }}</span>
                                <span class="idd">
                                    @if ($user->hasrole('Home-Chef') || $user->hasrole('Chef') || $user->hasrole('Admin'))
                                        {{ $user->getRoleNames()->first() }}
                                    @else
                                        User
                                    @endif
                                </span>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i
                                            class="text-dark fa fa-user"></i></span>{{ $chef_questions->name }}
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i
                                            class="text-dark  fas fa-birthday-cake"></i></span>{{ $chef_questions->dob }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i
                                            class="text-dark fa fa-flag"></i></span>{{ $chef_questions->location }},{{ $chef_questions->state }}
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i
                                            class="text-dark fas fa-utensils"></i></span><b>{{ $recipes }} </b>Recipe
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class=" p-2 ">
                                    <span class="btn-label"><i class="text-dark fas fa-briefcase">
                                        </i></span>{{ $chef_questions->designation }}</button>
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i class="text-dark fa fa-eye"
                                            aria-hidden="true"></i></span>5
                                    Views</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center p-2  mt-4 "> Member Since
                                {{ $user->created_at->format('Y-m-d') }}
                            </div>

                        </div>
                    </div>
                </div>
                <!--Profile Complete Progress Bar-->
                <div class="bg-secondary rounded m-6 d-flex flex-column justify-content-center  p-3">
                    <h4>Profile Complete</h4>
                    <div class=" ">
                        <div class="panel widget">
                            <div class="panel-body text-center">
                                <div class="radial-bar radial-bar-40 radial-bar radial-bar-danger m0">
                                    @if ($chef_questions->image == "")
                                        <img alt="Pic" src="assets/media//users/blank.png" />
                                    @else
                                        <img src="{{ asset('/storage/public/' . $chef_questions->image) }}" alt="" />
                                    @endif

                                </div>
                                <p>
                                    <strong>40%</strong>
                                    <span>complete</span>
                                </p>
                                <div class="d-flex  align-items-center justify-content-center  text-white">
                                    <span class="p-2 bg-danger">Complete your profile</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--Taste Bud-->
                <div class=" bg-secondary rounded m-6  p-3">
                    <h5>Taste Bud</h5>
                    <div class="p-1 d-flex justify-content-center w-100 text-white">
                        <div class="p-2 bg-info flex-fill text-center">Spice Lover</div>
                        <div class="p-2 bg-warning flex-fill text-center">Sweet Lover</div>
                    </div>
                </div>
            </div>

            <!--Column 2 Pinboard-->
            <div class="col-md-4 mt-2 bg-secondary rounded">
                <h3 class="mt-4 p-2">PINBOARD</h3>

                <div class="pb-8 h-auto w-100">
                    <div class=" bg-secondary h-100 w-100 rounded m-4 p-3">
                        <div class="w-100 pb-6">

                        </div>
                    </div>
                </div>


            </div>

            <!--Column 3 Others-->
            <div class="col-md-4 bg-dark">
                <div class=" h-auto w-100">
                    <div class=" bg-secondary h-100 w-100 rounded m-4 d-flex flex-column justify-content-center  p-3">
                        <h4><b>Cook Books</b></h4>
                        <div class="m-2 text-white">
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Indian</div>
                                <div class="p-2 bg-warning flex-fill text-center">Chinese</div>
                                <div class="p-2 bg-primary flex-fill text-center">Malaysian</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Chicken</div>
                                <div class="p-2 bg-warning flex-fill text-center">Mutton</div>
                                <div class="p-2 bg-primary flex-fill text-center">Fish</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center text-center">Egg</div>
                                <div class="p-2 bg-warning flex-fill text-center">prawn</div>
                                <div class="p-2 bg-primary flex-fill text-center">Kadai</div>
                            </div>
                            <div class="d-flex justify-content-center  pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Sambar</div>
                                <div class="p-2 bg-warning flex-fill text-center">Rasam</div>
                                <div class="p-2 bg-primary flex-fill text-center">Curd</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Fried Rice</div>
                                <div class="p-2 bg-warning flex-fill text-center">Noodels</div>
                                <div class="p-2 bg-primary flex-fill text-center">Briyani</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Currys</div>
                                <div class="p-2 bg-warning flex-fill text-center">Rices</div>
                                <div class="p-2 bg-primary flex-fill text-center">Potato</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-8 h-auto w-100">
                    <div class=" bg-secondary h-100 w-100 rounded m-4 p-3">
                        <div class="w-100 pb-6">
                            <div class="accordion" id="accordionExample">
                                <div class="card w-100">
                                    <div class="card-head rounded p-3" id="headingOne">
                                        <h2 class="mb-0 p-2 d-flex justify-content-center align-items-center"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Followers
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body rounded">
                                            <div class=" d-flex flex-wrap row w-100 p-2">
                                                <ul
                                                    class="list-style-none w-100 list-icons d-flex flex-column flex-wrap flex-item text-center pt-2">
                                                    {{-- @foreach ($followers as $follower) --}}
                                                    @foreach (Auth::user()->followers as $follower)
                                                        <li class="w-100 d-flex w-75  p-1">
                                                            <a class="d-flex flex-row w-50 justify-content-center " href=""
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Shaina Chhatraliya">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="user" class="rounded-circle" width="40" />
                                                                <span
                                                                    class="p-2 ml-5  d-flex align-items-center">{{ $follower->name }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                    <li class="col px-2 p-1 d-flex justify-content-center ">
                                                        <a href="/follower"
                                                            class="d-flex justify-content-center align-items-center"
                                                            data-toggle="tooltip" title="" data-original-title="More">
                                                            <i class="text-dark fas fa-plus-circle fa-1x mr-1"></i>More
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-100">
                                    <div class="card-head rounded p-3" id="headingTwo">
                                        <h2 class="mb-0 p-2 collapsed d-flex justify-content-center align-items-center"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Following
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">

                                            <div class=" d-flex flex-wrap row w-100 p-2">
                                                <ul
                                                    class="list-style-none w-100 list-icons d-flex flex-column flex-wrap flex-item text-center pt-2">
                                                    @foreach (Auth::user()->followings as $following)
                                                        <li class="w-100 d-flex w-75  p-1">
                                                            <a class="d-flex flex-row w-50 justify-content-center " href=""
                                                                data-toggle="tooltip" title=""
                                                                data-original-title="Shaina Chhatraliya">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="user" class="rounded-circle" width="40" />
                                                                <span
                                                                    class="p-2 ml-5  d-flex align-items-center">{{ $following->name }}</span>

                                                            </a>
                                                        </li>
                                                    @endforeach
                                                    <li class="col px-2 p-1 d-flex justify-content-center ">
                                                        <a href="/follower"
                                                            class="d-flex justify-content-center align-items-center"
                                                            data-toggle="tooltip" title="" data-original-title="More">
                                                            <i class="text-dark fas fa-plus-circle fa-1x mr-1"></i>More
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif($user->hasrole('Home-Chef'))
        <div class="row w-100 h-100">
            <!--Column 1 Profile-->
            <div class="col-md-4">
                <!--Profile-->
                <div class="pb-1">
                    <div class="container mt-4 mb-4 d-flex justify-content-center">
                        <div class="card">
                            <div class="image d-flex flex-column justify-content-center align-items-center">
                                <button class="btn btn-secondary btn2">
                                    @if ($question->image == "")
                                        <img class="rounded-circle" src="assets/media//users/blank.png" height="100"
                                            width="100" />
                                    @else
                                        <img class="rounded-circle"
                                            src="{{ asset('/storage/public/' . $question->image) }}" height="100"
                                            width="100" />
                                    @endif
                                </button>
                                <span class="name mt-3">{{ $user->name }}</span>
                                <span class="idd">
                                    @if ($user->hasrole('Home-Chef') || $user->hasrole('Chef') || $user->hasrole('Admin'))
                                        {{ $user->getRoleNames()->first() }}
                                    @else
                                        User
                                    @endif

                                </span>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i
                                            class="text-dark fa fa-user"></i></span>{{ $question->name }}
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i
                                            class="text-dark  fa fa-transgender"></i></span>{{ $question->gender }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i class="text-dark fa fa-flag"></i></span>India
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i
                                            class="text-dark fas fa-utensils"></i></span><b>{{ $recipes }} </b>Recipe
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i
                                            class="text-dark fa fa-envelope"></i></span>{{ $question->mail }}</button>
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i class="text-dark fa fa-eye"
                                            aria-hidden="true"></i></span>5
                                    Views</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center p-2  mt-4 "> Member Since
                                {{ $user->created_at->format('Y-m-d') }}
                            </div>

                        </div>
                    </div>
                </div>
                <!--Profile Complete Progress Bar-->
                <div class=" bg-secondary rounded m-6 d-flex flex-column justify-content-center  p-3">
                    <h4>Profile Complete</h4>
                    <div class=" ">
                        <div class="panel widget">
                            <div class="panel-body text-center">
                                <div class="radial-bar radial-bar-40 radial-bar radial-bar-danger m0">
                                    @if ($question->image == "")
                                        <img alt="Pic" src="assets/media//users/blank.png" />
                                    @else
                                        <img src="{{ asset('/storage/public/' . $question->image) }}" alt="" />
                                    @endif
                                </div>
                                <p>
                                    <strong>40%</strong>
                                    <span>complete</span>
                                </p>
                                <div class="d-flex  align-items-center justify-content-center  text-white">
                                    <span class="p-2 bg-danger">Complete your profile</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--Taste Bud-->
                <div class=" bg-secondary rounded m-6  p-3">
                    <h5>Taste Bud</h5>
                    <div class="p-1 d-flex justify-content-center w-100 text-white">
                        <div class="p-2 bg-info flex-fill text-center">Spice Lover</div>
                        <div class="p-2 bg-warning flex-fill text-center">Sweet Lover</div>
                    </div>
                </div>
            </div>

            <!--Column 2 Pinboard-->
            <div class="col-md-4  bg-secondary rounded">
                <h3 class="mt-4 p-2">PINBOARD</h3>
                <div class="container mt-4 bg-success mb-4 d-flex justify-content-center h-full">
                </div>
            </div>

            <!--Column 3 Others-->
            <div class="col-md-4 bg-dark">
                <div class="pb-3 h-auto">
                    <div class=" bg-secondary h-100 rounded m-4 d-flex flex-column justify-content-center  p-3">
                        <h4><b>Cook Books</b></h4>
                        <div class="m-2 text-white">
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Indian</div>
                                <div class="p-2 bg-warning flex-fill text-center">Chinese</div>
                                <div class="p-2 bg-primary flex-fill text-center">Malaysian</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Chicken</div>
                                <div class="p-2 bg-warning flex-fill text-center">Mutton</div>
                                <div class="p-2 bg-primary flex-fill text-center">Fish</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center text-center">Egg</div>
                                <div class="p-2 bg-warning flex-fill text-center">prawn</div>
                                <div class="p-2 bg-primary flex-fill text-center">Kadai</div>
                            </div>
                            <div class="d-flex justify-content-center  pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Sambar</div>
                                <div class="p-2 bg-warning flex-fill text-center">Rasam</div>
                                <div class="p-2 bg-primary flex-fill text-center">Curd</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Fried Rice</div>
                                <div class="p-2 bg-warning flex-fill text-center">Noodels</div>
                                <div class="p-2 bg-primary flex-fill text-center">Briyani</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Currys</div>
                                <div class="p-2 bg-warning flex-fill text-center">Rices</div>
                                <div class="p-2 bg-primary flex-fill text-center">Potato</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-8 h-auto">
                    <div class=" bg-secondary h-100 rounded m-4  p-3">
                        <div class="m-2">
                            <h4><b>Followers</b></h4>
                            <div class=" d-flex  flex-wrap justify-content-center row p-2">

                                <ul class="list-style-none list-icons d-flex flex-wrap flex-item text-center pt-2">
                                    @foreach (Auth::user()->followers as $follower)
                                        <li class="col px-2 p-1">
                                            <a href="" data-toggle="tooltip" title=""
                                                data-original-title="Shaina Chhatraliya">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                                    class="rounded-circle" width="60" />{{ $follower->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li class="col px-2 p-1 d-flex justify-content-center ">
                                        <a href="/follower" class="d-flex justify-content-center align-items-center"
                                            data-toggle="tooltip" title="" data-original-title="More">
                                            <h4><i class="text-dark fas fa-plus-circle fa-1x mr-1"></i>More</h4>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="m-2">
                            <h4><b>Following</b></h4>
                            <div class=" d-flex  flex-wrap justify-content-center row p-2">
                                <ul class="list-style-none list-icons d-flex flex-wrap flex-item text-center">
                                    @foreach (Auth::user()->followings as $following)
                                        <li class="col px-2 p-1 d-flex">
                                            <a class="d-flex flex-column" href="" data-toggle="tooltip" title=""
                                                data-original-title="Shaina Chhatraliya">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                                    class="rounded-circle" width="60" />
                                                {{-- <img src="{{ asset('/storage/app/public/' . $following->question->image) }}" alt="user" --}}
                                                {{-- class="rounded-circle" width="60" /> --}}
                                                <span>{{ $following->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                    <li class="col px-2 p-1 d-flex justify-content-center ">
                                        <a href="/following" class="d-flex justify-content-center align-items-center"
                                            data-toggle="tooltip" title="" data-original-title="More">
                                            <h4><i class="text-dark fas fa-plus-circle fa-1x mr-1"></i>More</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row w-100 h-100">
            <!--Column 1 Profile-->
            <div class="col-md-4">
                <!--Profile-->
                <div class="pb-1">
                    <div class="container mt-4 mb-4 d-flex justify-content-center">
                        <div class="card">
                            <div class="image d-flex flex-column justify-content-center align-items-center">
                                <button class="btn btn-secondary btn2">
                                    @if ($question->image == "")
                                        <img class="rounded-circle" src="assets/media//users/blank.png" height="100"
                                            width="100" />
                                    @else
                                        <img class="rounded-circle"
                                            src="{{ asset('/storage/public/' . $question->image) }}" height="100"
                                            width="100" />
                                    @endif
                                <span class="name mt-3">{{ $user->name }}</span>

                                <span class="idd">
                                    @if ($user->hasrole('Home-Chef') || $user->hasrole('Chef') || $user->hasrole('Admin'))
                                        {{ $user->getRoleNames()->first() }}
                                    @else
                                        User
                                    @endif

                                </span>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i
                                            class="text-dark fa fa-user"></i></span>{{ $question->name }}
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i
                                            class="text-dark  fa fa-transgender"></i></span>{{ $question->gender }}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i class="text-dark fa fa-flag"></i></span>India
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i
                                            class="text-dark fas fa-utensils"></i></span><b>{{ $recipes }} </b>Recipe
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3  text-secondary">
                                <div class="p-2 ">
                                    <span class="btn-label"><i
                                            class="text-dark fa fa-envelope"></i></span>{{ $question->mail }}</button>
                                </div>
                                <div class="p-2">
                                    <span class="btn-label"><i class="text-dark fa fa-eye"
                                            aria-hidden="true"></i></span>5
                                    Views</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center p-2  mt-4 "> Member Since
                                {{ $user->created_at->format('Y-m-d') }}
                            </div>

                        </div>
                    </div>
                </div>
                <!--Profile Complete Progress Bar-->
                <div class=" bg-secondary rounded m-6 d-flex flex-column justify-content-center  p-3">
                    <h4>Profile Complete</h4>
                    <div class=" ">
                        <div class="panel widget">
                            <div class="panel-body text-center">
                                <div class="radial-bar radial-bar-40 radial-bar radial-bar-danger m0">
                                    @if ($question->image == "")
                                        <img alt="Pic" src="https://bootdey.com/img/Content/user_3.jpg" />
                                    @else
                                        <img src="{{ asset('/storage/public/' . $question->image) }}" alt="" />
                                    @endif
                                </div>
                                <p>
                                    <strong>40%</strong>
                                    <span>complete</span>
                                </p>
                                <div class="d-flex  align-items-center justify-content-center  text-white">
                                    <span class="p-2 bg-danger">Complete your profile</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--Taste Bud-->
                <div class=" bg-secondary rounded m-6  p-3">
                    <h5>Taste Bud</h5>
                    <div class="p-1 d-flex justify-content-center w-100 text-white">
                        <div class="p-2 bg-info flex-fill text-center">Spice Lover</div>
                        <div class="p-2 bg-warning flex-fill text-center">Sweet Lover</div>
                    </div>
                </div>
            </div>

            <!--Column 2 Pinboard-->
            <div class="col-md-4  bg-secondary rounded">
                <h3 class="mt-4 p-2">PINBOARD</h3>
                <div class="container mt-4 bg-success mb-4 d-flex justify-content-center h-full">
                </div>
            </div>

            <!--Column 3 Others-->
            <div class="col-md-4 bg-dark">
                <div class="pb-3 h-auto">
                    <div class=" bg-secondary h-100 rounded m-4 d-flex flex-column justify-content-center  p-3">
                        <h4><b>Cook Books</b></h4>
                        <div class="m-2 text-white">
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Indian</div>
                                <div class="p-2 bg-warning flex-fill text-center">Chinese</div>
                                <div class="p-2 bg-primary flex-fill text-center">Malaysian</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Chicken</div>
                                <div class="p-2 bg-warning flex-fill text-center">Mutton</div>
                                <div class="p-2 bg-primary flex-fill text-center">Fish</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center text-center">Egg</div>
                                <div class="p-2 bg-warning flex-fill text-center">prawn</div>
                                <div class="p-2 bg-primary flex-fill text-center">Kadai</div>
                            </div>
                            <div class="d-flex justify-content-center  pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Sambar</div>
                                <div class="p-2 bg-warning flex-fill text-center">Rasam</div>
                                <div class="p-2 bg-primary flex-fill text-center">Curd</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Fried Rice</div>
                                <div class="p-2 bg-warning flex-fill text-center">Noodels</div>
                                <div class="p-2 bg-primary flex-fill text-center">Briyani</div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <div class="p-2 bg-info flex-fill text-center">Currys</div>
                                <div class="p-2 bg-warning flex-fill text-center">Rices</div>
                                <div class="p-2 bg-primary flex-fill text-center">Potato</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-8 h-auto">
                    <div class=" bg-secondary h-100 rounded m-4  p-3">
                        <div class="m-2">
                            <h4><b>Followers</b></h4>
                            <div class=" d-flex  flex-wrap justify-content-center row p-2">

                                <ul class="list-style-none list-icons d-flex flex-wrap flex-item text-center pt-2">
                                    @foreach ($followers as $follower)
                                        <li class="col px-2 p-1">
                                            <a href="" data-toggle="tooltip" title=""
                                                data-original-title="Shaina Chhatraliya">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                                    class="rounded-circle" width="60" /> {{ $follower->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li class="col px-2 p-1 d-flex justify-content-center ">
                                        <a href="/follower" class="d-flex justify-content-center align-items-center"
                                            data-toggle="tooltip" title="" data-original-title="More">
                                            <h4><i class="text-dark fas fa-plus-circle fa-1x mr-1"></i>More</h4>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="m-2">
                            <h4><b>Following</b></h4>
                            <div class=" d-flex  flex-wrap justify-content-center row p-2">
                                <ul class="list-style-none list-icons d-flex flex-wrap flex-item text-center">
                                    @if (count($following) > 0)
                                        @foreach ($following as $followings)
                                            <li class="col px-2 p-1 d-flex">
                                                <a class="d-flex flex-column" href="" data-toggle="tooltip" title=""
                                                    data-original-title="Shaina Chhatraliya">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user"
                                                        class="rounded-circle"
                                                        width="60" /><span>{{ $followings->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach

                                        <li class="col px-2 p-1 d-flex justify-content-center ">
                                            <a href="/following" class="d-flex justify-content-center align-items-center"
                                                data-toggle="tooltip" title="" data-original-title="More">
                                                <h4><i class="text-dark fas fa-plus-circle fa-1x mr-1"></i>More</h4>
                                            </a>
                                        </li>
                                    @else
                                        <h6>you're not following anyone</h6>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <style>
        * {
            margin: 0;
            padding: 0
        }

        body {
            background-color: #000
        }

        .card {
            width: 350px;
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s
        }

        .image img {
            transition: all 0.5s
        }

        .card:hover .image img {
            transform: scale(1.5)
        }

        .btn2 {
            height: 140px;
            width: 140px;
            border-radius: 50%
        }

        .name {
            font-size: 22px;
            font-weight: bold
        }

        .idd {
            font-size: 14px;
            font-weight: 600
        }



        .text span {
            font-size: 13px;
            color: #545454;
            font-weight: 500
        }


        hr .new1 {
            border: 1px solid;
        }

        .widget .panel,
        .widget.panel {
            overflow: hidden;
        }

        .widget {
            margin-bottom: 20px;
            border: 0;
        }

        .bg-danger {
            background-color: #f05050;
            color: #fff !important;
        }

        .radial-bar-danger.radial-bar-40 {
            background-image: linear-gradient(90deg, #fafafa 50%, transparent 50%, transparent), linear-gradient(234deg, #f05050 50%, #fafafa 50%, #fafafa);
        }

        .radial-bar-primary.radial-bar-50 {
            background-image: linear-gradient(90deg, #fafafa 60%, transparent 60%, transparent), linear-gradient(234deg, #5d9cec 60%, #fafafa 60%, #fafafa);
        }

        .m0 {
            margin: 0 !important;
        }

        .radial-bar {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            border: 2px solid #fafafa;
            background-color: transparent;
            margin-bottom: 20px;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            width: 80px;
            height: 80px;
            font-size: 18px;
        }

        .radial-bar:after,
        .radial-bar>img {
            width: 56px;
            height: 56px;
            margin-left: 12px;
            margin-top: 12px;
            line-height: 56px;
        }

        .radial-bar>img {
            /* z-index: 102; */
        }

        .radial-bar:after,
        .radial-bar>img {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 50%;
            text-align: center;
            font-weight: 700;
            color: #a1a2a3;
        }

        ul.list-style-none {
            margin: 0;
            padding: 0;
        }

        ul.list-style-none li {
            list-style: none;
        }

        .accordion {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .accordion .card {
            border: none;
            margin-bottom: 20px;

        }

        .accordion .card h2 {
            background: url(https://cdn0.iconfinder.com/data/icons/entypo/91/arrow56-512.png) no-repeat calc(100% - 10px) center;
            background-size: 20px;
            cursor: pointer;
            font-size: 18px;

        }

        .accordion .card h2.collapsed {
            background-image: url(https://cdn0.iconfinder.com/data/icons/arrows-android-l-lollipop-icon-pack/24/expand2-256.png);
        }

        .accordion .card-body {
            padding-left: 0;
            padding-right: 0;
        }

    </style>
@endsection
