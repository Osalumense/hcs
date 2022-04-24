<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('docs/favicon.png') }}"> --}}

    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('styles')

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')
    <button id="myBtn">
        <img src="{{asset('img/up-arrow.png')}}" alt="alternative">
    </button>

    <script src="{{URL::asset('js/script.js')}}"></script>
    <script src="{{URL::asset('js/aos.js')}}"></script>
    
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/purecounter.min.js')}}"></script>
    
    <script src="{{URL::asset('js/swiper.min.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>

    @yield('scripts')
    @stack('inline-scripts')
</head>
<body>
    
</body>
</html>