<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="Description" content="best social app">
    <meta name="Keywords" content="social app , sharing post">
    <meta name="Author" content="Himanshu Nishad">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;display=swap">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">

    <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     -->

    @livewireStyles
</head>
<body style="font-family: 'Noto Sans JP', sans-serif;">
    <div>
        @yield('content')
    </div>
    
    

    @livewireStyles
    <!-- Scripts -->
   
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/script.min.js')}}"></script>
    <!-- <script src="{{ mix('js/app.js') }}" defer></script> -->
</body>
</html>
