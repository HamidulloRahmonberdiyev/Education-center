<div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend') }}/images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">{{ __('Murojat va takliflar uchun ro\'yxatdan o\'ting') }}</div>
                        <div class="newsletter_subtitle">{{ __('So\'nggi yangiliklarga va biz taklif qilayotgan ajoyib kurlarga qo\'shiling') }}</div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="/" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="{{ __('Email') }}" required="required">
                            <button type="submit" class="newsletter_button">{{ __('Obuna bo\'ling') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>