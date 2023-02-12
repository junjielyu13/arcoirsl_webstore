<div class="product-container">
    <div class="product-container-col-sm">
        @for ($i = 0; $i < 10; $i++)
            @php
                $ramnum = rand(1, 5);
                $imgType = '';
                if ($ramnum == 1 || $ramnum == 5) {
                    $imgType = 'product-sm';
                } elseif ($ramnum == 2 || $ramnum == 4) {
                    $imgType = 'product-md';
                } else {
                    $imgType = 'product-bg';
                }
            @endphp

            <div class="{{ $imgType }}">
                <img src="{{ $allProducts[$i]->main_image_url }}" alt="" srcset="" />
            </div>
        @endfor
    </div>
    <div class="product-container-col-md">
        @for ($i = 10; $i < 20; $i++)
            @php
                $ramnum = rand(1, 5);
                $imgType = '';
                if ($ramnum == 1 || $ramnum == 5) {
                    $imgType = 'product-sm';
                } elseif ($ramnum == 2 || $ramnum == 4) {
                    $imgType = 'product-md';
                } else {
                    $imgType = 'product-bg';
                }
            @endphp

            <div class="{{ $imgType }}">
                <img src="{{ $allProducts[$i]->main_image_url }}" alt="" srcset="" />
            </div>
        @endfor
    </div>
    <div class="product-container-col-bg">
        @for ($i = 20; $i < 30; $i++)
            @php
                $ramnum = rand(1, 5);
                $imgType = '';
                if ($ramnum == 1 || $ramnum == 5) {
                    $imgType = 'product-sm';
                } elseif ($ramnum == 2 || $ramnum == 4) {
                    $imgType = 'product-md';
                } else {
                    $imgType = 'product-bg';
                }
            @endphp

            <div class="{{ $imgType }}">
                <img src="{{ $allProducts[$i]->main_image_url }}" alt="" srcset="" />
            </div>
        @endfor
    </div>
    <div class="product-container-col-md">
        @for ($i = 30; $i < 40; $i++)
            @php
                $ramnum = rand(1, 5);
                $imgType = '';
                if ($ramnum == 1 || $ramnum == 5) {
                    $imgType = 'product-sm';
                } elseif ($ramnum == 2 || $ramnum == 4) {
                    $imgType = 'product-md';
                } else {
                    $imgType = 'product-bg';
                }
            @endphp

            <div class="{{ $imgType }}">
                <img src="{{ $allProducts[$i]->main_image_url }}" alt="" srcset="" />
            </div>
        @endfor
    </div>
    <div class="product-container-col-sm">
        @for ($i = 40; $i < 50; $i++)
            @php
                $ramnum = rand(1, 5);
                $imgType = '';
                if ($ramnum == 1 || $ramnum == 5) {
                    $imgType = 'product-sm';
                } elseif ($ramnum == 2 || $ramnum == 4) {
                    $imgType = 'product-md';
                } else {
                    $imgType = 'product-bg';
                }
            @endphp

            <div class="{{ $imgType }}">
                <img src="{{ $allProducts[$i]->main_image_url }}" alt="" srcset="" />
            </div>
        @endfor
    </div>
</div>
