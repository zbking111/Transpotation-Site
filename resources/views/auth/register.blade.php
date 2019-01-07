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

<!-- Register page start -->
<div class="register-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 cnt-bg-photo d-none d-xl-block d-lg-block d-md-block" style="background-image: url( {{asset('img/img-31.jpg')}} )">
                <div class="register-info">
                    <img src="{{asset('img/logos/black-logo.png')}}" alt="logo">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 align-self-center">
                <div class="content-form-box register-box">
                    <div class="login-header"><h4>Create Your account</h4></div>
                    <form action="{{ route('register') }}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Re-type Password</label>
                            <input type="Password" class="form-control" name="password" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-color btn-md btn-block">Create New Account</button>
                            <a href="{{ route('home') }}" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="login-footer text-center">
                            <p>Already have an account?<a href="{{ route('login') }}"> Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register page end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

    @include('layouts.bottom_js')
</body>

<!-- Mirrored from storage.googleapis.com/themevessel-xero/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:19:39 GMT -->
</html>