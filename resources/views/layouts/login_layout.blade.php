<!-- resources/views/layouts/login_layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CloudClovis is an edtech venture focused on providing new-age education services and training on emerging industry trends.">
    <meta name="author" content="CloudClovis">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CloudClovis | NEW AGE EDUCATION</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/Cloudclovis/Marketing/Favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/Cloudclovis/Marketing/Favicon/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/Cloudclovis/Marketing/Favicon/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/Cloudclovis/Marketing/Favicon/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/Cloudclovis/Marketing/Favicon/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- BASE CSS and CUSTOM CSS PIPELINE-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/all_icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/custom.css') }}" rel="stylesheet">

</head>

<body id="login_bg">

    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <a href="{{ url('/') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Logo/logo.png') }}" width="149" height="42" data-retina="true" alt=""></a>
            </figure>

                @yield('content')

            <div class="copy">© 2018 CloudClovis</div>
        </aside>
    </div>
    <!-- /login -->

    <!-- COMMON SCRIPTS and SPECIFIC SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/common_scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/validate.js') }}"></script>

    @yield('secific_js')

</body>
</html>
