<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-xero/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:19:00 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDTWJ3Z');</script>
    <!-- End Google Tag Manager -->
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/jquery.selectBox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/rangeslider.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/leaflet.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/map.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/jquery.mCustomScrollbar.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/fonts/flaticon/font/flaticon.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('/css/skins/default.css') }}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login page start -->
<div class="login-page cnt-bg-photo overview-bgi" style="background-image: url({{ asset('img/banner-1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-form-box forgot-box clearfix">
                    <div class="login-header clearfix">
                        <div class="pull-left">
                            <img src="{{ asset('img/logos/black-logo.png') }}" alt="logo">
                        </div>
                        <div class="pull-right">
                            <h4>Login</h4>
                        </div>
                    </div>
                    <p>Please enter your user name and password to login</p>
                    <form action="{{ route('login') }}" method="POST" role="form" enctype = "multipart/form-data" id="loginform" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="Password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check checkbox-theme">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Keep Me Signed In
                                </label>
                            </div>
                        </div>
                        <div class="login-footer text-center">
                            <p>Dont have an account?<a href="{{route('register')}}"> Sign Up</a></p>
                        </div>
                        <input type="submit" class="btn btn-color btn-md pull-left" value="Login">
                        <a href="{{ route('home') }}" class="btn btn-danger pull-right">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login page end -->



    @include('layouts.bottom_js')

</body>
<!-- Mirrored from storage.googleapis.com/themevessel-xero/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:19:39 GMT -->
</html>