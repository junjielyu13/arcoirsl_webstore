<!DOCTYPE html>
<html lang="en">


@include('partials._head')

<body>

    @include('partials._header')

    @include('partials._nav')

    <div class="container">
        @yield('product.product')
    </div>

    @include('partials._footer')

</body>

</html>
