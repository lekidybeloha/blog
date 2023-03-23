<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@lang('meta.keywords')">
    <meta name="description" content="@lang('meta.description')">
    <meta name="author" content="@lang('meta.author')">
    @vite('resources/css/app.css')
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/mini-logo.png') }}"
                                                                class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">@lang('menu.home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('menu.tutorials')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@lang('menu.contact')</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="@lang('search.search')"
                       aria-label="@lang('search.search')">
                <button class="btn btn-primary" type="submit">@lang('search.search')</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">@lang('sidebar.last_article')</h5>

                </div>
            </div>
        </div>
        <div class="col-md-10">
            {{ $slot }}
        </div>
    </div>
</div>

<footer class="">
    <div class="text-center">
        <small class="text-center">Copyright © 2022 <a target="_blank" href="https://www.elkana-vinet.com">Elkana
                Vinet</a> | Crédits photos : <a target="_blank" href="https://www.pexels.com">Pexels</a></small>
    </div>
</footer>
@vite('resources/js/app.js')
</body>
</html>
