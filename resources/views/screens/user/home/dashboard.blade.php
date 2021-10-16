@extends('layouts.bootstrap.guest')

@section('content')

@hasrole('Chef')
I am chef
@endhasrole

@hasrole('Home-Chef')
I am Home-Chef
@endhasrole






@endsection
