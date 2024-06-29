<x-template>
    <div class="row">
        <div class="col md-4">
            <img src="https://dynamic.zacdn.com/kkFLOZVk0k-KsaLLO3921aCpXMc=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-1756-2186234-2.jpg" class="card-img-top" alt="...">
        </div>
        <div class="col md-8">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <h3 class="text-danger">Rp {{$product->price}}</h3>
            <a href="{{ route ('catalog') }}" class="btn btn-primary">KEMBALI</a>
        </div>
    </div>
</x-template>
