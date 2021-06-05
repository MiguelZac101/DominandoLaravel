<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de : {{$data['name']}} - {{$data['email']}}</p>
    <p><strong>Asunto:</strong> {{$data['subject']}}</p>
    <p><strong>Contenido:</strong> {{$data['content']}}</p>
</body>
</html>
