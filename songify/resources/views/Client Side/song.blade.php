@include('Client Side.constant.header')

<section class="category-section spad">
    <div class="container-fluid">
        <div class="section-title">
            <h2>Live Concert Playlist</h2>
        </div>
        <div class="container">
            <div class="category-links">
                <a href="" class="active">Genres</a>
                <a href="">Artists</a>
                <a href="">All Playlist</a>
            </div>
        </div>
        <div class="category-items">
            <div class="row">
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="Client/img/songs/3.jpg" alt="">
                        <div class="ci-text">
                            <h4>Micke Smith</h4>
                            <p>Live from Madrid</p>
                        </div>
                        <a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="Client/img/songs/4.jpg" alt="">
                        <div class="ci-text">
                            <h4>Micke Smith</h4>
                            <p>Live from Madrid</p>
                        </div>
                        <a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item">
                        <img src="Client/img/songs/7.jpg" alt="">
                        <div class="ci-text">
                            <h4>Micke Smith</h4>
                            <p>Live from Madrid</p>
                        </div>
                        <a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->

<!-- Songs section  -->
<section class="songs-section">
    <div class="container">
        @foreach($songs as $song)
        <!-- song -->
        <div class="song-item">
            <div class="row">
                <div class="col-lg-4">
                    <div class="song-info-box">
                        <img src="{{ asset('uploads/' . $song->songimage) }}" alt="Song Image">
                        <div class="song-info">
                        {{--<h4>{{ $song->artist_name }}</h4>--}} 
                            <p>{{ $song->songname }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_player_container">
                        <div class="single_player">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="{{ asset('public/uploads/' . $song->songpath) }}"></div>
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
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">{{$song->duration}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="songs-links">
                        <a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
                        <a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
                        <a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /song -->
        @endforeach
        <div class="song-item">
            <div class="row">
                <div class="col-lg-4">
                    <div class="song-info-box">
                        <img src="Client/img/songs/2.jpg" alt="">
                        <div class="song-info">
                            <h4>Michael Smith</h4>
                            <p>Dream in colors</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="songs-links">
                        <a href=""><img src="Client/img/icons/p-1.png" alt=""></a>
                        <a href=""><img src="Client/img/icons/p-2.png" alt=""></a>
                        <a href=""><img src="Client/img/icons/p-3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
                                    
        <div class="site-pagination pt-5 mt-5">
            <a href="#" class="active">01.</a>
            <a href="#">02.</a>
            <a href="#">03.</a>
            <a href="#">04.</a>
        </div>
    </div>
</section>

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
<footer>
@include('Client Side.constant.footer')
</footer>

    
    
  