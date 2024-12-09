<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $nombre = "Santiago";    
    ?>

    <h1>Hola 
        <?php
         echo $nombre; 
        ?></h1>


{{-- este tipo de estructuras nos sirve para evitar ataques o scripts maliciosos y nos muestra el codigo del script --}}
        {{-- {{$nombre}} --}}
</body>
</html>