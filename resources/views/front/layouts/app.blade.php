<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gummy Specialists') }}</title>

    <!-- Meta data -->
    <meta name="author" content="Gummy Specialists" />
    <meta name="description" content="@yield('seo_description')"/>
    <meta name="Resource-type" content="@yield('seo_resource_type')" />
    <meta name="keywords" content="@yield('seo_keywords')">
    <link rel="image_src" href="@yield('seo_image')" />

    @include('front.partials.favicon')

    <!-- Fonts -->
    <link href="{{ asset('css/front/fonts.css') }}" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/front/themify-icons.css') }}" />

    <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/navbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/supplement-manufacturing.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/meet-the-team.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/awards-certifications.css') }}" rel="stylesheet" />
    @stack('custom-style')
    <link href="{{ asset('css/front/who-to-contact.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/faq.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/fulfillment.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/product.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/product-details.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/blog.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/blog-details.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/labdoor-partnership.css') }}" rel="stylesheet" />


    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <link rel='stylesheet' href="css/ie/ie8.css">
     <![endif]-->

</head>

<body>
    <div id="app">
        <div class="container-fluid g-0">
            <div class="row g-0">
                @include('front.partials.navbar')
                @yield('content')
                @include('front.partials.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Common Scripts -->
    <script>
        var SITEURL = "{{ URL::to('') }}";
        var ASSET_URL = "{{ config('app.asset_url') }}/";
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        var no_data_found = 'No data found';
    </script>
    <script src="{{ asset('js/admin/main.js') }}"></script>

    @stack('custom-scripts')
</body>

</html>
