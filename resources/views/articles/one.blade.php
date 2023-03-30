<x-default-layout>
    <div class="container">
        <h2>{{ $article->title }}</h2>
        <div>
            {!! $article->content !!}
        </div>
        <div class="mt-3">
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-9832408140141934"
                 data-ad-slot="1380738540"></ins>
        </div>
    </div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9832408140141934"
            ></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</x-default-layout>
