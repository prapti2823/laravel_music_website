@extends('Admin Side.constant.content')

@push('path')
  {{"Edit Song"}}
@endpush

@section('main-section')
<div class="container">
  <h2>Edit|Song -> {{$songs->songname}}</h2>
  <form action="/update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <input type="hidden" name="songimage" value="{{$songs->songimage}}">
      <label for="text">Song Image:</label>
      <input type="file" class="form-control" placeholder="Enter Song Image" name="songimage">
    </div>
    <div class="form-group">
      <input type="hidden" name="songid" value="{{$songs->songid}}">
      <label for="text">Song Name:</label>
      <input type="text" class="form-control" placeholder="Enter Song Name" name="songname" value="{{$songs->songname}}">
    </div>
      <div class="form-group">
        <input type="hidden" name="songpath" value="{{$songs->songpath}}">

        <label for="text">Song Path :</label>
        <input type="file" class="form-control" placeholder="Enter Song Path" name="songpath" >
      </div>
      <div class="form-group">
        <label for="text">Song Duration:</label>
        <input type="text" class="form-control" name="duration" value="{{$songs->duration}}">
      </div>
      <div class="form-group">
        <label for="text">Release Date:</label>
        <input type="date" class="form-control" name="releasedate" value="{{$songs->releasedate}}">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
@endsection
