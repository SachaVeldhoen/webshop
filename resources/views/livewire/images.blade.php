<div class="single-item">
    <h1>{{$product->name}}</h1>
    <h2> ${{ number_format($product->price / 100, 2) }}</h2>
    <div class="images-grid">
        @foreach ($images as $image)
            <img src="/product_images/{{$image->image}}" class="card-img-top">
        @endforeach
    </div>
    @foreach ($product->tags as $tag)
       <p class="uk-label">{{$tag->name}}</p>
    @endforeach
    <form wire:submit.prevent="addToCart({{$product->id}})" action="{{ route('cart.store') }}" method="POST">
        @csrf
        <input wire:model="quantity.{{$product->id}}" min="1" max="9" type="number"
               class="text-sm sm:text-base px-2 pr-2 rounded-lg border border-gray-400 py-1 focus:outline-none focus:border-blue-400"
               style="width: 50px"/>
        <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add to Cart
        </button>
    </form>
</div>
