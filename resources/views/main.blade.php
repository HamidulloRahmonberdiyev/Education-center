<x-layouts.frontend.main>

    <x-slot:title>
       {{ __('Bosh sahifa') }}
    </x-slot:title>

    <div class="home-main">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('frontend') }}/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">{{ __('Nusrat ta\'lim o\'quv markazi') }}</div>
                                    <div class="home_slider_subtitle">{{ __('Ilm va tajriba ulashamiz') }}</div>
                                    <div class="home_slider_form_container">
                                        <form action="{{ route('search') }}" method="GET" id="home_search_form_1"
                                            class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" name="search" class="home_search_input"
                                                    placeholder="{{ __('Qidiruv') }}" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option value="">{{ __('Tilni tanlang') }}</option>
                                                    @foreach ($categories as $category)
                                                        <option>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option value="">{{ __('Kursni tanlang') }}</option>
                                                    @foreach ($courses as $course)
                                                        <option>{{ $course->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit"
                                                class="home_search_button">{{ __('Qidiruv') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('frontend') }}/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">{{ __('Nusrat ta\'lim o\'quv markazi') }}</div>
                                    <div class="home_slider_subtitle">{{ __('Ilm va tajriba ulashamiz') }}</div>
                                    <div class="home_slider_form_container">
                                        <form action="{{ route('search') }}" method="GET" id="home_search_form_1"
                                            class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" name="search" class="home_search_input"
                                                    placeholder="{{ __('Qidiruv') }}" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option value="">{{ __('Tilni tanlang') }}</option>
                                                    @foreach ($categories as $category)
                                                        <option>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option value="">{{ __('Kursni tanlang') }}</option>
                                                    @foreach ($courses as $course)
                                                        <option>{{ $course->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit"
                                                class="home_search_button">{{ __('Qidiruv') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url({{ asset('frontend') }}/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">{{ __('Nusrat ta\'lim o\'quv markazi') }}</div>
                                    <div class="home_slider_subtitle">{{ __('Ilm va tajriba ulashamiz') }}</div>
                                    <div class="home_slider_form_container">
                                        <form action="{{ route('search') }}" method="GET" id="home_search_form_1"
                                            class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" name="search" class="home_search_input"
                                                    placeholder="{{ __('Qidiruv') }}" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option value="">{{ __('Tilni tanlang') }}</option>
                                                    @foreach ($categories as $category)
                                                        <option>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option value="">{{ __('Kursni tanlang') }}</option>
                                                    @foreach ($courses as $course)
                                                        <option>{{ $course->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit"
                                                class="home_search_button">{{ __('Qidiruv') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Veb saytimizga hush kelibsiz') }}</h2>
                        <div class="section_subtitle">
                            <h5>{{ __('Ta\'lim beruvchi onlayn portal') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row features_row">

                <!-- Features Item -->
                <div class="col-lg-3 feature_col">
                    <a href="{{ route('front.courses') }}">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon mb-5"><img src="{{ asset('frontend') }}/images/course.png" alt="" class="mb-5"></div><br><br>
                        <h3 class="feature_title">{{ __('Kurslar') }}</h3>
                        <div class="feature_text">
                        </div>
                    </div>
                    </a>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3 feature_col">
                    <a href="/">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon mb-5"><img src="{{ asset('frontend') }}/images/book.png" alt="" class="mb-5"></div><br><br>
                        <h3 class="feature_title">{{ __('Kitoblar') }}</h3>
                        <div class="feature_text">
                        </div>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3 feature_col">
                    <a href="{{ route('front.languages') }}">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon mb-5"><img src="{{ asset('frontend') }}/images/language.png" alt="" class="mb-5"></div><br><br>
                        <h3 class="feature_title">{{ __('Tillar') }}</h3>
                        <div class="feature_text">
                        </div>
                    </div>
                    </a>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3 feature_col">
                    <a href="{{ route('contact') }}">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon mb-5"><img src="{{ asset('frontend') }}/images/location.png" alt="" class="mb-5"></div><br><br>
                        <h3 class="feature_title">{{ __('Manzil') }}</h3>
                        <div class="feature_text">
                        </div>
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Popular Courses -->

    <div class="courses">
        <div class="section_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('frontend') }}/images/team-background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Kurslar') }}</h2>
                        <div class="section_subtitle">
                            <h5>{{ __('Nusrat ta\'lim markazdagi yangi ochilgan kurslar bilan tanishing') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row courses_row">

                @foreach ($recent_courses as $course)
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <a href="{{ route('front.courses.show', ['course' => $course->id]) }}">
                            <div class="course_image"><img src="{{ asset('storage/' . $course->photo) }}" alt=""></div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="{{ route('front.courses.show', ['course' => $course->id]) }}">{{ $course->title }}</a></h3>
                                <div class="course_teacher"><i class="fa fa-calendar"></i> {!! $new_date = date('d-m-Y', strtotime($course->created_at)) !!}</div>
                                <div class="course_text">
                                    <p>{{ $course->short_content }}</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_price ml-auto"><a
                                            href="{{ route('front.courses.show', ['course' => $course->id]) }}">{{ __('Davomi...') }}</a>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col">
                    <div class="courses_button trans_200"><a href="{{ route('front.courses') }}">{{ __('Hammasini ko\'rish') }}</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter -->

    <div class="counter">
        <div class="counter_background" style="background-image:url({{ asset('frontend') }}/images/banner-background.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="counter_content">
                        <h2 class="counter_title">{{ __('Biz haqimizda muhim faktlar')}}</h2>
                        <div class="counter_text">
                            <br><br>
                        </div>

                        <!-- Milestones -->

                        <div
                            class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="10" data-sign-after="+">0</div>
                                <div class="milestone_text">{{ __('Ustozlar') }}</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="180" data-sign-after="+">0</div>
                                <div class="milestone_text">{{ __('O\'quvchilar') }}</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="5" data-sign-after="+">0</div>
                                <div class="milestone_text">{{ __('Tillar') }}</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="15" data-sign-after="+">0</div>
                                <div class="milestone_text">{{ __('Kurslar') }}</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="counter_form">
                <div class="row fill_height">
                    <div class="col fill_height">
                        <form action="{{ route('front.joincourses.store') }}" method="POST" class="counter_form_content d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            <div class="counter_form_title">{{ __('Kursga yozilish') }}</div>

                            <input name="name" type="text" value="{{ old('name') }}" class="counter_input" placeholder="{{ __('Ism') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <input name="phone" type="number" value="{{ old('phone') }}" class="counter_input" placeholder="{{ __('+998 ...') }}">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <select name="category_id" class="counter_input counter_options">
                                <option value="">{{ __('Kursni tanlang') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <textarea name="message" class="counter_input counter_text_input" placeholder="{{ __('Habar matni') }}">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            
                            <button type="submit" class="counter_form_button">{{ __('Yuborish') }}</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Events -->

    <div class="events">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Tillar') }}</h2>
                        <div class="section_subtitle">
                            <h5>{{ __('Tillarni onson va tez fursatda o\'rganing') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row events_row">

                @foreach ($recent_languages as $language)
                <div class="col-lg-4 event_col">
                    <a href="{{ route('front.languages.show', ['language' => $language->id]) }}">
                    <div class="event event_left">
                        <div class="event_image"><img src="{{ asset('storage/' . $language->photo) }}" alt=""></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200">{!! $new_date = date('m', strtotime($course->created_at)) !!}</div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="{{ route('front.languages.show', ['language' => $language->id]) }}">{{ $language->title }}</a>
                                </div>
                                <div class="event_info_container">
                                    <div class="course_teacher"><i class="fa fa-calendar"
                                            aria-hidden="true"></i> <span>{!! $new_date = date('d-m-Y', strtotime($course->created_at)) !!}</span></div>
                                    <a href="{{ route('front.languages.show', ['language' => $language->id]) }}">
                                    <div class="event_text">
                                        <p>{{ $language->short_content }}</p>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>


   
    <div class="team">
        <div class="team_background parallax-window" data-parallax="scroll"
            data-image-src="images/team_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Xodimlar')}}</h2>
                        <div class="section_subtitle  mb-5">
                            <h5>{{ __('Markazning faxriy xodimlari') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
           
            
            <div class="row">
                <div class="owl-carousel owl-theme partners_slider">

                @foreach ($teachers as $teacher)
                <div class="col-lg-12 col-md-12 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="{{ asset('storage/' . $teacher->photo) }}" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="/">{{ $teacher->name }}</a></div>
                            <div class="team_subtitle mb-3"><h5><em>{{ $teacher->title }}</em></h5>
                            </div>
                            <p class="team_content">{{ $teacher->content }}</p>
                            <div class="social_list">
                                <ul>
                                    <li><a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="/"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
    

   
</x-layouts.frontend.main>
