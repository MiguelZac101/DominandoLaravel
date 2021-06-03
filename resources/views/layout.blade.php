<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',"Titulo por defecto")</title>
    <style>
        .active a{
            text-transform: uppercase;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('parts.nav')
    @yield('content')    
</body>
</html>