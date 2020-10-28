<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/certification_center.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:56:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>@yield('title')</title>

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
<!-- Header Start -->
<header class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="back_link">
                    <a href="{{ route('front.home') }}" class="hde151">Bosh sahifaga qaytish</a>
                    <a href="{{ route('front.home') }}" class="hde152">Back</a>
                </div>
                <div class="ml_item">
                    <div class="main_logo main_logo15" id="logo">
                        <a href="{{ route('front.home') }}"><img src="{{ asset('front') }}/images/logo.svg" alt=""></a>
                        <a href="{{ route('front.home') }}"><img class="logo-inverse" src="{{ asset('front') }}/images/ct_logo.svg" alt=""></a>
                    </div>
                </div>
                <div class="header_right pr-0">
                    <ul>
                        <li class="ui top right pointing dropdown">
                            <a href="#" class="opts_account">
                                <img src="{{ asset('front') }}/images/hd_dp.jpg" alt="">
                            </a>
                            <div class="menu dropdown_account">
                                <div class="channel_my">
                                    <div class="profile_link">
                                        <img src="{{ asset('front') }}/images/hd_dp.jpg" alt="">
                                        <div class="pd_content">
                                            <div class="rhte85">
                                                <h6>Xurshid Ergashev</h6>
                                                <div class="mef78" title="Verify">
                                                    <i class='uil uil-check-circle'></i>
                                                </div>
                                            </div>
                                            <span>xurshidjon1607@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="night_mode_switch__btn">
                                    <a href="#" id="night-mode" class="btn-night-mode">
                                        <i class="uil uil-moon"></i> Night mode
                                        <span class="btn-night-mode-switch">
												<span class="uk-switch-button"></span>
											</span>
                                    </a>
                                </div>
                                <a href="{{ route('logout') }}" class="item channel_item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Body Start -->
<div class="wrapper _bg4586 _new89">
    @yield('content')
<footer class="footer mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f1">
                    <a href="about_us.html">About</a>
                    <a href="our_blog.html">Blog</a>
                    <a href="career.html">Careers</a>
                    <a href="press.html">Press</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f1">
                    <a href="help.html">Help</a>
                    <a href="coming_soon.html">Advertise</a>
                    <a href="coming_soon.html">Developers</a>
                    <a href="contact_us.html">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f1">
                    <a href="terms_of_use.html">Copyright Policy</a>
                    <a href="terms_of_use.html">Terms</a>
                    <a href="terms_of_use.html">Privacy Policy</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="item_f3">
                    <a href="#" class="btn1542">Teach on Cursus</a>
                    <div class="lng_btn">
                        <div class="ui language bottom right pointing dropdown floating" id="languages" data-content="Select Language">
                            <a href="#"><i class='uil uil-globe lft'></i>Language<i class='uil uil-angle-down rgt'></i></a>
                            <div class="menu">
                                <div class="scrolling menu">
                                    <div class="item" data-percent="100" data-value="en" data-english="English">
                                        <span class="description">English</span>
                                        English
                                    </div>
                                    <div class="item" data-percent="94" data-value="da" data-english="Danish">
                                        <span class="description">dansk</span>
                                        Danish
                                    </div>
                                    <div class="item" data-percent="94" data-value="es" data-english="Spanish">
                                        <span class="description">Español</span>
                                        Spanish
                                    </div>
                                    <div class="item" data-percent="34" data-value="zh" data-english="Chinese">
                                        <span class="description">简体中文</span>
                                        Chinese
                                    </div>
                                    <div class="item" data-percent="54" data-value="zh_TW" data-english="Chinese (Taiwan)">
                                        <span class="description">中文 (臺灣)</span>
                                        Chinese (Taiwan)
                                    </div>
                                    <div class="item" data-percent="79" data-value="fa" data-english="Persian">
                                        <span class="description">پارسی</span>
                                        Persian
                                    </div>
                                    <div class="item" data-percent="41" data-value="fr" data-english="French">
                                        <span class="description">Français</span>
                                        French
                                    </div>
                                    <div class="item" data-percent="37" data-value="el" data-english="Greek">
                                        <span class="description">ελληνικά</span>
                                        Greek
                                    </div>
                                    <div class="item" data-percent="37" data-value="ru" data-english="Russian">
                                        <span class="description">Русский</span>
                                        Russian
                                    </div>
                                    <div class="item" data-percent="36" data-value="de" data-english="German">
                                        <span class="description">Deutsch</span>
                                        German
                                    </div>
                                    <div class="item" data-percent="23" data-value="it" data-english="Italian">
                                        <span class="description">Italiano</span>
                                        Italian
                                    </div>
                                    <div class="item" data-percent="21" data-value="nl" data-english="Dutch">
                                        <span class="description">Nederlands</span>
                                        Dutch
                                    </div>
                                    <div class="item" data-percent="19" data-value="pt_BR" data-english="Portuguese">
                                        <span class="description">Português(BR)</span>
                                        Portuguese
                                    </div>
                                    <div class="item" data-percent="17" data-value="id" data-english="Indonesian">
                                        <span class="description">Indonesian</span>
                                        Indonesian
                                    </div>
                                    <div class="item" data-percent="12" data-value="lt" data-english="Lithuanian">
                                        <span class="description">Lietuvių</span>
                                        Lithuanian
                                    </div>
                                    <div class="item" data-percent="11" data-value="tr" data-english="Turkish">
                                        <span class="description">Türkçe</span>
                                        Turkish
                                    </div>
                                    <div class="item" data-percent="10" data-value="kr" data-english="Korean">
                                        <span class="description">한국어</span>
                                        Korean
                                    </div>
                                    <div class="item" data-percent="7" data-value="ar" data-english="Arabic">
                                        <span class="description">العربية</span>
                                        Arabic
                                    </div>
                                    <div class="item" data-percent="6" data-value="hu" data-english="Hungarian">
                                        <span class="description">Magyar</span>
                                        Hungarian
                                    </div>
                                    <div class="item" data-percent="6" data-value="vi" data-english="Vietnamese">
                                        <span class="description">tiếng Việt</span>
                                        Vietnamese
                                    </div>
                                    <div class="item" data-percent="5" data-value="sv" data-english="Swedish">
                                        <span class="description">svenska</span>
                                        Swedish
                                    </div>
                                    <div class="item" data-precent="4" data-value="pl" data-english="Polish">
                                        <span class="description">polski</span>
                                        Polish
                                    </div>
                                    <div class="item" data-percent="6" data-value="ja" data-english="Japanese">
                                        <span class="description">日本語</span>
                                        Japanese
                                    </div>
                                    <div class="item" data-percent="0" data-value="ro" data-english="Romanian">
                                        <span class="description">românește</span>
                                        Romanian
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="footer_bottm">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fotb_left">
                                <li>
                                    <a href="{{ route('front.home') }}">
                                        <div class="footer_logo">
                                            <img src="{{ asset('front') }}/images/logo1.svg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="edu_social_links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Body End -->
<script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('front') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front') }}/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="{{ asset('front') }}/vendor/semantic/semantic.min.js"></script>
<script src="{{ asset('front') }}/js/custom.js"></script>
<script src="{{ asset('front') }}/js/night-mode.js"></script>

</body>
