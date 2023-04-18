<x-layouts.frontend.main>
    <x-slot:title>
        {{ __('Videolar') }}
    </x-slot:title>

    <x-layouts.frontend.page-header>
        {{ __('Videolar') }}
    </x-layouts.frontend.page-header>

    <div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">

                <!-- Courses Main Content -->
                <div class="col-lg-14">
                    <div class="courses_search_container">
                        <form action="{{ route('front.courses') }}" id="courses_search_form"
                            class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                            <input type="search" class="courses_search_input" placeholder="{{ __('Kurs nomi') }}"
                                required="required">
                            <button action="submit" class="courses_search_button ml-auto">{{ __('Qidiruv') }}</button>
                        </form>
                    </div>
                <div class="courses_container">
                    <div class="row courses_row">

                            @foreach ($videos as $video)
                                <div class="col-lg-4 course_col trans_200" style="border-radius:6px">
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
                            </div>
                            @endforeach
                       
                        <div class="row pagination_row">
                            <div class="col">
                                <div
                                    class="pagination_container d-flex flex-row align-items-center justify-content-start">
                                    {{ $videos->links() }}
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

</x-layouts.frontend.main>
