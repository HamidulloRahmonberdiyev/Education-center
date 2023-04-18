<x-layouts.frontend.main>
    <x-slot:title>
        {{ __('Biz haqimizda') }} / {{ __('Postlar') }}
    </x-slot:title>


    <x-layouts.frontend.page-header>
        {{ __('Biz haqimizda') }} / {{ __('Postlar') }}
    </x-layouts.frontend.page-header>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">{{ __('Nima uchun Nusrat ta\'lim?') }}</h2>
                        <div class="section_subtitle">
                            <p>{{ __('Biz haqimizda  ba\'tafsil ma\'lumotlar') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row about_row">

                @foreach ($posts as $post)
                    <div class="col-lg-4 about_col about_col_left mb-5">
                        <a href="{{ route('about.show', ['post' => $post->id]) }}">
                            <div class="about_item">
                                <div class="about_item_image"><img src="{{ asset('storage/' . $post->photo) }}" alt=""></div>
                                <div class="about_item_title"><a
                                        href="{{ route('about.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                                </div>
                                <div class="about_item_text">
                                    <p>{{ $post->short_content }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            {{ $posts->links() }}
        </div>
    </div>


</x-layouts.frontend.main>
