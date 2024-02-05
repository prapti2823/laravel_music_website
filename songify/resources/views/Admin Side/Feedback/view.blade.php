@extends('Admin Side.constant.content')

@section('main-section')
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Feedback Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                        {{-- <th>Profile Picture</th>
                        <th>Favourite Generes of user</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($feedback as $f)
                      <tr>
                        <td>{{$f->feedbackid}}</td>
                        <td>{{$f->username}}</td>
                        <td>{{$f->email}}</td>
                        <td>{{$f->feedback}}</td>
                        <td>
                          {{-- <a class="btn btn-primary btn-sm" href =""> Edit</a> --}}
                          <a class="btn btn-danger btn-sm" href ="/deletefeedback/{{$f->feedbackid}}"> Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Message</th>
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