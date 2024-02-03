@extends('Admin Side.constant.content')

@section('main-section')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box " style="background-color: #ccf2ff	">
              <div class="inner">
                <h3>{{ $userCount }}</h3>
                <p  style="font-weight: bold" ><br>Users Data</p>
              </div>
              <div class="icon">
                <i class="bi bi-person-fill"></i><br>
              </div>

              
              <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <div class="small-box "  style="background-color: #99ccff">
              <div class="inner">
                <h3>{{ $songCount }}</h3>
                <p style="font-weight: bold" ><br>Totals Songs</p>
              </div>
              <div class="icon">
                <i class="bi bi-music-note-beamed"></i><br>
              </div>
              <a href="/adminSong" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <div class="small-box "  style="background-color: #ddc9ff">
              <div class="inner">
                <h3>{{ $artistCount }}</h3>
                <p style="font-weight: bold"><br>Totals Artists</p>
              </div>
              <div class="icon">
                <i class="bi bi-people-fill"></i><br>
              </div>
              <a href="/adminartist" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <div class="small-box "  style="background-color:#d9d8ff">
              <div class="inner">
                <h3>{{ $feedbackCount }}</h3>
                <p  style="font-weight: bold; " ><br> Feedback Data</p>
              </div>
              <div class="icon">
                <i class="bi bi-chat-right-text-fill"></i><br>
              </div>
              
              <a href="/feedbackdata" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->


        <div class="row">
          {{-- This is the bottom of the page  --}}
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection