<div class="container-swiper">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-main">
                <div class="slide-button">
                    <p class="slide-button-text">
                        Order now
                        <i class="fa-solid fa-chevron-right"></i>
                    </p>
                </div>
            </div>
            <div class="swiper-slide slide-second">
                <div class="slide-button">
                    <p class="slide-button-text">Order now ></p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-white"></div>
    </div>
    <div class="swiper-button-next swiper-white"></div>
    <div class="swiper-button-prev swiper-white"></div>
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
