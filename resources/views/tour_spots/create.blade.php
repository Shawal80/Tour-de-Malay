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
                <li class="breadcrumb-item active">Add Spot</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <hr>
          {{-- BREAD CRUMB ENDS HERE --}}
          <div class="row">
            <div class="col-sm-12">
                <a href="{{url('tour_spots')}}" class="btn btn-sm btn-secondary text-white float-right"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
          </div>
          <hr>
          {{-- MAIN CONTENT --}}

      <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body m-2">
                    <form action="{{url('tour_spots')}}" method="POST" id="tour_spot_detail_form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
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
                                    <input type="text" name="address" id="address" class="form-control">
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
                                    <textarea id="spot_description" name="spot_description" class="form-control" rows="1"></textarea>
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
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">1 Star</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
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
                                <div class="form-group">
                                    <label for="">Upload Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="tour_spot_images[]" name="tour_spot_images[]" accept=".png,.jpg,.jpeg" multiple>
                                        @error('tour_spot_images')
                                        <span class="text-danger">
                                            <b>{{$message}}</b>
                                        </span>
                                        @enderror
                                        <label class="custom-file-label" for="tour_spot_images[]">Choose file</label>
                                      </div>
                                   </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn btn-success float-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      {{-- MAIN CONTENT ENDS HERE --}}
        </div><!-- /.container-fluid -->
      </div>


@endsection
@section('page-scripts')
<script>

</script>

@endsection
