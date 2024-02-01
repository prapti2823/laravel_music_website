@extends('Admin Side.constant.content')

@push('path')
  {{"Add Artist"}}
@endpush

@section('main-section')
<div class="container">
<h2>Add New Artist</h2>
  <form action="/astore" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="text">Artist Name:</label>
        <input type="text" class="form-control" placeholder="Enter Artist Name" name="artistname">
      </div>

    <div class="form-group">
        <label for="text">Artist Photo:</label>
        <input type="file" class="form-control" name="photo">
    </div>

    <div class="form-group">
        <label for="text">Song Name:</label>
        <input type="text" class="form-control" placeholder="Enter Song Name" name="songname">
    </div>
         
      
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
@endsection