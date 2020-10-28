<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:56:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Sign In</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('front') }}/images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='{{ asset('front') }}/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="{{ asset('front') }}/css/vertical-responsive-menu.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/night-mode.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('front') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('front') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/semantic/semantic.min.css">

</head>

<body>
<!-- Signup Start -->
<div class="sign_in_up_bg">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a href="{{ route('front.home') }}"><img src="{{ asset('front') }}/images/logo.svg" alt=""></a>
                    <a href="{{ route('front.home') }}"><img class="logo-inverse" src="{{ asset('front') }}/images/ct_logo.svg" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <h2>Welcome Back</h2>
                    <p>Log In to Your Edututs+ Account!</p>
                    <button class="social_lnk_btn color_btn_fb"><i class="uil uil-facebook-f"></i>Continue with Facebook</button>
                    <button class="social_lnk_btn mt-15 color_btn_tw"><i class="uil uil-twitter"></i>Continue with Twitter</button>
                    <button class="social_lnk_btn mt-15 color_btn_go"><i class="uil uil-google"></i>Continue with Google</button>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="email" name="email" value="" id="id_email" required="" maxlength="64" placeholder="Email Address">
                                <i class="uil uil-envelope icon icon2"></i>
                            </div>
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
                                <i class="uil uil-key-skeleton-alt icon icon2"></i>
                            </div>
                        </div>
                        <div class="ui form mt-30 checkbox_sign">
                            <div class="inline field">
                                <div class="ui checkbox mncheck">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                    <label>Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <button class="login-btn" type="submit">Sign In</button>
                    </form>
                    <p class="sgntrm145">Or <a href="forgot_password.html">Forgot Password</a>.</p>
                    <p class="mb-0 mt-30 hvsng145">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                </div>
                <div class="sign_footer"><img src="{{ asset('front') }}/images/sign_logo.png" alt="">© 2020 <strong>Cursus</strong>. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
<!-- Signup End -->

<script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('front') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front') }}/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="{{ asset('front') }}/vendor/semantic/semantic.min.js"></script>
<script src="{{ asset('front') }}/js/custom.js"></script>
<script src="{{ asset('front') }}/js/night-mode.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:56:11 GMT -->
</html>