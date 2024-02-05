@if(session()->has('userid'))

@extends('Client Side.constant.content')

@section('main-section')
    <!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<!-- Map -->
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" style="border:0" allowfullscreen></iframe></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Get in touch</h2>
						</div>
						<p>
							Welcome to the heart of our musical community! We're thrilled that you want to connect with us. Whether you have burning questions, suggestions, or just want to share your love for music, our contact page is the place to be. Your feedback is like music to our ears, and we can't wait to hear from you. Feel free to drop us a line using the contact form below, and our dedicated team will get back to you faster than a perfectly timed beat. If you prefer a more direct approach, you can also reach us through the provided email address or give us a ring.
							</p>
						<ul>
							<li>Main Road , No 25/11</li>
							<li>+34 556788 3221</li>
							<li>contact@solmusic.com</li>
						</ul>
						<form class="contact-from" method="POST" action="/feedback/store">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="username" placeholder="Your name" value={{session()->get('fullnamephp arti')}}>
								</div>
								<div class="col-md-6">
									<input type="text" name="email" placeholder="Your e-mail" value={{session()->get('email')}}>
								</div>
								<div class="col-md-12">
									{{-- <input type="text" placeholder="Subject"> --}}
									<textarea placeholder="Message" name="feedback"></textarea>
									<button class="site-btn">send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

@endsection

@else
	<script>
        window.location = "/loginPage"; // Redirect to loginPage if not logged in
    </script>
@endif