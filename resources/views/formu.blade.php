{{-- @extends('layouts.app') --}}
@extends('../layouts.app')

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
    <h1 class="text-center">Formulario de Contacto</h1>
    <form action="{{route('contacta.store')}}" method="POST" style="background-image:url({{url('img/fondo4.jpg')}}); background-size:cover" class="card p-3 text-center text-white container_gris">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

            <div class="col-md-6">
                <input
                    id="nombre"
                    type="text"
                    class="form-control"
                    name="nombre"
                    required="required"
                    autofocus="autofocus">

            </div>
        </div>
        @error('nombre')
                <p><strong>{{$message}}</strong>
        @enderror

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

            <div class="col-md-6">
                <input
                    id="email"
                    type="text"
                    class="form-control"
                    name="email"
                    required="required"
                    autofocus="autofocus">
            </div>
        </div>
         @error('email')
                <p><strong>{{$message}}</strong>
          @enderror
        
        <div class="form-group row">
            <label for="mensaje" class="col-md-4 col-form-label text-md-right">Mensaje</label>
            <div class="col-md-6">
    <textarea class="form-control" name="mensaje" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Enviar Mensaje
                </button>
            </div>
        </div>
        @error('mensaje')
                <p><strong>{{$message}}</strong>
        @enderror
        
    </form>
    
    <!-- para redirigir 
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif -->
</div>
</body>
</html>
@endsection