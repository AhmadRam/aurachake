<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aurachake.com.tr/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jan 2021 14:10:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aura Chake</title>
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/css/interaktifis.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('/css/owl.theme.default.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{asset('/js/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css" />

</head>


<body>
    <div class="container-fluid">
        <div class="col-md-4">
            <a href="{{url('/')}}" title="Anasayfa">
                <img style="max-height: 46px;" src="{{asset('img/logo.png')}}" alt="Aura Chaké" title="Aura Chaké Logo" class="img-responsive mt-10 mb-10" />
            </a>
        </div>
        <div class="col-md-8">
            <nav class="navbar navbar-default">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{Route::is('home') ? 'active' : ''}}"><a href="{{ url(app()->getLocale(),'') }}">{{ __('HOME')}}</a></li>
                        <li class="{{Route::is('aboutUs') ? 'active' : ''}}"><a href="{{ url(app()->getLocale(),'AboutUs') }}">{{ __('About Us')}}</a></li>
                        <li class="dropdown {{Route::is('categories') || Route::is('product') ? 'active' : ''}}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ __('CATEGORIES')}} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($category as $cat)
                                <li><a href="{{ url(app()->getLocale(),'categories') }}/{{$cat->id}}">{{__($cat->name)}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{Route::is('campaigns') ? 'active' : ''}}"><a href="{{ url(app()->getLocale(),'campaigns') }}">{{ __('CAMPAIGNS')}}</a></li>
                        <li class="{{Route::is('contact') ? 'active' : ''}}"><a href="{{ url(app()->getLocale(),'contact') }}">{{ __('CONTACT')}}</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (!Auth::check())
                        <li class=""><a href="{{ route('register',app()->getLocale()) }}">{{ __('Register')}}</a></li>
                        <li class=""><a href="{{ route('login',app()->getLocale()) }}">{{ __('Login')}}</a></li>
                        @endif
                        <li><a href="javascript:void(0);" title="Search" id="arama"><i class="fa ft-18 fa-search"></i></a></li>
                        <li>
                            @if(app()->getLocale() == 'en')
                            <a href="{{ route(Route::currentRouteName(), ['tr',is_numeric(request()->segment(count(request()->segments()))) ? request()->segment(count(request()->segments())) : '']) }}" title="İngilizce" id="ingilizce">TR</a>
                            @else
                            <a href="{{ route(Route::currentRouteName(), ['en',is_numeric(request()->segment(count(request()->segments()))) ? request()->segment(count(request()->segments())) : '']) }}" title="İngilizce" id="ingilizce">EN</a>
                            @endif
                        </li>

                    </ul>
                    @if (Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url(app()->getLocale(),'cart') }}" title="Sepetim" class="text-685f52"><i class="fa ft-18 fa-shopping-cart"></i>(<span data-sayi="0" id="sepetAdet">@if(null !== session('cart')){{ session('orderCounter') }} @else 0 @endif</span>)</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user"></i> {{Auth::user()->name}}<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url(app()->getLocale())}}/profile/profile/{{Auth::user()->address_id}}" title="Profile" class="text-685f52"><i class="fa fa-user"></i> {{ __('Profile')}}</a></li>
                                    <li><a href="{{url(app()->getLocale())}}/profile/Change-Password" title="Change Password" class="text-685f52"><i class="fa fa-lock"></i> {{ __('Change')}} {{__('Password')}}</a></li>
                                    <li><a href="{{url(app()->getLocale())}}/user/myorder" title="Üyelik İşlemleri" class="text-685f52"><i class="fa fa-star"></i> {{ __('My Orders')}}</a></li>
                                    <li><a href="{{url(app()->getLocale())}}/profile/address/{{Auth::user()->address_id}}" title="Address" class="text-685f52"><i class="fa fa-building"></i> {{ __('Address')}}</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{app()->getLocale()}}/logout" title="Logout" class="text-685f52"><i class="fa fa-sign-out"></i> {{ __('Logout')}}</a></li>
                                </ul>
                                @endif
                </div>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="headerBorder display-block"></div>
        </div>
        <div class="col-md-offset-8 col-md-4 mb-20" style="display:none;" id="aramaAlan">
            <div style="background: black; padding:10px;">
                <form method="get" action="{{route('user.search', app()->getLocale())}}" id="form">
                    <div class="row">
                        <div class="col-md-10 no-padding-right">
                            <input type="text" class="form-control formIletisim" name="n" id="keyword" placeholder="Search..." />
                        </div>
                        <div class="col-md-2 no-padding-left">
                            <button type="submit" class="btn btn-success full-width"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="container-fluid">
        <div class="col-md-12 mt-30">
            <div class="pt-80 pb-80 pr-30 pl-30 bg-eeeeee">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="typo-newsletter-content">
                            <h3 class="bultenBaslik text-center"><span>{{ __('Subscribe')}}</span></h3>
                            <div class="content">
                                <div class="bultenYazi text-center">{{ __('Sign up for our newsletter to take advantage of great opportunities')}}</div>
                                <form action="javascript:void(0);" method="post" id="bultenForm">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="email" name="emailBulten" placeholder="{{(__('You can register by typing your email address.'))}} " class="form-control input-lg" required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-lg" type="submit">{{ __('Submit')}}</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clear clearfix"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div id="bultenSonuc" class="display-block mt-10 ml-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <hr />
        </div>
        <div class="footer">
            <div class="col-md-3 text-left">
                <h3 class="footerTitle">{{ __('CORPORATE')}}</h3>
                <ul class="list-unstyled">
                    <li><a class='footerListe' href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
                    <li><a class='footerListe' href="{{ url(app()->getLocale(),'career') }}">{{ __('Career')}}</a></li>
                    <li><a class='footerListe' href="{{ url(app()->getLocale(),'contact') }}">{{ __('Contact')}}</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-left">
                <h3 class="footerTitle">{{ __('INFORMATION')}}</h3>
                <ul class="list-unstyled">
                    <li><a class="footerListe" href="{{url(app()->getLocale())}}/information/sales-agreement">{{ __('Sales Agreement')}}</a></li>
                    <li><a class="footerListe" href="{{url(app()->getLocale())}}/information/return-policy">{{ __('Return Policy')}}</a></li>
                    <li><a class="footerListe" href="{{url(app()->getLocale())}}/information/privacy-policy">{{ __('Privacy Policy')}}</a></li>
                    <li><a class="footerListe" href="{{url(app()->getLocale())}}/information/user-agreement">{{ __('User Agreement')}}</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-left">
                <h3 class="footerTitle">{{ __('CATEGORIES')}}</h3>
                <ul class="list-unstyled">
                    @foreach($category as $cat)
                    <li><a class='footerListe' href="{{ url(app()->getLocale(),'categories') }}/{{$cat->id}}">{{__($cat->name)}} </a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <div class="">
                    <img src="{{asset('img/logo.png')}}" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <hr />
        </div>
        <div class="text-center col-md-12 mt-10 mb-10">
            <img src="{{asset('img/kartreklam.png')}}" class="m-auto img-responsive" />
        </div>
        <div class="col-md-12">
            <hr />
        </div>
        <div class="col-md-6 ft-12">
            2021 All Rights Reserved. Aura Chaké Paris. </div>
        <div class="col-md-6 text-right">
            <ul class="list-inline">
            </ul>
        </div>
    </div>

    <script src="{{asset('../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.js')}}"></script>
    <script src="{{asset('/js/validation/validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/block-ui.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/jquery-placeholder/jquery-placeholder.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/jquery-maskedinput/jquery.maskedinput.js')}}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('/js/bootstrap-datepicker/locales/bootstrap-datepicker.tr.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/imask"></script>
    <script type="text/javascript">
        var phoneMask = IMask(
            document.getElementById('phoneNumber'), {
                mask: '0 (000) 000 00 00'
            });
    </script>

    <script>
        jQuery(document).ready(function($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });

        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {


            $("#bultenForm").validate({
                submitHandler: function(form) {

                    var url = "/bultenKayit"; // the script where you handle the form input.

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#bultenForm").serialize(), // serializes the form's elements.
                        success: function(data) {
                            $("#bultenSonuc").html("");
                            $("#bultenSonuc").html(data);

                        }
                    });

                    //    e.preventDefault();

                },
                errorClass: "invalid",
                rules: {
                    emailBulten: {
                        required: true,
                        email: true
                    },
                    menude: {
                        required: true,
                    }

                },
                messages: {
                    emailBulten: "*",
                    menude: "■",
                }

            });
        });

        $("body").on("click", "#arama", function() {
            $("#aramaAlan").toggle();
        });
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4558975-98"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-4558975-98');
    </script>

</body>

</html>