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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    </head>
    <body>
<div class="container">

<h3 class="text-center">MIS DONACIONES </h3>
        {{ csrf_field() }}
        {{-- Que nose te olvide estoooo, que sin esto no te coge la ruta --}}
    <table class="table" style="background-image:url({{url('img/fondo4.jpg')}}); background-size:cover">
        
        <thead class="thead-light">
            <tr>
                <th id="letras">#</th>
                <th id="letras">Título</th>
                <th id="letras">Autor</th>
                <th id="letras">Descripción</th>
                <th id="letras">Género</th>
                <th id="letras">Teléfono</th>
                <th id="letras">Acción</th>
            </tr>
        </thead>
        
        <tbody style="color:white">
            @foreach($libros as $libro)
            
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $libro->titulo}}</td>
                <td>{{ $libro->autor}}</td>
                <td>{{ $libro->descripcion}}</td>
                <td>{{ $libro->genero}}</td>
                <td>{{ $libro->telefono}}</td>
                <td> 
                    {{-- Este es el Icono de editar --}}
                    <a href="{{ url('editarLibro/'.$libro->id.'/edit') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>
                    |
                    <a href="{{ url('eliminarLibro/destroy/'.$libro->id.'/'.$libro->habilitado) }}">
                    @if($libro->habilitado)
                        {{-- Este es el Icono de borrar(hacer solo un borrado logico, no borrarlo de la base de datos) --}}
                            Habilitado
                            @else
                            
                            Deshabilitado
                            
                            @endif
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                            </svg>
                        </a> 
                        </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
</div>
</body>
</html>
@endsection