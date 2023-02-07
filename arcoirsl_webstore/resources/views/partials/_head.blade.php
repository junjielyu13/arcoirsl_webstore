<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>



    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend.css?v=1') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css?v=4') }}" media="all" />

    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic'
        rel='stylesheet' type='text/css'>

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#181818">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#181818">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    @stack('style')
    @stack('script')

    <link rel="shortcut icon" href="{{ asset('frontend/images/fav-icon.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}" />

    <script src="https://kit.fontawesome.com/799073a1c9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/799073a1c9.css" crossorigin="anonymous" />

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>

</head>
