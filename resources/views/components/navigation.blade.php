<div id="navigation">
    <div class="container">
        <a class="logo" href="/">
            <img id="logoImage" src="/svg/dark.png" alt="">
        </a>
        <div class="links">
{{--            <a href="/over-ons" class="{{ request()->is('over-ons*') ? 'nav-active' : '' }}">Over ons</a>--}}
{{--            <a href="/over-ons" class="{{ request()->is('over-ons*') ? 'nav-active' : '' }}">Nieuws</a>--}}
{{--            <a href="/over-ons" class="{{ request()->is('over-ons*') ? 'nav-active' : '' }}">Veelgestelde vragen</a>--}}
        </div>
        <a class="header-cta" href="/contact">Contact</a>
    </div>
</div>

<script>
    window.onscroll = function() {myFunction()};

    let navbar = document.getElementById("navigation");

    let logoImage = document.getElementById("logoImage");



    function myFunction() {
        if (window.pageYOffset >= 100) {
            navbar.classList.add("sticky")
            logoImage.src = '/svg/light.png'
        } else {
            logoImage.src = '/svg/dark.png'
            navbar.classList.remove("sticky");
        }
    }
</script>
