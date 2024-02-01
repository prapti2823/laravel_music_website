@extends('Admin Side.constant.content')

@push('path')
  {{"Add Song"}}
@endpush

@section('main-section')
<div class="container">
<h2>Add New Song</h2>
  <form action="/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="text">Song Name:</label>
      <input type="text" class="form-control" placeholder="Enter Song Name" name="songname">
    </div>
    <div class="form-group">
        <label for="text">Song Path:</label>
        <input type="file" class="form-control" placeholder="Enter Song Path" name="songpath">
    </div>
      <div class="form-group">
        <label for="text">Song Duration:</label>
        <input type="text" class="form-control" placeholder="Enter Song Duration" name="duration">
      </div>
      <div class="form-group">
        <label for="text">Realese Date:</label>
        <input type="date" class="form-control" name="releasedate">
      </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>
@endsection