<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    {{ csrf_field() }}
        <h1>CORREO BIBLIOWEB</h1>
        <br>
        <p>Tu web preferida de intercambios de libros</p>
        <br>  
        <br>      
        <p>Un usuario de la Web quiere ponerse en contacto contigo!</p>
        <br>
        <br>
        <p>El usuario:<strong> {{$contacto['nombre']}} </strong><br>
        con el correo:<strong> {{$contacto['email']}} </strong> le manda el siguiente mensaje:</p>
        <br>
        <p>{{$contacto['mensaje']}}</p>
        <br>
        <br>
        <br>
        <br>
        <p>Muchas gracias por confiar en BIBLIOWEB!<p>
    </body>
</html>