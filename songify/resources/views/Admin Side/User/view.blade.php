@extends('Admin Side.constant.content')

@section('main-section')
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">User Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Profile Picture</th>
                        <th>Date added</th>
                        <th>Actions</th>
                        {{-- <th>Profile Picture</th>
                        <th>Favourite Generes of user</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->userid}}</td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->email}}</td>
                        <td><img src="uploads/{{$user->photo}}" class="rounded-circle" height="80" width="80"/></td>
                        <td>{{$user->created_at}}</td>
                        <td><a class="btn btn-primary btn-sm" href =""> Edit</a>
                          <a class="btn btn-danger btn-sm" href ="/delete/{{$user->userid}}"> Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Profile Picture</th>
                        <th>Date added</th>
                        <th>Actions</th>

                        {{-- <th>Profile Picture</th>
                        <th>Favourite Generes of user</th> --}}
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
@endsection