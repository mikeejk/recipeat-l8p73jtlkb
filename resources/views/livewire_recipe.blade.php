@extends('layouts.tailwind.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Multistep Livewire Form Example</title>
</head> 
<body class="mt-5">
    <div class="container">
        <livewire:recipe />
    </div>
</body>   
</html>