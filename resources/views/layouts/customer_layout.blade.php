<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/custom.css') }}" rel="stylesheet">

</head>
<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Logo/logo.png') }}" width="163" height="36" data-retina="true" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="{{ url('/home') }}">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>{{ Auth::guard('customer')->user()->name }}: Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Navigation-->

    @yield('content')

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © CloudClovis 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- COMMON SCRIPTS and SPECIFIC SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/admin/jquery.easing.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('js/admin/Chart.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/admin/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.selectbox-0.2.js') }}"></script>
    <script src="{{ asset('js/admin/retina-replace.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.magnific-popup.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/admin/admin.js') }}"></script>

    @yield('secific_js')

</body>
</html>
