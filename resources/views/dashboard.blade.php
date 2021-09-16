@extends('layouts.bootstrap.guest')

@section('content')
    @hasrole('Admin')
    <div>
        @include('screens.admin.home.dashboard')
    </div>
    @endhasrole
    @hasrole('Chef|Home-Chef|User')
    <div>
        @include('screens.user.home.dashboard')
    </div>
    @endhasrole
@endsection
