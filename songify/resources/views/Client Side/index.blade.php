@extends('Client Side.constant.content')

@section('main-section')
    <!-- Hero section -->
<div id="video-carousel-example" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="width:1500px">
      <video class="video-fluid" autoplay loop muted>
        <source src="Client/video/a.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>
<!-- Hero section end -->

<!-- Intro section -->
<section class="intro-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
          <h2>Discover a World of Music</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <p>Explore a vast collection of songs and artists, curated just for you. Immerse yourself in the world of music where every note tells a story. Whether you're a casual listener or a dedicated music enthusiast, our platform has something for everyone.</p>
        <a href="/songs" class="site-btn">Start Listening</a>
      </div>
    </div>
  </div>
</section>
<!-- Intro section end -->

<!-- How section -->
<section class="how-section spad set-bg" data-setbg="Client/img/how-to-bg.jpg">
  <div class="container text-white">
    <div class="section-title">
      <h2>How the Magic Happens</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="how-item">
          <div class="hi-icon">
            <img src="Client/img/icons/brain.png" alt="">
          </div>
          <h4>Create an Account</h4>
          <p>Sign up to unlock the door to a world of melodies. Create your personalized playlist and make every listening experience unique.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="how-item">
          <div class="hi-icon">
            <img src="Client/img/icons/pointer.png" alt="">
          </div>
          <h4>Choose Your Favorites</h4>
          <p>Select your preferred plan and dive into a sea of musical genres. From soulful ballads to energetic beats, the choice is yours.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="how-item">
          <div class="hi-icon">
            <img src="Client/img/icons/smartphone.png" alt="">
          </div>
          <h4>Download Your Playlist</h4>
          <p>Take your music wherever you go. Download your favorite tracks and enjoy them offline, ensuring the rhythm never stops.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How section end -->

<!-- Concept section -->
<section class="concept-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
          <h2>Our Musical Universe</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <p>Embark on a journey through diverse musical landscapes. Our platform celebrates artists and their unique concepts, offering a space for both established icons and emerging talents.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="concept-item">
          <img src="Client/img/concept/1.jpg" alt="">
          <h5>Soulful Melodies</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="concept-item">
          <img src="Client/img/concept/2.jpg" alt="">
          <h5>Live Concert Experiences</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="concept-item">
          <img src="Client/img/concept/3.jpg" alt="">
          <h5>DJ Sets</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="concept-item">
          <img src="Client/img/concept/4.jpg" alt="">
          <h5>Live Streams</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Concept section end -->

<!-- Subscription section -->
<section class="subscription-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="sub-text">
          <h2>Unlock Premium Music</h2>
          <h3>Start Your Free Trial Now</h3>
          <p>Upgrade to our premium subscription for an enhanced musical experience. Enjoy uninterrupted listening, high-quality audio, and exclusive perks.</p>
          <a href="#" class="site-btn">Try Premium</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="sub-list">
          <li><img src="Client/img/icons/check-icon.png" alt="">Access to Every Track</li>
          <li><img src="Client/img/icons/check-icon.png" alt="">Listen Anywhere, Anytime</li>
          <li><img src="Client/img/icons/check-icon.png" alt="">Ad-Free Experience</li>
          <li><img src="Client/img/icons/check-icon.png" alt="">Unlimited Skips</li>
          <li><img src="Client/img/icons/check-icon.png" alt="">Crystal Clear Audio</li>
          <li><img src="Client/img/icons/check-icon.png" alt="">Shuffle Play</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Subscription section end -->

<!-- Premium section end -->
<section class="premium-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
          <h2>Elevate Your Experience with Premium</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <p>Take your musical journey to new heights with our premium subscription. Immerse yourself in superior audio quality, exclusive content, and an ad-free environment.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="premium-item">
          <img src="Client/img/premium/1.jpg" alt="">
          <h4>No Interruptions</h4>
          <p>Experience uninterrupted listening without any ads. Dive into the melodies without any distractions.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="premium-item">
          <img src="Client/img/premium/2.jpg" alt="">
          <h4>High-Quality Audio</h4>
          <p>Indulge in the richness of sound with high-quality audio. Feel the music in every beat and note.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="premium-item">
          <img src="Client/img/premium/3.jpg" alt="">
          <h4>Offline Listening</h4>
          <p>Download your favorite tracks and enjoy them offline. Your playlist, your way, anytime, anywhere.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="premium-item">
          <img src="Client/img/premium/4.jpg" alt="">
          <h4>Music on the Go</h4>
          <p>Download and carry your music with you. Listen even when you're offline, ensuring the beats never stop.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Premium section end -->

@endsection