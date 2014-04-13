<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@if(Auth::check())
    @include('elements.head')
@else
    @include('elements.head_public')
@endif
    @yield('head')    
    <title> 
        @section('title') 
            Campus Virtual 
        @show
    </title>  
</head>
<body>
    @if(Auth::check())
         @include('elements.navbar_campus')
    @endif
     
    <section class="container">
        @yield('content')       
    </section>
<!--@if(Auth::check())
    @include('elements.footer')
@endif-->
    @include('elements.javascript')
    @yield('javascript')
</body>
</html>