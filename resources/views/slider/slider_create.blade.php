@extends('layouts.master')
@section('title', 'Add Slider')
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
                <h3 class="card-title"> Add Slider </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="short_title" class="col-md-2 col-form-label text-md-left"> Short Title </label>
                        <div class="col-md-8">
                            <input id="short_title" type="text" class="form-control @error('short_title') is-invalid @enderror" name="short_title" value="{{ old('short_title') }}" required autocomplete="short_title" autofocus placeholder="Short Title">
                            @error('short_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="title" class="col-md-1 col-form-label text-md-left"> Position </label>
                        <div class="col-md-1">
                            <input type="text"  name="position"  id="position" class="form-control" placeholder="0" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-left"> Title </label>
                        <div class="col-md-10">
                            <textarea name="title"  id="title" class="form-control" placeholder="Title" required>  </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label text-md-left"> Description </label>
                        <div class="col-md-10">
                            <textarea name="description"  id="description" rows="5" class="form-control" placeholder="Description" required>  </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-2 col-form-label text-md-left"> Image </label>
                        <div class="col-md-4">
                            <input type="file"  name="image"  id="sliderImg" class="form-control"  />
                        </div>
                        <div class="col-md-6">
                            <img id="imgPreview" src="" style="width: 100%; height: 100px;">
                        </div>
                    </div>
                   
                    <div class="form-group row mb-0">
                        <div  class="col-md-2"></div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success">
                                Save
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
        sliderImg.onchange = evt => {
            const [file] = sliderImg.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
</script>
@endsection
