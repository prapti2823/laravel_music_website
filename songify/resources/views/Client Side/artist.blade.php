@if(session()->has('userid'))

@extends('Client Side.constant.content')

@section('main-section')
	
	<!-- Similar Songs section -->
	<section class="similar-songs-section">
		<div class="container-fluid">
			<h3>Popular Artists</h3>
			<form method="get" action="/artist"> 
				<div class="form-group">
				  <label for="text">Search Artist:</label>
				  <input type="search" style="width: 500px" class="form-control" placeholder="Search by Artist Name" name="artistsearch" value="{{$search}}">
				</div>
				<div class="form-group">
				  <button class="btn" style="background-color: #08192D; color: white">Search</button>
				  <a href="/artist" class="btn" style="background-color: grey; color: white">Reset</a>
				</div>
			</form>
			  <br>
			
			<div class="row">
				@foreach($artist as $artists)
				{{-- <div class="col-xl-3 col-sm-6">
					<div class="similar-song">
						<a href="#"><img class="ss-thumb" src="Client/img/playlist/1.jpg" alt=""></a>
						<h4>Jennifer Brown</h4>
						<p>One Night in Ibiza</p>
						<div class="single_player">
							<div class="jp-jplayer jplayer" data-ancestor=".jp_container_8" data-url="Client/music-files/3.mp3"></div>
							<div class="jp-audio jp_container_8" role="application" aria-label="media player">
								<div class="jp-gui jp-interface">
									
								</div>
								
							</div>
						</div>
					</div>
				</div> --}}
				<div class="col-xl-3 col-sm-6">
					<div class="similar-song">
						<img class="ss-thumb" src="{{ asset('uploads/' . $artists->photo) }}" alt="" height="300" width="100">
						<h4>{{ $artists->artistname }}</h4>
					</div>
				</div>
				@endforeach
			</div>
			 <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
    		  {{ $artist->links() }}  
			</div>
			
		</div>
	</section>
	<!-- Similar Songs section end -->
	@endsection  
@else
	<script>
        window.location = "/loginPage"; // Redirect to loginPage if not logged in
    </script>
@endif