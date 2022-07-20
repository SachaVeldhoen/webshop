<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="/scss/webshop.css">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="/scss/webshop.css">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit-icons.min.js"></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
</head>
<body>
<livewire:header />
    <h2>Images for product : <span class="text-primary">{{$product->name}}</span> </h2>
    <a href="/producten/" class="btn btn-primary">Go Back</a>
    <div class="row mt-4">
        @foreach ($images as $image)
            <div class="col-md-3">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="/product_images/{{$image->image}}" class="card-img-top">
                    </div>
                </div>
            </div>
        @endforeach
            <form wire:submit.prevent="addToCart({{ $product->id }})" action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input wire:model="quantity.{{ $product->id }}" min="1" max="9" type="number"
                       class="text-sm sm:text-base px-2 pr-2 rounded-lg border border-gray-400 py-1 focus:outline-none focus:border-blue-400"
                       style="width: 50px"/>
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add to Cart
                </button>
            </form>
    </div>
</body>
</html>
