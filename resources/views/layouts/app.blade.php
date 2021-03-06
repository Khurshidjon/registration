<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:49:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('front') }}/images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='{{ asset('front') }}/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="{{ asset('front') }}/css/vertical-responsive-menu.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/night-mode.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/jquery-steps.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('front') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    {{--    <script data-search-pseudo-elements defer src="https://use.fontawesome.com/releases/latest/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>--}}

    <link href="{{ asset('front') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('front') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/semantic/semantic.min.css">
    <!-- CSRF Token -->
</head>

<body>
<!-- Header Start -->
<header class="header clearfix">
    <button type="button" id="toggleMenu" class="toggle_menu">
        <i class='uil uil-bars'></i>
    </button>
    <button id="collapse_menu" class="collapse_menu">
        <i class="uil uil-bars collapse_menu--icon "></i>
        <span class="collapse_menu--label"></span>
    </button>
    <div class="main_logo" id="logo">
        <a href="{{ route('front.home') }}"><img src="{{ asset('front') }}/images/logo.svg" alt=""></a>
        <a href="{{ route('front.home') }}"><img class="logo-inverse" src="{{ asset('front') }}/images/ct_logo.svg" alt=""></a>
    </div>
    <div class="search120">
        <div class="ui search">
            <div class="ui left icon input swdh10">
                <input class="prompt srch10" type="text" placeholder="Videolar, darsliklar va testlar izlash...">
                <i class='uil uil-search-alt icon icon1'></i>
            </div>
        </div>
    </div>
    <div class="header_right">
        <ul>
            <li>
                <a href="{{ route('front.certification-center') }}" class="upload_btn">Sertifikat uchun test topshirish</a>
            </li>
            <li class="ui dropdown">
                <a href="#" class="option_links"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
                <div class="menu dropdown_ms">
                    <a href="#" class="channel_my item">
                        <div class="profile_link">
                            <img src="{{ asset('front') }}/images/left-imgs/img-6.jpg" alt="">
                            <div class="pd_content">
                                <h6>Zoena Singh</h6>
                                <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                                <span class="nm_time">2 min ago</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="channel_my item">
                        <div class="profile_link">
                            <img src="{{ asset('front') }}/images/left-imgs/img-5.jpg" alt="">
                            <div class="pd_content">
                                <h6>Joy Dua</h6>
                                <p>Hello, I paid you video tutorial but did not play error 404.</p>
                                <span class="nm_time">10 min ago</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="channel_my item">
                        <div class="profile_link">
                            <img src="{{ asset('front') }}/images/left-imgs/img-8.jpg" alt="">
                            <div class="pd_content">
                                <h6>Jass</h6>
                                <p>Thanks Sir, Such a nice video.</p>
                                <span class="nm_time">25 min ago</span>
                            </div>
                        </div>
                    </a>
                    <a class="vbm_btn" href="instructor_messages.html">View All <i class='uil uil-arrow-right'></i></a>
                </div>
            </li>
            <li class="ui dropdown">
                <a href="#" class="opts_account">
                    <img src="{{ asset('front') }}/images/left-imgs/img-7.jpg" alt="">
                </a>
                <div class="menu dropdown_account">
                    <div class="channel_my">
                        <div class="profile_link">
                            <img src="{{ asset('front') }}/images/left-imgs/img-7.jpg" alt="">
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
                        <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
                    </div>
                    <div class="night_mode_switch__btn">
                        <a href="#" id="night-mode" class="btn-night-mode">
                            <i class="uil uil-moon"></i> Tungi rejim
                            <span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>
                        </a>
                    </div>
                    <a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>
                    <a href="membership.html" class="item channel_item">Paid Memberships</a>
                    <a href="setting.html" class="item channel_item">Setting</a>
                    <a href="help.html" class="item channel_item">Help</a>
                    <a href="feedback.html" class="item channel_item">Send Feedback</a>
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
</header>
<!-- Header End -->
<!-- Left Sidebar Start -->
<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu" >
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="{{ route('front.home') }}" class="menu--link {{ $is_active=='home'?'active':'' }}" title="Home">
                        <i class='uil uil-home-alt menu--icon'></i>
                        <span class="menu--label">Bosh sahifa</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ route('front.live-streams') }}" class="menu--link {{ $is_active=='live-stream'?'active':'' }}" title="Jonli muloqotlar">
                        <i class='uil uil-kayak menu--icon'></i>
                        <span class="menu--label">Jonli muloqotlar</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="#" class="menu--link" title="Explore">
                        <i class='uil uil-search menu--icon'></i>
                        <span class="menu--label">Soha izlamoq</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ route('front.categories') }}" class="menu--link {{ $is_active=='categories'?'active':'' }}" title="Categories">
                        <i class='uil uil-layers menu--icon'></i>
                        <span class="menu--label">Kategoriyalar</span>
                    </a>
                </li>
                <li class="menu--item  menu--item__has_sub_menu">
                    <label class="menu--link" title="Tests">
                        <i class='uil uil-clipboard-alt menu--icon'></i>
                        <span class="menu--label">Testlar</span>
                    </label>
                    <ul class="sub_menu">
                        <li class="sub_menu--item">
                            <a href="{{ route('front.certification-center') }}" class="sub_menu--link">Sertifikat olish uchun</a>
                        </li>
                        <li class="sub_menu--item">
                            <a href="{{ route('front.certification-start-from') }}" class="sub_menu--link">Sertifikat to'ldirish sharti</a>
                        </li>
                        <li class="sub_menu--item">
                            <a href="{{ route('front.certification-view') }}" class="sub_menu--link">Sinov testi</a>
                        </li>
                        <li class="sub_menu--item">
                            <a href="{{ route('front.certification-result') }}" class="sub_menu--link">Test Natijalari</a>
                        </li>
                    </ul>
                </li>
                <li class="menu--item">
                    <a href="{{ route('front.saved-courses') }}" class="menu--link {{ $is_active=='saved-courses'?'active':'' }}" title="Saved Courses">
                        <i class="uil uil-heart-alt menu--icon"></i>
                        <span class="menu--label ">Tanlangan kurslar</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="left_section">
            <h6 class="left_title"></h6>
            <ul>
                <li class="menu--item">
                    <a href="{{ route('front.settings') }}" class="menu--link {{ $is_active=='settings'?'active':'' }}" title="Setting">
                        <i class='uil uil-cog menu--icon'></i>
                        <span class="menu--label">Sozlamalar</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ route('front.help') }}" class="menu--link {{ $is_active=='help'?'active':'' }}" title="Help">
                        <i class='uil uil-question-circle menu--icon'></i>
                        <span class="menu--label">Yordam</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="{{ route('front.feedback') }}" class="menu--link" title="Send Feedback">
                        <i class='uil uil-comment-alt-exclamation menu--icon'></i>
                        <span class="menu--label">Fikr-mulohaza yuborish</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="left_footer">
            <ul>
                <li><a href="about_us.html">About</a></li>
                <li><a href="press.html">Press</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="coming_soon.html">Advertise</a></li>
                <li><a href="coming_soon.html">Developers</a></li>
                <li><a href="terms_of_use.html">Copyright</a></li>
                <li><a href="terms_of_use.html">Privacy Policy</a></li>
                <li><a href="terms_of_use.html">Terms</a></li>
            </ul>
            <div class="left_footer_content">
                <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</nav>
<!-- Left Sidebar End -->
<!-- Body Start -->
<div class="wrapper">
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
                                        <a href="index.html">
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

<script src="{{ asset('front') }}/js/vertical-responsive-menu.min.js"></script>
<script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('front') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front') }}/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="{{ asset('front') }}/vendor/semantic/semantic.min.js"></script>
<script src="{{ asset('front') }}/js/custom.js"></script>
<script src="{{ asset('front') }}/js/night-mode.js"></script>

@stack('scripts')
</body>
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:50:50 GMT -->
</html>
