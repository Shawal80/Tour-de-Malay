@extends('layouts.app')
@section('content')



<section class="content">
    <div class="content-header">
        <div class="container-fluid">
        {{-- BREAD CRUMP --}}
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Restaurants</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">All Restaurants</li>
              </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
        {{-- BREAD CRUMB ENDS HERE --}}
        <div class="row mb-2 mt-2">
            <div class="col-sm-12">
                <a href="{{route('restaurants.create')}}" class="btn btn-success text-white float-right">Add Restaurant</a>
            </div>
        </div>
        {{-- MAIN CONTENT --}}
        <hr>
        <div class="row">
            <div class="col-sm-12">
                @if(session()->has('message'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session()->get('message') }}
                  </div>
                @endif
            </div>
          </div>
      <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-white">
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="allRestaurants">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Total Tables</th>
                                <th>Ratings</th>
                                <th>Location</th>
                                <th>Manager Name</th>
                                <th>Manager Contact Number</th>
                                {{-- <th></th> --}}
                                <th>Status</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>

                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['number_of_tables']}}</td>
                                <td>{{$item['restaurant_ratings']}}</td>
                                <td>{{$item['address']}}</td>
                                <td>{{$item['manager_name']}}</td>
                                <td>{{$item['manager_contact_number']}}</td>
                                <td>@if ($item['status'] == "1")
                                    <span class="badge bg-primary">Active</span>
                                  @elseif($item['status'] == "0")
                                  <span class="badge bg-warning">In-Active</span>
                                  @else
                                  <span class="badge bg-danger">Deleted</span>
                                  @endif</td>
                                  <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-primary{{$item['id']}}">
                                    <i class="fas fa-edit"></i>
                                </button>  <form action="{{url('restaurants',$item['id'])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" >
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                    {{-- EDIT MODAL --}}
                                    <div class="modal fade" id="modal-primary{{$item['id']}}" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content ">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Edit  Restaurants</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('restaurants',$item['id'])}}" method="POST" id="restaurant_detail_form" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" id="name" class="form-control" value="{{$item['name']}}">
                                                                @error('name')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group input-material">
                                                                <label for="address">Address</label>
                                                                <input type="text" name="address" id="address" class="form-control" value="{{$item['address']}}">
                                                                @error('address')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="contact_number">Restaurant Contact Number</label>
                                                                <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{$item['contact_number']}}">
                                                                @error('contact_number')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group input-material">
                                                                <label for="restaurant_description">Restaurant Description</label>
                                                                <textarea id="restaurant_description" name="restaurant_description" class="form-control" rows="1">{{$item['restaurant_description']}}</textarea>
                                                                @error('restaurant_description')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group input-material">
                                                                <label for="manager_name">Manager Name</label>
                                                                <input type="text" name="manager_name" id="manager_name" class="form-control" value="{{$item['manager_name']}}">
                                                                @error('manager_name')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="manager_contact_number">Manger Contact Number</label>
                                                                <input type="text" name="manager_contact_number" id="manager_contact_number" class="form-control" value="{{$item['manager_contact_number']}}">
                                                                @error('manager_contact_number')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="number_of_tables">Number Of Tables</label>
                                                                <select name="number_of_tables" id="number_of_tables" class="custom-select">
                                                                    @switch($item['number_of_tables'])
                                                                        @case('more_then_five')
                                                                        <option value="more_then_five" selected> <strong>></strong> 5</option>
                                                                        <option value="more_then_fifteen"><strong>></strong> 15</option>
                                                                        <option value="more_then_twentyfive"><strong>></strong> 25</option>
                                                                        @break
                                                                        @case('more_then_fifteen')
                                                                        <option value="more_then_five" > <strong>></strong> 5</option>
                                                                        <option value="more_then_fifteen" selected><strong>></strong> 15</option>
                                                                        <option value="more_then_twentyfive"><strong>></strong> 25</option>
                                                                        @break
                                                                        @case('more_then_twentyfive')
                                                                        <option value="more_then_five" > <strong>></strong> 5</option>
                                                                        <option value="more_then_fifteen" ><strong>></strong> 15</option>
                                                                        <option value="more_then_twentyfive" selected><strong>></strong> 25</option>
                                                                        @break


                                                                    @endswitch
                                                                </select>
                                                                @error('number_of_rooms')
                                                            <span class="text-danger">
                                                                <b>{{$message}}</b>
                                                            </span>
                                                            @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="restaurant_ratings">Restaurant Ratings</label>
                                                                <select name="restaurant_ratings" id="restaurant_ratings" class="custom-select">
                                                                    @switch($item['restaurant_ratings'])
                                                                        @case('1')
                                                                        <option value="1" selected>1 Star</option>
                                                                        <option value="2">2 Star</option>
                                                                        <option value="3">3 Star</option>
                                                                        <option value="4">4 Star</option>
                                                                        <option value="5">5 Star</option>
                                                                        @break
                                                                        @case('2')
                                                                        <option value="1" >1 Star</option>
                                                                        <option value="2" selected>2 Star</option>
                                                                        <option value="3">3 Star</option>
                                                                        <option value="4">4 Star</option>
                                                                        <option value="5">5 Star</option>
                                                                        @break
                                                                        @case('3')
                                                                        <option value="1" >1 Star</option>
                                                                        <option value="2" >2 Star</option>
                                                                        <option value="3" selected>3 Star</option>
                                                                        <option value="4">4 Star</option>
                                                                        <option value="5">5 Star</option>
                                                                        @break
                                                                        @case('4')
                                                                        <option value="1" >1 Star</option>
                                                                        <option value="2" >2 Star</option>
                                                                        <option value="3" >3 Star</option>
                                                                        <option value="4" selected>4 Star</option>
                                                                        <option value="5">5 Star</option>
                                                                        @break
                                                                        @case('5')
                                                                        <option value="1" >1 Star</option>
                                                                        <option value="2" >2 Star</option>
                                                                        <option value="3" >3 Star</option>
                                                                        <option value="4" >4 Star</option>
                                                                        <option value="5" selected>5 Star</option>
                                                                        @break



                                                                    @endswitch

                                                                </select>
                                                                @error('restaurant_ratings')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label for="status">Restaurant Status</label>
                                                            <select name="status" id="status" class="form-control">
                                                                @if ($item['status'] == "1")
                                                                <option value="0">In-Active</option>
                                                                <option value="1" selected>Active</option>
                                                                @elseif($item['status'] == "0")
                                                                <option value="0" selected>In-Active</option>
                                                                <option value="1" >Active</option>
                                                                @else
                                                                <option value="3" selected>Deleted</option>
                                                                <option value="1" >Active</option>
                                                                <option value="0" >In-Active</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Close</button>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <button class="btn btn-success float-right" type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                      </div>
                                      {{-- EDIT MODAL ENDS  --}}


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
      </div>

      {{-- MAIN CONTENT ENDS HERE --}}
    </div><!-- /.container-fluid -->
      </div>


    </section>
@endsection
@section('page-scripts')
<script>

$(function () {
    $("#allRestaurants").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
@endsection
