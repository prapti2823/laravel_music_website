@if(session()->has('userid'))

@extends('Client Side.constant.content')

@section('main-section')
    <!-- Player section -->
	<section class="player-section set-bg" data-setbg="Client/img/player-bg.jpg">
		<div class="player-box">
			<div class="tarck-thumb-warp">
				<div class="tarck-thumb">
					<img src="Client/img/wave-thumb.jpg" alt="">
					<button onclick="wavesurfer.playPause();" class="wp-play"></button>
				</div>
			</div>
			<div class="wave-player-warp">
				<div class="row">
					<div class="col-lg-8">
						<div class="wave-player-info">
							<h2>Michael Smith</h2>
							<p>One Night in Ibiza</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="songs-links">
							<a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
							<a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
							<a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
						</div>
					</div>
				</div>
				<div id="wavePlayer" class="clierfix">
					<div id="audiowave" data-waveurl="Client/music-files/8.mp3"></div>
					<div id="currentTime"></div>
					<div id="clipTime"></div>
					<!-- Player Controls -->
					<div class="wavePlayer_controls">
						<button class="jp-prev player_button" onclick="wavesurfer.skipBackward();"></button>
						<button class="jp-play player_button" onclick="wavesurfer.playPause();"></button>
						<button class="jp-next player_button" onclick="wavesurfer.skipForward();"></button>
						<button class="jp-stop player_button" onclick="wavesurfer.stop();"></button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Player section end -->

	<!-- Songs details section -->
	<section class="songs-details-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
					<div class="song-details-box">
						<h3>Song Details</h3>
						<ul>
							<li><strong>Genre:</strong><span>electro, drum & base, minimal</span></li>
							<li><strong>Tags:</strong><span>quitar, piano, music, electronic music, minimal, chill music, pop, cultural, live, popular</span></li>
							<li><strong>Instruments:</strong><span>quitar, piano, drums, bass</span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-6">
							<div class="song-details-box">
								<h3>About the Artist</h3>
								<div class="artist-details">
									<img src="Client/img/artist.jpg" alt="">
									<div class="ad-text">
										<h5>Michael Smith</h5>
										<span>Artist/ Songwriter</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="song-details-box">
								<h3>Song Details</h3>
								<!-- song -->
								<div class="song-item">
									<div class="row">
										<div class="col-xl-5 col-lg-12 col-md-5">
											<div class="song-info-box">
												<img src="Client/img/songs/1.jpg" alt="">
												<div class="song-info">
													<h4>Jennifer Brown</h4>
													<p>One Night in Ibiza</p>
												</div>
											</div>
										</div>
										<div class="col-xl-7 col-lg-12 col-md-7">
											<div class="single_player_container">
												<div class="single_player">
													<div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="Client/music-files/1.mp3"></div>
													<div class="jp-audio jp_container_1" role="application" aria-label="media player">
														<div class="jp-gui jp-interface">
					
															<!-- Player Controls -->
															<div class="player_controls_box">
																<button class="jp-prev player_button" tabindex="0"></button>
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-next player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div>
															<!-- Progress Bar -->
															<div class="player_bars">
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div>
																			<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
																		</div>
																	</div>
																</div>
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
															</div>
														</div>
														<div class="jp-no-solution">
															<span>Update Required</span>
															To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- song -->
								<div class="song-item">
									<div class="row">
										<div class="col-xl-5 col-lg-12 col-md-5">
											<div class="song-info-box">
												<img src="Client/img/songs/2.jpg" alt="">
												<div class="song-info">
													<h4>Michael Smith</h4>
													<p>Dream in colors</p>
												</div>
											</div>
										</div>
										<div class="col-xl-7 col-lg-12 col-md-7">
											<div class="single_player_container">
												<div class="single_player">
													<div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="Client/music-files/2.mp3"></div>
													<div class="jp-audio jp_container_2" role="application" aria-label="media player">
														<div class="jp-gui jp-interface">

															<!-- Player Controls -->
															<div class="player_controls_box">
																<button class="jp-prev player_button" tabindex="0"></button>
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-next player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div>
															<!-- Progress Bar -->
															<div class="player_bars">
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div>
																			<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
																		</div>
																	</div>
																</div>
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
															</div>
														</div>
														<div class="jp-no-solution">
															<span>Update Required</span>
															To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
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
				</div>
			</div>
		</div>
	</section>
	<!-- Songs details section -->
	
	<!-- Similar Songs section -->
	<section class="similar-songs-section">
		<div class="container-fluid">
			<h3>Similar Songs</h3>
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="similar-song">
						<img class="ss-thumb" src="Client/img/playlist/1.jpg" alt="">
						<h4>Jennifer Brown</h4>
						<p>One Night in Ibiza</p>
						<div class="single_player">
							<div class="jp-jplayer jplayer" data-ancestor=".jp_container_8" data-url="Client/music-files/3.mp3"></div>
							<div class="jp-audio jp_container_8" role="application" aria-label="media player">
								<div class="jp-gui jp-interface">
									<!-- Player Controls -->
									<div class="ss-controls">
										<div class="songs-links">
											<a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
										</div>
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="player_bars">
										<div class="jp-progress">
											<div class="jp-seek-bar">
												<div>
													<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
												</div>
											</div>
										</div>
										<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
									</div>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="similar-song">
						<img class="ss-thumb" src="Client/img/playlist/2.jpg" alt="">
						<h4>Jennifer Brown</h4>
						<p>One Night in Ibiza</p>
						<div class="single_player">
							<div class="jp-jplayer jplayer" data-ancestor=".jp_container_9" data-url="Client/music-files/4.mp3"></div>
							<div class="jp-audio jp_container_9" role="application" aria-label="media player">
								<div class="jp-gui jp-interface">
									<!-- Player Controls -->
									<div class="ss-controls">
										<div class="songs-links">
											<a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
										</div>
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="player_bars">
										<div class="jp-progress">
											<div class="jp-seek-bar">
												<div>
													<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
												</div>
											</div>
										</div>
										<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
									</div>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="similar-song">
						<img class="ss-thumb" src="Client/img/playlist/3.jpg" alt="">
						<h4>Jennifer Brown</h4>
						<p>One Night in Ibiza</p>
						<div class="single_player">
							<div class="jp-jplayer jplayer" data-ancestor=".jp_container_10" data-url="Client/music-files/5.mp3"></div>
							<div class="jp-audio jp_container_10" role="application" aria-label="media player">
								<div class="jp-gui jp-interface">
									<!-- Player Controls -->
									<div class="ss-controls">
										<div class="songs-links">
											<a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
										</div>
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="player_bars">
										<div class="jp-progress">
											<div class="jp-seek-bar">
												<div>
													<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
												</div>
											</div>
										</div>
										<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
									</div>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="similar-song">
						<img class="ss-thumb" src="Client/img/playlist/4.jpg" alt="">
						<h4>Jennifer Brown</h4>
						<p>One Night in Ibiza</p>
						<div class="single_player">
							<div class="jp-jplayer jplayer" data-ancestor=".jp_container_11" data-url="Client/music-files/7.mp3"></div>
							<div class="jp-audio jp_container_11" role="application" aria-label="media player">
								<div class="jp-gui jp-interface">
									<!-- Player Controls -->
									<div class="ss-controls">
										<div class="songs-links">
											<a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
											<a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
										</div>
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="player_bars">
										<div class="jp-progress">
											<div class="jp-seek-bar">
												<div>
													<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
												</div>
											</div>
										</div>
										<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
									</div>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
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