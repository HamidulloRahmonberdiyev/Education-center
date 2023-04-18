<x-layouts.frontend.main>
    <x-slot:title>
        {{ $language->name ??  __('Tillar')  }}
    </x-slot:title>

    <!-- Home -->

    <x-layouts.frontend.page-header>
        {{ $language->name ??  __('Tillar')  }}
    </x-layouts.frontend.page-header>

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog_content">
                    <div class="blog_title">{{ $language->title }}</div>
                    <div class="blog_meta">
                        <ul>
                            <li>{{ __('Sana')  }} <a href="/"><i class="fa fa-calendar"></i> {!! $new_date = date('d-m-Y', strtotime($language->created_at)) !!}</a></li>
                            <li><a href="/">Admin</a></li>
                        </ul>
                    </div>
                    <div class="blog_image"><img src="{{ asset('storage/' . $language->photo) }}" alt=""></div>
                    <p>{{ $language->content }}</p>                    
                </div>
                <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                    <div class="blog_tags">
                        <span>{{ __('Kategoriya')  }}: </span>
                        <ul>
                            <li><a href="{{ route('front.categories.category', ['category' => $language->category->id]) }}">{{ $language->category->name}}</a></li>
                        </ul>
                    </div>
                    <div class="blog_tags">
                       
                    </div>
                    <div class="blog_social ml-lg-auto">
                        <span>{{ __('Ulashish')  }}: </span>
                        <ul>
                            <li><a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="/"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="comments_container">
                    <div class="add_comment_container">
                        <div class="add_comment_title">{{ __('Izoh qoldirish') }}</div>
                        <div class="add_comment_text"></div>
                        <form action="{{ route('front.comments.store') }}" method="POST" class="comment_form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 input_col">
                                    <div class="form_title">{{ __('Ism') }}</div>
                                    <input type="text" name="name" class="comment_input" required="required">
                                </div>
                            </div>
                            <div>
                                <div class="form_title">{{ __('Habar matni') }}</div>
                                <textarea name="message" class="comment_input comment_textarea" required="required"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="comment_button trans_200">{{ __('Yuborish') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Categories -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">{{ __('Kategoriyalar')  }}</div>
                        <div class="sidebar_categories">
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('front.categories.category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Latest News -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">{{ __('Kurslar')  }}</div>
                        <div class="sidebar_latest">
                            @foreach ($recent_courses as $course)
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="{{ asset('storage/' . $course->photo) }}" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="{{ route('front.courses.show', ['course' => $course->id]) }}">{{ $course->title }}</a></div>
                                    <div class="latest_price"><a href="{{ route('front.courses.show', ['course' => $course->id]) }}">{{ __('Ko\'rish')  }}</a></div>
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
                                @foreach ($news as $new)
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="{{ asset('storage/' . $new->photo) }}">
                                        <img src="{{ asset('storage/' . $new->photo) }}" alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">{{ __('Teglar')  }}</div>
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
                                <div class="banner_title">{{ __('Elektron kitoblar')  }}</div>
                                <div class="banner_button"><a href="/">{{ __('Yuklash')  }}</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts.frontend.main>