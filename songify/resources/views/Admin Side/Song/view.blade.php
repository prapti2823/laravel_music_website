@extends('Admin Side.constant.content')

@push('title')
    <title> Song View</title>
@endpush

@section('main-section')
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">:: Songs List Table ::</h3>
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
                        <th>Artist Id</th>
                        <th> Category Id</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>23</td>
                        <td>Butter
                        </td>
                        <td>Path</td>
                        <td> 1:30</td>
                        <td>10/10/2021</td>
                        <td>3</td>
                        <td>21</td>
                      </tr>
                      <tr>
                        <td>20</td>
                        <td>Dynamite
                        </td>
                        <td>Path</td>
                        <td> 1:40</td>
                        <td>10/11/2021</td>
                        <td>5</td>
                        <td>24</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>Permission to dance
                        </td>
                        <td>Path</td>
                        <td> 1:30</td>
                        <td>10/10/2021</td>
                        <td>3</td>
                        <td>21</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>Butter
                        </td>
                        <td>Path</td>
                        <td> 1:30</td>
                        <td>10/10/2021</td>
                        <td>3</td>
                        <td>21</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>Butter
                        </td>
                        <td>Path</td>
                        <td> 1:30</td>
                        <td>10/10/2021</td>
                        <td>3</td>
                        <td>21</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>Butter
                        </td>
                        <td>Path</td>
                        <td> 1:30</td>
                        <td>10/10/2021</td>
                        <td>3</td>
                        <td>21</td>
                      </tr>
                     </tbody>
                    <tfoot>
                      <tr>
                        <th>Song Id</th>
                        <th>Song Title</th>
                        <th>Song Path</th>
                        <th>Duration</th>
                        <th>Realese Date</th>
                        <th>Artist Id</th>
                        <th> Category Id</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
@endsection
