<x-default-layout>
    <div class="container">
        <h2>{{ $article->title }}</h2>
        <div>
            {!! $article->content !!}
        </div>
    </div>
</x-default-layout>
