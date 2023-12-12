<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('titulo') CRUD Laravel</title>
</head>
<body>
    <div 
    class="w-full h-full bg-no-repeat bg-auto"
    style="background-image: url('https://images.unsplash.com/photo-1696448022220-4d357587ddac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1896&q=80')">
    @yield('contenido')
</div>
</body>
</html>