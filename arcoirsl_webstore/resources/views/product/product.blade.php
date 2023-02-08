{{-- <div class="container"> --}}
<div class="back">
    <i class="fa-solid fa-arrow-left"></i>
</div>

<div class="product-context">
    <div class="product-img">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide img1"></div>
                <div class="swiper-slide img2"></div>
                <div class="swiper-slide img3"></div>
            </div>
            <div class="swiper-pagination swiper-white"></div>
            <div class="swiper-button-next swiper-white"></div>
            <div class="swiper-button-prev swiper-white"></div>
        </div>
    </div>

    <div class="product-info">
        <div class="basic-info">
            <div class="product-info-title">Heat Wave</div>
            <div class="product-info-description">
                [Personalized] Customizable and reusable false nails
                with different sizes available.
            </div>
            <div class="product-info-price">20 €</div>
        </div>
        <div class="product-size-button">
            <div class="product-size">
                <span class="size"> Size </span>
                <span class="size-box"> S </span>
                <span class="size-box"> M </span>
                <span class="size-box"> L </span>
                <span class="size-box"> XL </span>
            </div>
            <div class="product-button">
                <div class="button-add-bag">Add To Bag</div>
                <div class="button-add-like">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-instruction">
    <div class="instruction-title">INSTRUCTIONS</div>
    <div class="instruction-img">
        <div class="instruction-img-1"></div>
        <div class="instruction-img-2"></div>
    </div>
</div>


<script type="text/javascript" src="{{ URL::asset('js/swiper-bundle.min.js') }}"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
