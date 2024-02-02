@extends('Admin Side.constant.content')

@push('path')
  {{"Song list"}}
@endpush

@section('main-section')
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">:: Songs List Table ::</h3><br><br>
                  <a href="/add" class="btn btn-warning">Add New Song</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
                  <table id="example1" class="table table-bordered table-striped">
    
                    <thead>
                      <tr>
                        <th>Song Id</th>
                        <th>Song Image</th>
                        <th>Song Title</th>
                        <th>Song Path</th>
                        <th>Duration</th>
                        <th>Release Date</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($songs as $songs)
                      <tr>
                          <td>{{$songs->songid}}</td>
                          <td><img src="uploads/{{$songs->songimage}}" class="squre" height="100" width="100"/></td>
                          <td>{{$songs->songname}}</td>
                          <td>{{$songs->songpath}}</td>
                          <td>{{$songs->duration}}</td>
                          <td>{{$songs->releasedate}}</td>
                          <td>
                              <a class="btn btn-primary btn-sm" href="/edit/{{$songs->songid}}"> Edit</a>
                              <a class="btn btn-danger btn-sm" href ="/del/{{$songs->songid}}"> Delete</a></td>
                            </td>
                      </tr>
                      @endforeach
                  </tbody>
                  
                    <tfoot>
                      <tr>
                        <th>Song Id</th>
                        <th>Song Image</th>
                        <th>Song Title</th>
                        <th>Song Path</th>
                        <th>Duration</th>
                        <th>Release Date</th>
                        <th>Actions</th>
                        
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
@endsection
