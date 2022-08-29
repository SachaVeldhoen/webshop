<div class="mobile-swiper">
    <div class="swiper mobileSwiper">
        <div class="swiper-wrapper">
            @forelse ($products as $product)
                <div class="swiper-slide mobile-swiper-slide">
                    <img class="product-image" src="/product_images/{{$product->thumbnail}}"/>
                    <div class="product-info">
                        <h4 class="product-title">{{ $product->name }}</h4>
                        @foreach ($product->tags as $tag)
                            <p class="product-tags">{{$tag->name}}</p>
                        @endforeach
                        <p class="product-price">€{{ number_format($product->price / 100, 2) }}</p>
                        <span class="product-check">
                        <svg xmlns="http://www.w3.org/2000/svg" height="512pt" viewBox="0 0 512 512" width="512pt"><path
                                d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm112 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0"/></svg>
                    </span>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="desktop-swiper">
    <div class="featured-image">
        <img id="firstFeaturedImage" style="display: block" src="/product_images/Prime-image-1659373184572.jpg" alt="">
        <img style="display: none" src="/product_images/Checho-image-1658859355263.jpg" alt="">
        <img style="display: none" src="/product_images/Parfum12-image-1658444592133.jpg" alt="">
    </div>
    <div class="featured-bio">
        <h3>We know <br> & understand your <br>great choice</h3>
        <p class="product-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore
            magna aliqua. Ut enim ad minim veniam</p>
        <div class="images-buttons">
            <button id="image-prev" onclick="nextImage()">
                <svg width="38px" height="38px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-440.000000, -2106.000000)" fill="#FFFFFF" id="Group-8">
                            <g transform="translate(440.000000, 2106.000000)">
                                <g id="Rectangle-Copy-6" fill-opacity="0.1" stroke="#FFFFFF">
                                    <rect id="Rectangle-Copy-2" x="0.5" y="0.5" width="37" height="37" rx="18.5"></rect>
                                </g>
                                <g id="down-arrow-copy-3"
                                   transform="translate(19.830251, 18.875139) rotate(-90.000000) translate(-19.830251, -18.875139) translate(12.830251, 14.875139)"
                                   fill-rule="nonzero">
                                    <path
                                        d="M13.7762258,0.66863042 L13.3176367,0.221885754 C13.1733104,0.0823675155 12.9812925,0.00550584997 12.7760714,0.00550584997 C12.570964,0.00550584997 12.3787185,0.0823675155 12.2343921,0.221885754 L7.00313011,5.28308328 L1.76583549,0.216269787 C1.62173676,0.0767515485 1.4294913,1.17705813e-14 1.22438394,1.17705813e-14 C1.01927658,1.17705813e-14 0.826917292,0.0767515485 0.682704737,0.216269787 L0.224001821,0.660261528 C-0.0746672737,0.9489883 -0.0746672737,1.419298 0.224001821,1.70802478 L6.45962975,7.76236752 C6.60372849,7.90177564 6.79574631,8 7.00267482,8 L7.00506508,8 C7.21028626,8 7.40230408,7.90166552 7.54640282,7.76236752 L13.7762258,1.72443221 C13.9205522,1.58502409 13.9997724,1.39364074 14,1.19520991 C14,0.996668961 13.9205522,0.807928424 13.7762258,0.66863042 Z"
                                        id="Path"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <span class="images-progress progress-bkg"></span>
            <span class="images-progress progress-line" id="img-progress"></span>
            <button id="image-next" onclick="nextImage(1)" style="margin-left: 120px">
                <svg width="38px" height="38px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-440.000000, -2106.000000)" fill="#FFFFFF" id="Group-8">
                            <g transform="translate(440.000000, 2106.000000)">
                                <g id="Rectangle-Copy-6" fill-opacity="0.1" stroke="#FFFFFF">
                                    <rect id="Rectangle-Copy-2" x="0.5" y="0.5" width="37" height="37" rx="18.5"></rect>
                                </g>
                                <g id="down-arrow-copy-3"
                                   transform="translate(19.830251, 18.875139) rotate(-90.000000) translate(-19.830251, -18.875139) translate(12.830251, 14.875139)"
                                   fill-rule="nonzero">
                                    <path
                                        d="M13.7762258,0.66863042 L13.3176367,0.221885754 C13.1733104,0.0823675155 12.9812925,0.00550584997 12.7760714,0.00550584997 C12.570964,0.00550584997 12.3787185,0.0823675155 12.2343921,0.221885754 L7.00313011,5.28308328 L1.76583549,0.216269787 C1.62173676,0.0767515485 1.4294913,1.17705813e-14 1.22438394,1.17705813e-14 C1.01927658,1.17705813e-14 0.826917292,0.0767515485 0.682704737,0.216269787 L0.224001821,0.660261528 C-0.0746672737,0.9489883 -0.0746672737,1.419298 0.224001821,1.70802478 L6.45962975,7.76236752 C6.60372849,7.90177564 6.79574631,8 7.00267482,8 L7.00506508,8 C7.21028626,8 7.40230408,7.90166552 7.54640282,7.76236752 L13.7762258,1.72443221 C13.9205522,1.58502409 13.9997724,1.39364074 14,1.19520991 C14,0.996668961 13.9205522,0.807928424 13.7762258,0.66863042 Z"
                                        id="Path"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
        <div class="images-thumb">
            <div class="single-image" id="singleImage">
                <img src="/product_images/Prime-image-1659373184572.jpg" alt="">
                <span></span>
            </div>
            <div class="single-image"><img src="/product_images/Checho-image-1658859355263.jpg" alt=""></div>
            <div class="single-image"><img src="/product_images/Parfum12-image-1658444592133.jpg" alt=""></div>
        </div>
        <div class="images-thumb-line">
            <div> <span style="width: 90px" id="firstImageThumbLine"></span></div>
            <div> <span id="secondImageThumbLine"></span></div>
            <div> <span id="thirdImageThumbLine"></span></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    var mobileSwiper = new Swiper(".mobileSwiper", {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        spaceBetween: 20,
        coverflowEffect: {
            rotate: 10,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>

<style>
    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .mobile-swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
    }

</style>
