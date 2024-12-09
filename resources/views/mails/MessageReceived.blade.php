<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    body {
        background-color: white;
        height: 50px;
        
    }

    .correo{
        margin: 0;
        margin-bottom: 0px;
        padding-bottom: 10px;
        background-color: darkred;
        color: #FFFFFF;
        text-align: center;

    }
    .nombre {
        background-color: lightcoral;
        margin-top: 0px;
        color: #000000;
    }

    .asunto:hover {
        margin: 0px;
        padding: 10px;
       background: black;
       color: white;
       text-transform: uppercase;
    }
    </style>
</head>
<body>
    <h1 class="correo">Correo entregado</h1>
    <h1 class="nombre">Nombre: {{$msg['nombre']}}</h1>
    <p class="asunto">Asunto: {{$msg['subject']}}</p>
    <p>Email {{$msg['email']}}</p>
    <p>Mensaje {{$msg['content']}}</p>
</body>
</html>