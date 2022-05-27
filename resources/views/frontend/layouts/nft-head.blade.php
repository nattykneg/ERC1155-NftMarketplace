<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/nft/css/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('favicon.png') }}">

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/nft/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/nft/js/web3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/nft/js/ethjs-unit.min.js') }}"></script>
    <script src="{{ URL::asset('assets/nft/js/ethers-5.2.umd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/nft/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}" type="text/javascript"></script>
    @yield('head')
</head>
