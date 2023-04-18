<x-layouts.frontend.main>
    <x-slot:title>
        {{ __('Yangiliklar') }}
    </x-slot:title>

    <x-layouts.frontend.page-header>
        {{ __('Yangiliklar') }}
    </x-layouts.frontend.page-header>

    <div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-8">
                <div class="courses_search_container">
                    <form action="{{ route('search') }}" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                        <input type="search" name="search" class="courses_search_input" placeholder="{{ __('Kurs nomi') }}" required="required">
                        <button action="submit" class="courses_search_button ml-auto">{{ __('Qidiruv') }}</button>
                    </form>
                </div>
                <div class="courses_container">
                    <div class="row courses_row">
                        
                        @foreach ($news as $new)
                        <div class="col-lg-6 course_col">
                            <a href="{{ route('front.news.show', ['new' => $new->id]) }}">
                            <div class="course">
                                <div class="course_image"><img src="{{ asset('storage/' . $new->photo) }}" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="{{ route('front.news.show', ['new' => $new->id]) }}">{{ $new->title }}</a></h3>
                                    <div class="course_teacher"><i class="fa fa-calendar"></i> {!! $new_date = date('d-m-Y', strtotime($new->created_at)) !!}</div>
                                    <div class="course_text">
                                        <p>{{ $new->short_content }}</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_price ml-auto">
                                            <a href="{{ route('front.news.show', ['new' => $new->id]) }}" type="submit">{{ __('Davomi...') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    <div class="row pagination_row">
                        <div class="col">
                            <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                                {{ $news->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Categories -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">{{ __('Kategoriyalar') }}</div>
                        <div class="sidebar_categories">
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('front.categories.category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Latest Course -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">{{ __('Kurslar') }}</div>
                        <div class="sidebar_latest">

                            @foreach ($recent_courses as $course)
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="{{ asset('storage/' . $course->photo) }}" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="{{ route('front.courses.show', ['course' => $course->id]) }}">{{ $course->title }}</a></div>
                                    <div class="latest_price"><a href="{{ route('front.courses.show', ['course' => $course->id]) }}">Ko'rish</a></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Instagram</div>
                        <div class="sidebar_gallery">
                            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                @foreach ($posts as $post)
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="{{ asset('storage/' . $post->photo) }}">
                                        <img src="{{ asset('storage/' . $post->photo) }}" alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">{{ __('Teglar') }}</div>
                        <div class="sidebar_tags">
                            <ul class="tags_list">
                                @foreach ($tags as $tag)
                                <li><a href="{{ route('front.news') }}">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="sidebar_section">
                        <div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="sidebar_banner_background" style="background-image:url({{ asset('frontend') }}/images/banner_1.jpg)"></div>
                            <div class="sidebar_banner_overlay"></div>
                            <div class="sidebar_banner_content">
                                <div class="banner_title">{{ __('Elektron kitoblar') }}</div>
                                <div class="banner_button"><a href="/">{{ __('Yuklash') }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts.frontend.main>