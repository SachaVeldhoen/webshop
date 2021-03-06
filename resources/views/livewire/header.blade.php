<nav class="uk-navbar-container">
    <div class="uk-container">
        <div class="logo-side">
            <p>Loyale</p> <img src="/svg/perfume.svg" alt="perfume logo">
        </div>
        <div class="linking-side">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/producten/">Products</a></li>
                <li><a href="/sets/">Sets</a></li>
            </ul>
        </div>
        <div class="data-side">
            <a href="/account"><img src="/svg/user.svg" alt="account"></a>
            <a href="/cart"><img src="/svg/shopping-bag.svg" alt="shopping bag">
                @if ($cart_count)
                    <span>  {{$cart_count}}</span>
                @endif
            </a>

        </div>
    </div>
</nav>
{{--({{ $cart_count ?? '' }}) ${{ $cart_price ?? '' }}--}}
