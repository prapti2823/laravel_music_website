@extends('Admin Side.constant.content')

@push('title')
    <title> Artist View</title>
@endpush

@push('heading')
    {{"Artist List"}}
@endpush

@section('main-section')
    {{-- <div class="card" style="background-color: black; color: grey"> --}}
    <div class="card" >

        <div class="card-header">
      <h3 class="card-title"> Artist List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/#" class="btn btn-primary" > Add New Artist</a>
        <br><br>

      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Artist Id</th>
          <th>Artist name</th>
          <th>Image</th>
          <th>Song Name</th>
          <th>Actions</th>
        </tr>
        </thead>
        
        <tbody>

        {{-- @foreach($register as $user)
            <tr>
            <td>{{$user->userid}}</td>
            <td>{{$user->fullname}}  </td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>
            </tr>
        @endforeach --}}

        <tr>
          <td>1</td>
          <td>Arjit Singh </td>
          <td>Image</td>
          <td></td>
          <td>
            <a class="btn btn-primary btn-sm" href="#"> Edit</a>
            <a class="btn btn-danger btn-sm" href="#"> Delete</a>
          </td>
        </tr>
        
        
        
        <tr>
          <td>2</td>
          <td>Harry styles</td>
          <td>Image</td>
          <td></td>
          <td>
            <a class="btn btn-primary btn-sm" href="#"> Edit</a>
            <a class="btn btn-danger btn-sm" href="#"> Delete</a>
          </td>          
        </tr>
        
        <tr>
            <td>3</td>
            <td>Taylor Swift</td>
            <td>Image</td>
            <td></td>
            <td>
              <a class="btn btn-primary btn-sm" href="#"> Edit</a>
              <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>          
          </tr>
          <tr>
            <td>4</td>
            <td>Bille Eilish</td>
            <td></td>
            <td></td>   
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>                         
          </tr>
          <tr>
            <td>5</td>
            <td>Atif Aslam</td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>    
          </tr>
          
          <tr>
            <td>6</td>
            <td>Dua Lipa</td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>    
          </tr>

          <tr>
            <td>7</td>
            <td>Ariana Grande</td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>    
          </tr>
          <tr>
            <td>8</td>
            <td>Ed Sheeran</td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>    
          </tr>
          <tr>
            <td>9</td>
            <td>A.R Rahman</td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>    
          </tr>
          <tr>
            <td>10</td>
            <td>Arman Malik</td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-primary btn-sm" href="#"> Edit</a>
                <a class="btn btn-danger btn-sm" href="#"> Delete</a>
            </td>    
          </tr>


        </tbody>
        <tfoot>
        
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection