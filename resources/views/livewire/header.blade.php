<nav class="uk-navbar-container" id="navbar">
    <div class="uk-container">
        <div class="logo-side">
            <a href="/"> <img id="navbarLogo" src="/svg/logo-svg.svg" alt="perfume logo"></a>
        </div>
        <div class="linking-side">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/producten/">Products</a></li>
                <li><a href="/producten/">For him</a></li>
                <li><a href="/producten/">For her</a></li>
                <li><a href="/sets/">Sets</a></li>
            </ul>
        </div>
        <div class="data-side">
            <a href="/account"><img src="/svg/user.svg" alt="account"></a>
            <a href="/cart"><img src="/svg/shopping-bag.svg" alt="shopping bag">
                @if ($cart_count)
                    <span>{{$cart_count}}</span>
                @endif
            </a>

        </div>
    </div>
</nav>

<script>
    const navigationBar = document.getElementById('navbar');
    const navigationBarLogo = document.getElementById('navbarLogo');
    window.addEventListener('scroll', () => {
        if (scrollY > 20) {
            navigationBar.style.height = "50px";
            navigationBarLogo.style.maxWidth = "90px";
        } else {
            navigationBar.style.height = "70px";
            navigationBarLogo.style.maxWidth = "110px";
        }
    })

</script>
