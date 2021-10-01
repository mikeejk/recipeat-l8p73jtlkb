@extends('layouts.bootstrap.guest')

@section('content')

@hasrole('Chef')
I am chef
@endhasrole

@hasrole('Home-Chef')
I am Home-Chef
@endhasrole

@hasrole('User')
I am Guest
@endhasrole


@endsection
