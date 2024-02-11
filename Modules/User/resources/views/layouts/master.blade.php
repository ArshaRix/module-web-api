<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>somecontent - {{ config('app.name', 'laravel') }}</title>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('/module-user/css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('/module-user/css/navigation.css') }}">
    @endpush


    <style>

    </style>


    {{ module_vite('build-user', 'resources/assets/sass/app.scss' )}}
</head>

<body>
    @extends('user::components.background')
    
    @include('user::components.navigation')

    <main class="wrapper">
        @yield('content')

        @section('sidebar')

        {{ module_vite('build-user', 'resources/assets/js/app.js') }}
    </main>
</body>
