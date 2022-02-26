@extends('layouts.master')
@section('title', 'Update Team Member')
@section('content')
<div class="row">
   <div class="col-md-12">
        <div class="card card-deafult">
            @if (session()->has('flash.message'))
                <div class="alert alert-{{ session('flash.class') }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('flash.message') }}
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title"> Update Team Memeber </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('team_member.update', $team_info->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-left"> Name </label>
                        <div class="col-md-4">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $team_info->name}}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="name" class="col-md-2 col-form-label text-md-left"> Designation </label>
                        <div class="col-md-4">
                            <input type="text" name="designation" id="designation" class="form-control"  value="{{ $team_info->designation}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-left"> Facebook </label>
                        <div class="col-md-4">
                            <input type="text" name="facebook" id="facebook" class="form-control"  value="{{ $team_info->facebook}}" />
                        </div>
                        <label for="name" class="col-md-2 col-form-label text-md-left"> Twitter </label>
                        <div class="col-md-4">
                            <input type="text" name="twitter" id="twitter" class="form-control"  value="{{ $team_info->twitter}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-left"> LinkedIn </label>
                        <div class="col-md-4">
                            <input type="text" name="linkedIn" id="linkedIn" class="form-control"  value="{{ $team_info->linkedIn}}" />
                        </div>

                        <label for="image" class="col-md-2 col-form-label text-md-left"> Image </label>
                        <div class="col-md-3">
                            <input type="file"  name="image"  id="teamrImg" class="form-control"  />
                            <input type="hidden"  name="pre_image" value="{{ $team_info->image}}" />
                        </div>
                        <div class="col-md-1">
                            <img id="imgPreview" src="" style="width: 100%; height: 60px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-left"> Position </label>
                        <div class="col-md-1">
                           <input type="text"  name="position"  id="position" class="form-control" value="{{ $team_info->position}}"  />
                        </div>
                    </div>
                   
                    <div class="form-group row mb-0">
                        <div  class="col-md-2"></div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
           </div>
      </div>
   </div>
</div>
<!-- /.card -->
@endsection
@section('js_script')
    <script>
        teamrImg.onchange = evt => {
            const [file] = teamrImg.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
</script>
@endsection
