@extends('Admin Side.constant.content')

@push('title')
    <title> Song View</title>
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
                        <th>Song Title</th>
                        <th>Song Path</th>
                        <th>Duration</th>
                        <th>Realese Date</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($songs as $songs)
                      <tr>
                        <td>{{$songs->songid}}</td>
                        <td>{{$songs->songname}}
                        </td>
                        <td>{{$songs->songpath}}</td>
                        <td>{{$songs->duration}}</td>
                        <td>{{$songs->realesedate}}</td>
                        <td><a class="btn btn-primary btn-sm" href ="/edit/{{$songs->songid}}"> Edit</a>
                          <a class="btn btn-danger btn-sm" href ="/delete/{{$songs->songid}}"> Delete</a></td>
                      </tr>
                      @endforeach
                     </tbody>
                    <tfoot>
                      <tr>
                        <th>Song Id</th>
                        <th>Song Title</th>
                        <th>Song Path</th>
                        <th>Duration</th>
                        <th>Realese Date</th>
                        <th>Actions</th>
                        
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
@endsection
