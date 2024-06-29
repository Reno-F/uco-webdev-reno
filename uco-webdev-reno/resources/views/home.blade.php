<x-template>
    <form>
        <select class="form-select" name="sort">
            <option value="name_az">Name A-Z</option>
            <option value="name_za">Name Z-A</option>
            <option value="lowest_price">Lowest Price</option>
            <option value="highest_price">Highest Price</option>
        </select>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-6 col-lg-3">
            <div class="card mb-3">
                <img src="https://dynamic.zacdn.com/kkFLOZVk0k-KsaLLO3921aCpXMc=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-1756-2186234-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <h3 class="text-danger">Rp {{$product->price}}</h3>
                    <a href="{{ route('catalog-detail', ['id' => $product->id]) }}" class="btn btn-primary">LIHAT DETAIL</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-template>
