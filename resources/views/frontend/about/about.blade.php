<x-layouts.frontend.main>
    <x-slot:title>
        {{ __('Biz haqimizda') }}
    </x-slot:title>
    <!-- Home -->

    <x-layouts.frontend.page-header>
        {{ __('Biz haqimizda') }}
    </x-layouts.frontend.page-header>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Nima uchun Nusrat ta\'lim?') }}</h2>
                        <div class="section_subtitle">
                            <p>{{ __('Bizni haqimizda  ba\'tafsil ma\'lumotlar') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row about_row">

                @foreach ($posts as $post)
                    <div class="col-lg-4 about_col about_col_left">
                        <a href="{{ route('about.show', ['post' => $post->id]) }}">
                            <div class="about_item">
                                <div class="about_item_image"><img src="{{ asset('storage/' . $post->photo) }}" alt=""></div>
                                <div class="about_item_title"><a href="{{ route('about.show', ['post' => $post->id]) }}">{{ $post->title }}</a></div>
                                <div class="about_item_text">
                                    <p>{{ $post->short_content }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col">
                <div class="courses_button trans_200"><a href="{{ route('viewAll') }}">{{ __('Hammasini ko\'rish') }}</a></div>
            </div>
        </div>
   


    <!-- Feature -->

    <div class="feature">
        <div class="feature_background" style="background-image:url({{ asset('frontend') }}/images/team-background.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Videolar') }}</h2>
                        <div class="section_subtitle">
                            <p>{{ __('Bizni ijtimoiy tarmoqlarda kuzatib boring') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row feature_row">

                <!-- Feature Content -->
                <div class="col-lg-7 feature_col">
                    <div class="feature_content">
                        <!-- Accordions -->
                        <div class="accordions">

                            <div class="elements_accordions">

                                <div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center">
                                        <div class="footer_social mt-1">
                                            <ul>
                                                <li><a href="/"><i class="fa fa-facebook"aria-hidden="true"></i></a></li> <i></i>  Facebook
                                            </ul>   
                                        </div>
                                    </div>
                                    <div class="accordion_panel">
                                    </div>
                                </div><br>

                                <div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center">
                                        <div class="footer_social mt-1">
                                            <ul>
                                                <li><a href="/"><i class="fa fa-instagram"aria-hidden="true"></i></a></li> <i></i>  Instagram
                                            </ul>   
                                        </div>
                                    </div>
                                    <div class="accordion_panel">
                                    </div>
                                </div><br>

                                <div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center">
                                        <div class="footer_social mt-1">
                                            <ul>
                                                <li><a href="/"><i class="fa fa-telegram"aria-hidden="true"></i></a></li> <i></i>  Telegram
                                            </ul>   
                                        </div>
                                    </div>
                                    <div class="accordion_panel">
                                    </div>
                                </div><br>

                                <div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center">
                                        <div class="footer_social mt-1">
                                            <ul>
                                                <li><a href="/"><i class="fa fa-youtube"aria-hidden="true"></i></a></li> <i></i>  Youtube
                                            </ul>   
                                        </div>
                                    </div>
                                    <div class="accordion_panel">
                                    </div>
                                </div><br>



                            </div>

                        </div>
                        <!-- Accordions End -->
                    </div>
                </div>
               

                <!-- Feature Video -->
                @foreach ($videos as $video)
                <div class="col-lg-5 feature_col">
                    <div class="blog_post_video_container">
                        <video class="blog_post_video video-js"
                            data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": ""}' style="border-radius:6px">
                            <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                            <source src="{{ asset('storage/' . $video->video) }}" type="video/ogg">
                            {{ $video->title }}
                        </video>
                    </div>
                    <div class="course">
                        <div class="course_body">
                            <h3 class="course_title"><a href="{{ route('front.videos') }}">{{ $video->title }}</a></h3>
                            <div class="course_text">
                                <p>{{ $video->content }}</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_price ml-auto"><a href="{{ route('front.videos.download', $video->id)}}" type="submit" class="btn btn-light px-5" style="background:rgb(236, 236, 236);"><i class="fa fa-download text-info" style="font-size:20px"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                @endforeach
                    <div class="courses_button mb-5 trans_200"><a href="{{ route('front.videos') }}">{{ __('Hammasini ko\'rish') }}</a></div>
                </div>
            </div>
        </div>

    <!-- Team -->

    <div class="team">
        <div class="team_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('frontend') }}/images/team_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Xodimlar')}}</h2>
                        <div class="section_subtitle mb-5">
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
    </div>
</div>
   

</x-layouts.frontend.main>