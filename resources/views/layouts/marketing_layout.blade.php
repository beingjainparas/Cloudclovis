<!-- resources/views/layouts/marketing_layout.blade.php -->

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
    <link href="{{ asset('css/marketing/menu_2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/all_icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/marketing/custom.css') }}" rel="stylesheet">
    <!-- Modernizr top js pipeline -->
    <script src="{{ asset('js/marketing/modernizr.js') }}"></script>

</head>

<body>

    <div id="page">

    <header class="header menu_2">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
        <div id="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('img/Cloudclovis/Marketing/Logo/logo.png') }}" width="149" height="42" data-retina="true" alt=""></a>
        </div>
        <ul id="top_menu">
            @if (Route::has('login'))
                @auth('customer')
                    <li class="hidden_tablet"><a href="{{ url('/home') }}" class="btn_1 rounded">{{ Auth::guard('customer')->user()->name }}: Go to Dashboard</a></li>
                @else
                    <li><a href="{{ url('/login') }}" class="login">Login</a></li>
                    <li class="hidden_tablet"><a href="{{ url('/register') }}" class="btn_1 rounded">Register</a></li>
                @endauth
            @endif
        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <ul>
                <li><span><a href="{{ url('/') }}">Home</a></span>
                </li>
                <li><span><a href="{{ url('/courses') }}">Courses</a></span>
                </li>
                <li><span><a href="{{ url('/about') }}">About</a></span>
                </li>
                <li><span><a href="{{ url('/contacts') }}">Contacts</a></span>
                </li>
                <li><span><a href="{{ url('/portfolio') }}">Portfolio</a></span>
                </li>
                <li><span><a href="{{ url('/community') }}">Community</a></span>
                </li>
            </ul>
        </nav>
        <!-- Search Menu -->
        <div class="search-overlay-menu">
            <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
            <form role="search" id="searchform" method="get">
                <input value="" name="q" type="search" placeholder="Search..." />
                <button type="submit"><i class="icon_search"></i>
                </button>
            </form>
        </div><!-- End Search Menu -->
    </header>
    <!-- /header -->

    @yield('content')

    <footer>
        <div class="container margin_120_95">
            <div class="row">
                <div class="col-lg-5 col-md-12 p-r-5">
                    <p><img src="{{ asset('img/Cloudclovis/Marketing/Logo/logo.png') }}" width="149" height="42" data-retina="true" alt=""></p>
                    <p>CloudClovis is an edtech venture focused on providing new-age education services and training on emerging industry trends.</p>
                    <div class="follow_us">
                        <ul>
                            <li>Follow us</li>
                            <li><a href="https://www.facebook.com/cloudclovisdata/"><i class="ti-facebook"></i></a></li>
                            <li><a href="https://twitter.com/cloudclovis/"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="https://www.instagram.com/cloudclovis/"><i class="ti-instagram"></i></a></li>
                            <li><a href="https://in.linkedin.com/company/cloudclovis"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ml-lg-auto">
                    <h5>Useful links</h5>
                    <ul class="links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/courses') }}">Courses</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/contacts') }}">Contacts</a></li>
                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact with Us</h5>
                    <ul class="contacts">
                        <li><a href="tel://919867787663"><i class="ti-mobile"></i> + 91 98 6778 7663</a></li>
                        <li><a href="mailto:cloudclovis.info@gmail.com"><i class="ti-email"></i> cloudclovis.info@gmail.com</a></li>
                    </ul>
                    <div id="newsletter">
                    <h6>Newsletter</h6>
                    <div id="message-newsletter"></div>
                    <form name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <input type="submit" value="Submit" id="submit-newsletter">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <!-- <ul id="additional_links">
                        <li><a href="{{ url('/terms') }}">Terms and conditions</a></li>
                        <li><a href="{{ url('/privacy') }}">Privacy</a></li>
                    </ul> -->
                </div>
                <div class="col-md-4">
                    <div id="copy">© 2018 CloudClovis</div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS and SPECIFIC SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/common_scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/marketing/validate.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#submit-newsletter').click(function(e){
                e.preventDefault();

                $("#message-newsletter").slideUp(750,function() {
                    $('#message-newsletter').hide();
                    $('#submit-newsletter')
                        .after('<i class="icon-spin4 animate-spin loader"></i>')
                        .attr('disabled','disabled');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ url('/newsletter/post') }}",
                        method: 'post',
                        data: {
                            email: $('#email_newsletter').val()
                        },
                        success: function(result){
                            $('#message-newsletter').html("");
                            if($.isEmptyObject(result.errors)){
                                $('#message-newsletter').append('<p>'+result.success+'</p>');
                            }else{
                                $.each(result.errors, function(key, value){
                                    $('#message-newsletter').append('<p>'+value+'</p>');
                                });
                            }
                            $('#message-newsletter').slideDown('slow');
                            $('#newsletter_form .loader').fadeOut('slow',function(){$(this).remove()});
                            $('#submit-newsletter').removeAttr('disabled');
                        }
                    });
                });
            });
        });
    </script>

    @yield('secific_js')

</body>
</html>
