<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    @if ($title == 'Sign In')
    <link rel="stylesheet" href="{{asset('styles/auth.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('styles/main.css')}}">
    @endif
    
    
    <title>S.I.P.A &mdash; {{ $title }}</title>
</head>
<body>
    
@yield('content')

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>

</html>
