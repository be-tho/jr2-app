<!doctype html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Jr2-app</title>
</head>
@yield('header')
<body class="bg-sky-900 text-white">
<main class="container-md mx-auto">
    <h1 class="text-3xl font-bold">
        Hello world!
    </h1>
    @yield('main')
</main>
    <h1>Hola que onda</h1>
@yield('footer')
</body>
</html>
