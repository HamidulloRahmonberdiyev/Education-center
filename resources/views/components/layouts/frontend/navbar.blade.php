<header class="header">
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class="top_bar_contact_list">
                                <li>
                                    <div class="question">{{ __('Murojat uchun') }}:</div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>+998 91 852 22 77</div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <div>nusrattalim@mail.uz</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="/">
                                <div class="logo_text">Nusrat <span>Ta'lim</span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">{{ __('Bosh sahifa') }}</a></li>
                                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">{{ __('Biz haqimizda') }}</a></li>
                                <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="{{ route('front.news') }}">{{ __('Yangiliklar') }}</a></li>
                                <li class="{{ Request::is('courses') ? 'active' : '' }}"><a href="{{ route('front.courses') }}">{{ __('Kurslar') }}</a></li>
                                <li class="{{ Request::is('languages') ? 'active' : '' }}"><a href="{{ route('front.languages') }}">{{ __('Tillar') }}</a></li>
                                <li class="{{ Request::is('videos') ? 'active' : '' }}"><a href="{{ route('front.videos') }}">{{ __('Videolar') }}</a></li>
                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">{{ __('Aloqa') }}</a></li>
                            </ul>
                            <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                            <!-- Hamburger -->

                            <div class="shopping_cart"><button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (app()->getLocale() == 'uz')
                                <img src="{{ asset('frontend') }}/flags/4x3/uz.svg" alt="" class="flag-lang">
                                @elseif( app()->getLocale() == 'en' )
                                <img src="{{ asset('frontend') }}/flags/4x3/us.svg" alt="" class="flag-lang">
                                @elseif( app()->getLocale() == 'ru' )
                                <img src="{{ asset('frontend') }}/flags/4x3/ru.svg" alt="" class="flag-lang">
                                @endif
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($all_locales as $locale)
                                @if ($locale == 'uz')
                                <a class="dropdown-item" href="{{ route('locale.change', ['locale' => 'uz']) }}"><img src="{{ asset('frontend') }}/flags/4x3/uz.svg" alt="" class="flag-lang"> Uz</a>
                                @elseif( $locale == 'en' )
                                <a class="dropdown-item" href="{{ route('locale.change', ['locale' => 'en']) }}"><img src="{{ asset('frontend') }}/flags/4x3/us.svg" alt="" class="flag-lang"> En</a>
                                @elseif( $locale == 'ru' )
                                <a class="dropdown-item" href="{{ route('locale.change', ['locale' => 'ru']) }}"><img src="{{ asset('frontend') }}/flags/4x3/ru.svg" alt="" class="flag-lang"> Ru</a>
                                @endif
                                @endforeach
                              </div>
                            </div>
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="{{ route('search') }}" method="GET" class="header_search_form">
                            @csrf
                            <input type="search" name="search" class="search_input" placeholder="{{ __('Qidiruv') }}" required="required">
                            <button
                                class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container">
        <div class="menu_close">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="search">
        <form action="{{ route('search') }}" method="GET" class="header_search_form menu_mm">
            <input type="search" name="search" class="search_input menu_mm" placeholder="{{ __('Qidiruv') }}" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"><a href="/">{{ __('Bosh sahifa') }}</a></li>
            <li class="menu_mm"><a href="{{ route('about') }}">{{ __('Biz haqimizda') }}</a></li>
            <li class="menu_mm"><a href="{{ route('front.news') }}">{{ __('Yangiliklar') }}</a></li>
            <li class="menu_mm"><a href="{{ route('front.courses') }}">{{ __('Kurslar') }}</a></li>
            <li class="menu_mm"><a href="{{ route('front.languages') }}">{{ __('Tillar') }}</a></li>
            <li class="menu_mm"><a href="{{ route('front.videos') }}">{{ __('Videolar') }}</a></li>
            <li class="menu_mm"><a href="{{ route('contact') }}">{{ __('Aloqa') }}</a></li>
        </ul>
    </nav>
</div>
