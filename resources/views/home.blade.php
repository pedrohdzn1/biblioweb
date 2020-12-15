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
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container">
        <div class="text-center">
          <h1>Catálogo de libros</h1>  
        </div>
            <form class="form-inline ml-3">
                    
        <h2 class="busqueda">     Búsqueda:      </h2>
            <div class="input-group input-group-sm">
            
                <input class="form-control" name="search" type="search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search fa-lg"> Buscar! </i>
                        </button>
                    </div>
                </div>
            </form>
        <hr>
        <h6>
        @if($search)
        <div class="alert alert-warning" role="alert">
        La búsqueda de {{ $search }} muestra los siguientes libros: 
        </div>
        @endif
        </h6>
        <div class="d-flex justify-content-flex-start flex-wrap">
            @foreach ($libros as $libro)
                @if ($libro->habilitado)

                    <!-- <div class="card mt-3 bg-warning" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $libro->titulo }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $libro->autor }}</h6>
                            <label> {{ $libro->genero }}</label>
                            <p class="card-text">{{ $libro->descripcion }}</p>
                            <a class="card-title btn btn-default" href="{{ route('contacta.index') }}"  class="{{request()->routeIs('contacta.index') ? 'active' : ''}}"><button type="button" class="btn btn-success">Contacto</button></a>
                        </div>
                    </div> -->
                    <div class="card booking-card" style="width:31.5%">

<div class="view overlay">
    <img class="card-img-top" src="img/11.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body">
    <h4 class="card-title font-weight-bold"><a>{{ $libro->titulo }}</a></h4>
    <!-- Data -->
    <ul class="list-unstyled list-inline rating mb-0">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </ul>
    <p class="mb-2">{{ $libro->autor }}</p>
    <!-- Text -->
    <p class="lead"><strong> {{ $libro->genero }}</strong></p>
    <hr class="my-4">
    <p class="card-text"> {{ $libro->descripcion }}</p>
    <!-- Button -->
    <a class="card-title btn btn-default" href="{{ route('contacta.index') }}"  class="{{request()->routeIs('contacta.index') ? 'active' : ''}}"><button type="button" style="color:white"  class="btn" id="cont"> Contacto </button></a>
  </div>

</div>

                @endif
            @endforeach
        </div>
    </div>
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
    @if (session('reg'))
        <script>
            alert("{{session('reg')}}");
        </script>
    @endif
</body>
</html>
@endsection

