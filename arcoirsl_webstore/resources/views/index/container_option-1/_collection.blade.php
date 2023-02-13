<div class="container-collection">
    <div class="collection-title">
        <span class="collection-title-text">
            LATEST COLLECTION
        </span>
    </div>
    <div class="collection-box">
        <div class="collection-row">
            @foreach ($topProducts as $product)
                <a href="{{ route('/product', $product->external_product_id) }}">
                    <div class="item">
                        <div class="item-img"></div>
                        <div class="item-info">
                            <div class="item-info-name">{{ $product->item_name }}</div>
                            <div class="item-info-price">{{ $product->standard_price }}€</div>
                        </div>
                        <div class="item-button">
                            Order now
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
