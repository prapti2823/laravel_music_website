@if(session()->has('userid'))

@extends('Client Side.constant.content')

@section('main-section')
    <!-- Playlist section -->
	<section class="playlist-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Playlists</h2>
			</div>
			<div class="container">
				<ul class="playlist-filter controls">
					<li class="control" data-filter=".genres">Genres</li>
					<li class="control" data-filter=".artists">Artists</li>
					<li class="control" data-filter=".movies">Movies Soundtracks</li>
					<li class="control" data-filter=".labels">Labels</li>
					<li class="control" data-filter="all">All Playlist</li>
				</ul>
			</div>                                              
			<div class="clearfix"></div>
			<div class="row playlist-area">
				<div class="mix col-lg-3 col-md-4 col-sm-6 genres">
					<div class="playlist-item">
						<img src="Client/img/playlist/1.jpg" alt="">
						<h5>Live Concerts</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 artists">
					<div class="playlist-item">
						<img src="Client/img/playlist/2.jpg" alt="">
						<h5>Dj Sets</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 movies">
					<div class="playlist-item">
						<img src="Client/img/playlist/3.jpg" alt="">
						<h5>Recorded Live</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 labels">
					<div class="playlist-item">
						<img src="Client/img/playlist/4.jpg" alt="">
						<h5>Oldies</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 genres">
					<div class="playlist-item">
						<img src="Client/img/playlist/5.jpg" alt="">
						<h5>Rock & Roll</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 artists">
					<div class="playlist-item">
						<img src="Client/img/playlist/6.jpg" alt="">
						<h5>Classic Music</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 movies">
					<div class="playlist-item">
						<img src="Client/img/playlist/7.jpg" alt="">
						<h5>Rock</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 labels">
					<div class="playlist-item">
						<img src="Client/img/playlist/8.jpg" alt="">
						<h5>Alternative</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 genres">
					<div class="playlist-item">
						<img src="Client/img/playlist/9.jpg" alt="">
						<h5>Country</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 artists">
					<div class="playlist-item">
						<img src="Client/img/playlist/10.jpg" alt="">
						<h5>EDM</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 movies">
					<div class="playlist-item">
						<img src="Client/img/playlist/11.jpg" alt="">
						<h5>Pop Culture</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 labels">
					<div class="playlist-item">
						<img src="Client/img/playlist/12.jpg" alt="">
						<h5>The 90’s</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 genres">
					<div class="playlist-item">
						<img src="Client/img/playlist/13.jpg" alt="">
						<h5>Jass & Blues</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 artists">
					<div class="playlist-item">
						<img src="Client/img/playlist/14.jpg" alt="">
						<h5>Dj Sets</h5>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 movies">
					<div class="playlist-item">
						<img src="Client/img/playlist/15.jpg" alt="">
						<h5>Minimal</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Playlist section end -->

	<!-- Help section end -->
	<section class="help-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title mb-0 pb-4">
						<h2>Need Help to find music? </h2>
					</div>
					<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				</div>
				<div class="col-lg-6">
					<div class="d-flex h-100 align-items-end">
						<form class="search-form">
							<input type="text" placeholder="Hit it">
							<button>Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Help section end -->
@endsection
@else
	<script>
        window.location = "/loginPage"; // Redirect to loginPage if not logged in
    </script>
@endif