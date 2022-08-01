<div class="shopping-cart">
    {{--    <div class="uk-container">--}}
    <h1 class="uk-h1">Shopping cart</h1>
    @if (count($cartProducts))
    <div class="cart">
        <div class="cart-items">
            <div class="items-headline">
                <p>Product</p>
                <p>Amount</p>
                <p>Price</p>
            </div>
            <div class="items-grid">

                    @forelse ($cartProducts as $product)
                        <div class="single-cart-item">
                            <div class="item-name">
                                <a href="{{route('product.images',$product->id)}}">
                                    <img src="/product_images/{{$product->options->thumbnail}}">
                                    <p>{{$product->name}}</p>
                                </a>
                            </div>
                            <p>{{$product->qty}}</p>
                            <p>€{{ number_format($product->price * $product->qty, 2, ',', '')  }}</p>
                            <a wire:click.prevent="doRemove('{{$product->rowId}}')" method="POST">
                                <button type="submit">Verwijder</button>
                            </a>
                            <a wire:click.prevent="increaseQuantity('{{$product->rowId}}')" method="POST">
                                <button type="submit">+</button>
                            </a>
                            <a wire:click.prevent="decreaseQuantity('{{$product->rowId}}')" method="POST">
                                <button type="submit">-</button>
                            </a>
                        </div>
                    @empty
                    @endforelse

            </div>
        </div>
        <div class="cart-payment">
            <h3>Betalen</h3>
            <div class="cart-info">
                <div class="single-info">
                    <p class="left-info">Subtotaal</p>
                    <p>€{{ $cart_price ?? '' }}</p>
                </div>
                <div class="single-info">
                    <p class="left-info">Verzending</p>
                    <p>€2,95</p>
                </div>
                <div class="single-info">
                    <p class="left-info">Totaalbedrag</p>
                    <p>€{{ $cart_price + 2.95 }}</p>
                </div>
            </div>
            <a href="/payment-step2">
                <div class="continue-payment">Doorgaan naar afrekenen</div>
            </a>

        </div>
    </div>
        @else
        <h3>No products</h3>
    @endif
    {{--    </div>--}}


</div>

{{--({{ $cart_count ?? '' }}) ${{ $cart_price ?? '' }}--}}
