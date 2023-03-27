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
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
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
                    <a class="nav-link @if(Route::current()->getName() == 'home') active @endif" aria-current="page"
                       href="{{ route('home') }}">@lang('menu.home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(str_contains(Request()->category_slug, 'tuto')) active @endif"
                       href="{{ route('category.or.article', ['category_slug' => 'tutorials', 'article_slug' => '']) }}">@lang('menu.tutorials')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::current()->getName() == 'contact') active @endif" href="{{ route('contact') }}">@lang('menu.contact')</a>
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
        <div class="col-md-2 pt-5 shadow-sm">
            <div class="card">
                <div class="card-img-top">
                    <h5 class="bg-secondary-subtle p-3">@lang('sidebar.last_article')</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($articles as $one)
                            <li>
                                <a href="{{ route('category.or.article', ['category_slug' => $one->category->slug, 'article_slug' => $one->slug]) }}">
                                    {{ $one->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
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
@vite('resources/js/app.jsx')
</body>
</html>
