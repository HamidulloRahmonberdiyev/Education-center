<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? __('Bosh sahifa') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/contact_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/video-js/video-js.css" >
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/blog.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/blog_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/blog_single.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/blog__single_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/courses.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/courses_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/about.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/about_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/styles/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->
        <x-layouts.frontend.navbar></x-layouts.frontend.navbar>


        {{ $slot }}


        <x-layouts.frontend.widget></x-layouts.frontend.widget>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_background" style="background-image:url({{ asset('frontend') }}/images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Nusrat <span>Talim</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>{{ __('Ijtimoiy tarmoqdagi sahifalarimiz') }}</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-telegram"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">{{ __('Bog\'lanish') }}</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>{{ __('Email') }}: nusrtatalim@mail.uz</li>
                                                <li>{{ __('Telefon') }}: +998 91 852 22 77</li>
                                                <li>{{ __('Manzil') }}: Xatirchi tuman Yangirabod shahri</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">{{ __('Markaz') }}</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="/">{{ __('Bosh sahifa') }}</a></li>
                                                <li><a href="{{ route('about') }}">{{ __('Biz haqimizda') }}</a></li>
                                                <li><a href="{{ route('front.news') }}">{{ __('Yangiliklar') }}</a></li>
                                                <li><a href="{{ route('front.courses') }}">{{ __('Kurslar') }}</a></li>
                                                <li><a href="{{ route('front.languages') }}">{{ __('Tillar') }}</a></li>
                                                <li><a href="{{ route('contact') }}">{{ __('Aloqa') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">{{ __('Mobil') }}</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img
                                                        src="{{ asset('frontend') }}/images/mobile_1.png" alt=""></a></div>
                                            <div class="footer_image"><a href="#"><img
                                                        src="{{ asset('frontend') }}/images/mobile_2.png" alt=""></a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> {{ __('Sayt asoschisi') }} <a href="https://t.me/hamidullo_rahmonberdiyev"
                                    target="_blank">Hamidullo Rahmonberdiyev</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="ml-lg-auto cr_links">
                                <ul class="cr_list">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('frontend') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('frontend') }}/styles/bootstrap4/popper.js"></script>
    <script src="{{ asset('frontend') }}/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{ asset('frontend') }}/plugins/easing/easing.js"></script>
    <script src="{{ asset('frontend') }}/plugins/video-js/video.min.js"></script>
    <script src="{{ asset('frontend') }}/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="{{ asset('frontend') }}/js/custom.js"></script>
    
</body>

</html>
