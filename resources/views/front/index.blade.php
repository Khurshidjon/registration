@extends('layouts.app')
@section('content')
@section('title', 'Bosh sahifa')
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="section3125">
                        <h4 class="item_title">Jonli muloqotlar</h4>
                        <a href="live_streams.html" class="see150">Barchasini ko'rish</a>
                        <div class="la5lo1">
                            <div class="owl-carousel live_stream owl-theme">
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="{{ route('front.live-output') }}" class="stream_bg">
                                            <img src="{{ asset('front') }}/images/left-imgs/img-1.jpg" alt="">
                                            <h4>Sarvar Ahmedov</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="{{ route('front.live-output') }}" class="stream_bg">
                                            <img src="{{ asset('front') }}/images/left-imgs/img-5.jpg" alt="">
                                            <h4>Baxodir Ruzmatov</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="{{ route('front.live-output') }}" class="stream_bg">
                                            <img src="{{ asset('front') }}/images/left-imgs/img-8.jpg" alt="">
                                            <h4>Bekzod Eliboyev</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="{{ route('front.live-output') }}" class="stream_bg">
                                            <img src="{{ asset('front') }}/images/left-imgs/img-3.jpg" alt="">
                                            <h4>Sherzod Axmedov</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="{{ route('front.live-output') }}" class="stream_bg">
                                            <img src="{{ asset('front') }}/images/left-imgs/img-7.jpg" alt="">
                                            <h4>Xurshid Ergashev</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="stream_1">
                                        <a href="{{ route('front.live-output') }}" class="stream_bg">
                                            <img src="{{ asset('front') }}/images/left-imgs/img-9.jpg" alt="">
                                            <h4>Otabek Karimov</h4>
                                            <p>live<span></span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3125 mt-30">
                        <h4 class="item_title">Taniqli kurslar</h4>
                        <a href="#" class="see150">Barchasini ko'rish</a>
                        <div class="la5lo1">
                            <div class="owl-carousel featured_courses owl-theme">
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-5.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Office dasturlari | Word, Excel ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Sherzod Axmedov</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-2.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Tarmoq administratorligi | Kerio, Python, Linux ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Bekzod Eliboyev</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-3.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    27 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Konferensiyalar o'tkazish tartibi | Zoom, Webex ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Baxodir Ruzmatov</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-4.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    27 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Davlat Xaridlarini amalga oshirish | UzEx ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Sarvar Axmedov</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3125 mt-30">
                        <h4 class="item_title">Yangi kurslar</h4>
                        <a href="#" class="see150">Barchasini ko'rish</a>
                        <div class="la5lo1">
                            <div class="owl-carousel featured_courses owl-theme">
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-11.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    27 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Davlat Xaridlarini amalga oshirish | UzEx, Cooperation ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Sarvar Axmedov</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-13.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    27 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Konferensiyalar o'tkazish tartibi | Zoom, Webex ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Baxodir Ruzmatov</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-16.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Office dasturlari | Word, Excel ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Sherzod Axmedov</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="{{ route('front.show') }}" class="fcrse_img">
                                            <img src="{{ asset('front') }}/images/courses/img-19.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">IT sohasi</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 soat
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Ulashish</span>
                                                    <span><i class="uil uil-download-alt"></i>Yuklab olish</span>
                                                    <span><i class='uil uil-ban'></i>Qiziqarli emas</span>
                                                    <span><i class="uil uil-windsock"></i>Shikoyat</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k ko'rildi</span>
                                                <span class="vdt14">15 kun oldin joylandi</span>
                                            </div>
                                            <a href="{{ route('front.show') }}" class="crse14s">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Tarmoq administratorligi | Kerio, Python, Linux ...</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot"><a href="#">Bekzod Eliboyev</a> tomonidan</p>
                                                <div class="prce142"><i class="fas fa-certificate text-warning"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3126">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-history'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Go at your own pace</h4>
                                        <p>Enjoy lifetime access to courses on Edututs+'s website</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-user-check'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Learn from industry experts</h4>
                                        <p>Select from top instructors around the world</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-play-circle'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>Find video courses on almost any topic</h4>
                                        <p>Build your library for your career and personal growth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="value_props">
                                    <div class="value_icon">
                                        <i class='uil uil-presentation-play'></i>
                                    </div>
                                    <div class="value_content">
                                        <h4>100,000 online courses</h4>
                                        <p>Explore a variety of fresh topics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section3125 mt-50">
                        <h4 class="item_title">Popular Instructors</h4>
                        <a href="all_instructor.html" class="see150">See all</a>
                        <div class="la5lo1">
                            <div class="owl-carousel top_instrutors owl-theme">
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-1.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">John Doe</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Wordpress &amp; Plugin Tutor</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">100K Students</span>
                                                <span class="vdt15">15 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Kerstin Cable</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Language Learning Coach, Writer, Online Tutor</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">14K Students</span>
                                                <span class="vdt15">11 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-3.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Jose Portilla</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Head of Data Science, Pierian Data Inc.</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">1M Students</span>
                                                <span class="vdt15">25 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-4.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Farhat Amin</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Cookery Coach</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">1.5K Students</span>
                                                <span class="vdt15">9 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-5.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Kyle Pew</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Microsoft Certified Trainer - 380,000+ Udemy Students</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">300K Students</span>
                                                <span class="vdt15">18 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-7.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Jaysen Batchelor</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Illustrator &amp; Designer</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">491K Students</span>
                                                <span class="vdt15">13 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-8.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Quinton Batchelor</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Photographer & Instructor</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">364K Students</span>
                                                <span class="vdt15">6 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a href="instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-6.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="instructor_profile_view.html" class="tutor_name">Eli Natoli</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="tutor_cate">Entrepreneur - Passionate Teacher</div>
                                            <ul class="tutor_social_links">
                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                            <div class="tut1250">
                                                <span class="vdt15">615K Students</span>
                                                <span class="vdt15">12 Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="right_side">
                        <div class="fcrse_2 mb-30">
                            <div class="tutor_img">
                                <a href="my_instructor_profile_view.html"><img src="{{ asset('front') }}/images/left-imgs/img-7.jpg" alt=""></a>
                            </div>
                            <div class="tutor_content_dt">
                                <div class="tutor150">
                                    <a href="my_instructor_profile_view.html" class="tutor_name">Xurshid Ergashev</a>
                                    <div class="mef78" title="Verify">
                                        <i class="uil uil-check-circle"></i>
                                    </div>
                                </div>
                                <div class="tutor_cate">Web Developer, Designer</div>
                                <ul class="tutor_social_links">
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                <div class="tut1250">
                                    <span class="vdt15">615K Students</span>
                                    <span class="vdt15">12 Courses</span>
                                </div>
                                <a href="my_instructor_profile_view.html" class="prfle12link">Profilga o'tish</a>
                            </div>
                        </div>
                        <div class="fcrse_3">
                            <div class="cater_ttle">
                                <h4>Live Streaming</h4>
                            </div>
                            <div class="live_text">
                                <div class="live_icon"><i class="uil uil-kayak"></i></div>
                                <div class="live-content">
                                    <p>Set up your channel and stream live to your students</p>
                                    <button class="live_link" onclick="window.location.href = 'add_streaming.html';">Get Started</button>
                                    <span class="livinfo">Info : This feature only for 'Instructors'.</span>
                                </div>
                            </div>
                        </div>
                        <div class="get1452">
                            <h4>Get personalized recommendations</h4>
                            <p>Answer a few questions for your top picks</p>
                            <button class="Get_btn" onclick="window.location.href = '#';">Get Started</button>
                        </div>
                        <div class="fcrse_3">
                            <div class="cater_ttle">
                                <h4>Top Kategoriyalar</h4>
                            </div>
                            <ul class="allcate15">
                                <li><a href="#" class="ct_item"><i class='uil uil-arrow'></i>Development</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-graph-bar'></i>Biznes</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-monitor'></i>IT va Software</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-ruler'></i>Dizaynerlik</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-chart-line'></i>Marketing</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-book-open'></i>Personal Development</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-camera'></i>Photography</a></li>
                                <li><a href="#" class="ct_item"><i class='uil uil-music'></i>Music</a></li>
                            </ul>
                        </div>
                        <div class="strttech120">
                            <h4>Become an Instructor</h4>
                            <p>Top instructors from around the world teach millions of students on Cursus. We provide the tools and skills to teach what you love.</p>
                            <button class="Get_btn" onclick="window.location.href = '#';">Start Teaching</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="section3125 mt-30">
                        <h4 class="item_title">What Our Student Have Today</h4>
                        <div class="la5lo1">
                            <div class="owl-carousel Student_says owl-theme">
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Donec ac ex eu arcu euismod feugiat. In venenatis bibendum nisi, in placerat eros ultricies vitae. Praesent pellentesque blandit scelerisque. Suspendisse potenti."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('front') }}/images/left-imgs/img-4.jpg" alt="">
                                            </div>
                                            <h4>Jassica William</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Cras id enim lectus. Fusce at arcu tincidunt, iaculis libero quis, vulputate mauris. Morbi facilisis vitae ligula id aliquam. Nunc consectetur malesuada bibendum."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('front') }}/images/left-imgs/img-1.jpg" alt="">
                                            </div>
                                            <h4>Rock Smith</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos eros ac, sagittis orci."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('front') }}/images/left-imgs/img-7.jpg" alt="">
                                            </div>
                                            <h4>Luoci Marchant</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Nulla bibendum lectus pharetra, tempus eros ac, sagittis orci. Suspendisse posuere dolor neque, at finibus mauris lobortis in.  Pellentesque vitae laoreet tortor."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('front') }}/images/left-imgs/img-6.jpg" alt="">
                                            </div>
                                            <h4>Poonam Sharma</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Curabitur placerat justo ac mauris condimentum ultricies. In magna tellus, eleifend et volutpat id, sagittis vitae est.  Pellentesque vitae laoreet tortor."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="{{ asset('front') }}/images/left-imgs/img-3.jpg" alt="">
                                            </div>
                                            <h4>Davinder Singh</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
