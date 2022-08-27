<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="user" content="{{ Auth::id() }}">
    <title>Document</title>
</head>
<body>
    <div id="app"></div>

    @auth 
        @vite('resources/js/app3.js')
    @endauth

    @guest
        <p>No estas autenticado</p>
        <br />
        <a href="/login">Inicia Sesión</a>
    @endguest
</body>
</html>