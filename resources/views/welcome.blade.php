@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<div class="container">
  <!-- Navigation -->
  <body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <div align="center" class="jumbotron " style="background-image:url({{url('img/fondo4.jpg')}}); background-size:cover">
              <h1 class="display-4">OS DAMOS LA BIENVENIDA A BIBLIOWEB</h1>
              <p class="lead" style="color:white">Si quieres vivir mil vidas lee un libro.</p>
              <hr class="my-4">
              @auth {{-- Si estas identificado entras  --}}
                <a id="bot" href="{{ url('/home') }}" class="text-sm text-white-700 underline"><button type="button" style="color:white" class="btn btn-outline-warning">ENCUENTRA TU LIBRO</button></a>
              @else {{-- Si no --}}
                <h3  style="color: #f0ad4e" class="text-sm text-gray-700 underline">Tu sitio web de intercambio</h3>
              @endif
            </div>
          </div>
        @endif
        <div class="text-warning"><strong>ENCUÉNTRANOS<strong></div>
        <!-- Map -->
        <div  id="contact" class="map"> 
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.807386098509!2d-1.1654776847172996!3d38.00495297971818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6381a5304e3067%3A0x678e16ec85057f1!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Jos%C3%A9%20Planes!5e0!3m2!1ses!2ses!4v1604846436555!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          
          <small>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.807386098509!2d-1.1654776847172996!3d38.00495297971818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6381a5304e3067%3A0x678e16ec85057f1!2sInstituto%20de%20Educaci%C3%B3n%20Secundaria%20Jos%C3%A9%20Planes!5e0!3m2!1ses!2ses!4v1604846436555!5m2!1ses!2ses"></a>
          </small>
          <img src="img/hello2.png" style="width: 18rem" class="rounded float-right" alt="...">
        </div>
  </body> 
</html>
@endsection



