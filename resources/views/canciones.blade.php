<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
</head>
<body>
    <h1>Canciones</h1>
    <ul>
         <!-- Ciclo para imprimir las canciones del web.php -->
        @if(is_null($cancion_seleccionado))
        
         @foreach($canciones as $cancion)
            <!--Similar echo --->
            <li>{{$cancion['nombre']}} - {{$cancion['artista']}}</li>
        @endforeach
        @else
        <h1>{{$cancion_seleccionado['nombre']}}</h1>
    <h2>{{$cancion_seleccionado['artista']}}</h2>
        @endif
    </ul>

</body>
</html>