<x-template>
    <div class="row">
        @for($i=1;$i<6;$i++)
        <div class="col-md-6 col-lg-3">
            <div class="card mb-3">
                <img src="https://dynamic.zacdn.com/kkFLOZVk0k-KsaLLO3921aCpXMc=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-1756-2186234-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hush Puppies {{$i}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('catalog-detail', ['id' => $i]) }}" class="btn btn-primary">LIHAT DETAIL</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</x-template>
