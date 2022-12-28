<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Plantilla para el mensaje de correo electrónico --}}
    <h3>Correo electrónico Blade</h3>
    <p><strong>Nombre: </strong>{{$contacto['name']}}</p>
    <p><strong>Asunto: </strong>{{$contacto['subject']}}</p>
    <p><strong>Email: </strong>{{$contacto['email']}}</p><br>
    <p><strong>Mensaje: </strong></p>
        <i>{{$contacto['message']}}</i>
</body>
</html>