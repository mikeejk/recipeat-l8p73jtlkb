
@extends('layouts.tailwind.guest')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap">
    <link href="{{ asset('question.css') }}" rel="stylesheet" id="bootstrap">
</head>

<body class="">

        <livewire:questionnaire />
   
</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
@livewireScripts

</html>



