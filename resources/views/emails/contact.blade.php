<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@lang('meta.keywords')">
    <meta name="description" content="@lang('meta.description')">
    <meta name="author" content="@lang('meta.author')">
    @vite('resources/css/app.css')
    <title>Email de contact</title>
</head>
<body>
<div class="container-fluid">
    <h2>Demande de contact</h2>
    <p>
        Vous avez reçu une demande de contact :
    <ul>
        <li>Nom : {{ $data['name'] }}</li>
        <li>Email : {{ $data['email'] }}</li>
        <li>Contenu : {{ $data['message'] }}</li>
    </ul>
    </p>
</div>

<footer class="">
    <div class="text-center">
        <small class="text-center">Copyright © 2022 <a target="_blank" href="https://www.elkana-vinet.com">Elkana
                Vinet</a> | Crédits photos : <a target="_blank" href="https://www.pexels.com">Pexels</a></small>
    </div>
</footer>
</body>
</html>
