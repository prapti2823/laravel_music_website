@extends('Admin Side.constant.content')

@push('heading')
    {{"Artist List"}}
@endpush

@section('main-section')
    <div class="card" >

        <div class="card-header">
      <h3 class="card-title"> Artist List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/addartist" class="btn btn-primary" > Add New Artist</a>
        <br><br>

      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Artist Id</th>
          <th>Artist name</th>
          <th>Photo</th>
          <th>Song Name</th>
          <th>Actions</th>
        </tr>
        </thead>
        
        <tbody>

        @foreach($artists as $artist)
            <tr>
            <td>{{$artist->artistid}}</td>
            <td>{{$artist->artistname}}  </td>
            <td><img src="uploads/{{$artist->photo}}" class="rounded-circle" height="80" width="80"/></td>
            <td>{{$artist->songname}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href ="/a_edit/{{$artist->artistid}}"> Edit</a>
                <a class="btn btn-danger btn-sm" href ="/a_delete/{{$artist->artistid}}"> Delete</a>
            </td>
            </tr>
        @endforeach       

        </tbody>
        <tfoot>
        
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection