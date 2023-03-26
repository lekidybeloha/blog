<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@lang('meta.keywords')">
    <meta name="description" content="@lang('meta.description')">
    <meta name="author" content="@lang('meta.author')">
    @routes
    @inertiaHead
    @vite('resources/js/app.jsx')
    @if(Route::current()->getName() == 'admin.article.create')
        <script src="https://cdn.tiny.cloud/1/{{ env('TINY_MCE_KEY') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @endif
    @vite('resources/css/app.css')
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
@inertia
</body>
<footer class="">
    <div class="text-center">
        <small class="text-center">Copyright © 2022 <a target="_blank" href="https://www.elkana-vinet.com">Elkana
                Vinet</a> | Crédits photos : <a target="_blank" href="https://www.pexels.com">Pexels</a></small>
    </div>
</footer>
</body>
</html>
