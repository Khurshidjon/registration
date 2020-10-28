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
    <link rel="icon" type="image/png" href="{{ asset('front') }}/{{ asset('front') }}/images/fav.png">

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
                    <h2>Welcome to Edututs+</h2>
                    <p>Sign Up and Start Learning!</p>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="ui search focus">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="text" name="name" value="" id="id_fullname" required="" maxlength="64" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="email" name="email" value="" id="id_email" required="" maxlength="64" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
                            </div>
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="password" name="password_confirmation" value="" id="id_password" required="" maxlength="64" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="ui form mt-30 checkbox_sign">
                            <div class="inline field">
                                <div class="ui checkbox mncheck">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                    <label>I’m in for emails with exciting discounts and personalized recommendations</label>
                                </div>
                            </div>
                        </div>
                        <button class="login-btn" type="submit">Next</button>
                    </form>
                    <p class="sgntrm145">By signing up, you agree to our <a href="terms_of_use.html">Terms of Use</a> and <a href="terms_of_use.html">Privacy Policy</a>.</p>
                    <p class="mb-0 mt-30">Already have an account? <a href="{{ route('login') }}">Log In</a></p>
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
