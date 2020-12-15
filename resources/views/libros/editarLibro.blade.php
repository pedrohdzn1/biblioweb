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
    <h1 class="text-center">Editar Libro</h1>
    <form method="POST" action="{{ url('editarLibro/'.$libro->id.'/update') }}" class="card p-3 text-center text-white" style="background-image:url({{url('img/fondo4.jpg')}}); background-size:cover">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group row">
            <label for="titulo" class="col-md-4 col-form-label text-md-right">Título</label>

            <div class="col-md-6">
                <input
                    id="titulo"
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="titulo"
                    value="{{$libro->titulo }}"
                    required="required"
                    autofocus="autofocus">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <label for="autor" class="col-md-4 col-form-label text-md-right">Autor</label>

            <div class="col-md-6">
                <input
                    id="autor"
                    type="text"
                    class="form-control"
                    name="autor"
                    value="{{ $libro->autor }}"
                    required="required"
                    autofocus="autofocus">

            </div>
        </div>

        <div class="form-group row">
            <label for="genero" class="col-md-4 col-form-label text-md-right">Género</label>

            <div class="col-md-6">
                <input
                    id="genero"
                    type="text"
                    class="form-control"
                    name="genero"
                    value="{{ $libro->genero }}"
                    required="required"
                    autofocus="autofocus">
            </div>
        </div>

        <div class="form-group row">
            <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripción</label>

            <div class="col-md-6">
                <input
                    id="descripcion"
                    type="text"
                    class="form-control"
                    name="descripcion"
                    value="{{ $libro->descripcion }}"
                    required="required"
                    autofocus="autofocus">
            </div>
        </div>

        <div class="form-group row">
            <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono de contacto</label>

            <div class="col-md-6">
                <input
                    id="telefono"
                    type="text"
                    class="form-control"
                    name="telefono"
                    value="{{ $libro->telefono }}"
                    pattern="[0-9]{9}"
                    maxlength="9"
                    required="required"
                    autofocus="autofocus">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Editar
                </button>
            </div>
        </div>
        
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

    <div>

        <h3><a href="{{ url('/home') }}"> 
            <button class="btn btn-primary">
                Catálogo de libros
            </button>
        </a></h3>
    </div>
</div>
</body>
</html>
@endsection