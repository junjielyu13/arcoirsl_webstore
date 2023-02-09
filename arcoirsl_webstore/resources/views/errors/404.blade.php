<!DOCTYPE html>
<html lang="en">


@include('partials._head')

<body>

    @include('partials._header')

    @include('partials._nav')

    <div class="container">
        <div class="container-404">
            <div class="container-text">
                <h1>404</h1>
                <h2>Page not found</h2>
                <p>Sorry, we couldn't find this page</p>
                <a href="{{ route('/home') }}">Go home</a>
            </div>
        </div>
    </div>



    @include('partials._footer')
</body>

</html>
