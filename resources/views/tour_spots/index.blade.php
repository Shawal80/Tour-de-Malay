@extends('layouts.app')
@section('content')



<section class="content">
    <div class="content-header">
        <div class="container-fluid">
        {{-- BREAD CRUMP --}}
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tour Spots</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">All Tour Spots</li>
              </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
        {{-- BREAD CRUMB ENDS HERE --}}
        <div class="row mb-2 mt-2">
            <div class="col-sm-12">
                <a href="{{route('tour_spots.create')}}" class="btn btn-success text-white float-right">Add Spot</a>
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
                                <th>Ratings</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>

                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['spot_ratings']}}</td>
                                <td>{{$item['address']}}</td>
                                <td>@if ($item['status'] == "1")
                                    <span class="badge bg-primary">Active</span>
                                  @elseif($item['status'] == "0")
                                  <span class="badge bg-warning">In-Active</span>
                                  @else
                                  <span class="badge bg-danger">Deleted</span>
                                  @endif</td>
                                  <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-primary{{$item['id']}}">
                                    <i class="fas fa-edit"></i>
                                </button>  <form action="{{url('tour_spots',$item['id'])}}" method="POST">
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
                                              <h4 class="modal-title">Edit  Tour Spot</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('tour_spots',$item['id'])}}" method="POST" id="restaurant_detail_form" enctype="multipart/form-data">
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
                                                            <div class="form-group input-material">
                                                                <label for="spot_description">Spot Description</label>
                                                                <textarea id="spot_description" name="spot_description" class="form-control" rows="1">{{$item['spot_description']}}</textarea>
                                                                @error('spot_description')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="spot_ratings">Spot Ratings</label>
                                                                <select name="spot_ratings" id="spot_ratings" class="custom-select">
                                                                    @switch($item['spot_ratings'])
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
                                                                @error('spot_ratings')
                                                                <span class="text-danger">
                                                                    <b>{{$message}}</b>
                                                                </span>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label for="status">Spot Status</label>
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
