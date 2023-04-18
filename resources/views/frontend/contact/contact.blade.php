<x-layouts.frontend.main>
    <x-slot:title>
		{{ __('Aloqa') }}
    </x-slot:title>

    <x-layouts.frontend.page-header>
        {{ __('Aloqa') }}
    </x-layouts.frontend.page-header>

    <!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map" style="margin-left:10%"><br><br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24438.733199373848!2d65.9487174536891!3d40.03431473231224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f5206b880e408d3%3A0x7c938fbafc9cee36!2sYangirabod%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1676393343834!5m2!1sen!2s" width="80%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">{{ __('Habar yuborish') }}</div>
							<form action="{{ route('front.comments.store') }}" method="POST" class="comment_form" enctype="multipart/form-data">
								@csrf
								<div>
									<div class="form_title">{{ __('Ism') }}</div>
									<input type="text" name="name" class="comment_input" value="{{ old('name') }}" required="required">
								</div>
								<div>
									<div class="form_title">{{ __('Habar matni') }}</div>
									<textarea name="message" class="comment_input comment_textarea" required="required">{{ old('message') }}</textarea>
								</div>
								<div>
									<button type="submit" class="comment_button trans_200">{{ __('Yuborish') }}</button>
								</div>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">{{ __('Ma\'lumot') }}</div>
							<div class="contact_info_text">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a distribution of letters.</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Xatirchi filiali</div>
								<ul class="location_list">
									<li>Xatirchi tuman, Yangirabot shahri</li>
									<li>+998 91 852 22 77</li>
									<li>nusrattalim@mail.uz</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Navoiy filiali</div>
								<ul class="location_list">
									<li>Navoiy shahri</li>
									<li>1-234-567-89011</li>
									<li>info.deercreative@gmail.com</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</x-layouts.frontend.main>