@extends('Admin Side.constant.content')

@push('title')
    <title>Edit Artist</title>
@endpush

@push('path')
  {{"Edit Artist"}}
@endpush

@section('main-section')
<div class="container">
  <h2>Edit Artist -> {{$artist->artistname}}</h2>
  <form action="/a_update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <input type="hidden" name="artistid" value="{{$artist->artistid}}">
      <label for="text">Artist Name:</label>
      <input type="text" class="form-control" placeholder="Enter Artist Name" name="artistname" value="{{$artist->artistname}}">
    </div>

     <div class="form-group">
        <input type="hidden" name="photo" value="{{$artist->photo}}">
        <label for="text">Artist Photo:</label>
        <input type="file" class="form-control" name="photo">
      </div>
      
      <div class="form-group">
        <label for="text"> Song Name :</label>
        <input type="text" class="form-control" placeholder="Enter Song name" name="songname" value="{{$artist->songname}}">
      </div>
      
      <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
@endsection
