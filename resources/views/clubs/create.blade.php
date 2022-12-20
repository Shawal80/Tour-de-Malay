@extends('layouts.app')
@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
        {{-- BREAD CRUMP --}}
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Clubs</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Add Club</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <hr>
          {{-- BREAD CRUMB ENDS HERE --}}
          <div class="row">
            <div class="col-sm-12">
                <a href="{{url('clubs')}}" class="btn btn-sm btn-secondary text-white float-right"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
          </div>
          <hr>
          {{-- MAIN CONTENT --}}

      <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('clubs')}}" method="POST" id="club_detail_form" enctype="multipart/form-data">
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
                                    <label for="manager_name">Manager Name</label>
                                    <input type="text" name="manager_name" id="manager_name" class="form-control">
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
                                    <input type="text" name="manager_contact_number" id="manager_contact_number" class="form-control">
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
                                <div class="form-group input-material">
                                    <label for="club_description">Club Description</label>
                                    <textarea id="club_description" name="club_description" class="form-control" rows="1"></textarea>
                                    @error('club_description')
                                    <span class="text-danger">
                                        <b>{{$message}}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="club_ratings">Club Ratings</label>
                                    <select name="club_ratings" id="club_ratings" class="custom-select">
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">1 Star</option>
                                        <option value="2">2 Star</option>
                                        <option value="3">3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
                                    </select>
                                    @error('club_ratings')
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
                                    <label for="opens_at">Opens At</label>
                                    <input type="time" name="opens_at" id="opens_at" class="form-control">
                                    @error('opens_at')
                                    <span class="text-danger">
                                        <b>{{$message}}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="close_at">Close At</label>
                                    <input type="time" name="close_at" id="close_at" class="form-control">
                                    @error('close_at')
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
                                        <input type="file" class="custom-file-input" id="club_images[]" name="club_images[]" accept=".png,.jpg,.jpeg" multiple>
                                        @error('club_images')
                                        <span class="text-danger">
                                            <b>{{$message}}</b>
                                        </span>
                                        @enderror
                                        <label class="custom-file-label" for="club_images">Choose file</label>
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
