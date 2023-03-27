<x-default-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-auto">
                @if($category->articles != null)
                    @foreach($category->articles as $one)
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2>{{ $one->title }}</h2>
                                </div>
                                <p>
                                    {!! Str::words($one->content, 20) !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center">Aucun articles publié dans cette catégorie</div>
                @endif
            </div>
        </div>
    </div>
</x-default-layout>
