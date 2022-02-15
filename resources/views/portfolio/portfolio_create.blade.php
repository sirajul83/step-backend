@extends('layouts.master')
@section('title', 'Add Portfolio')
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
                <h3 class="card-title"> Add Portfolio </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-left">  Title </label>
                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="short_title" autofocus placeholder="Title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_description" class="col-md-2 col-form-label text-md-left"> Short Description </label>
                        <div class="col-md-10">
                            <textarea name="short_description"  id="short_description" class="form-control" placeholder="Short Description" required>  </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label text-md-left"> Description </label>
                        <div class="col-md-10">
                            <textarea name="description"  id="description" rows="4" class="form-control" placeholder="Description" required>  </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-2 col-form-label text-md-left">Project URL </label>
                        <div class="col-md-4">
                            <input type="text"  name="project_url"  id="project_url" class="form-control" placeholder="Project URL"  />
                        </div>
                        <label for="user_name" class="col-md-2 col-form-label text-md-left"> User Name </label>
                        <div class="col-md-4">
                            <input type="text"  name="user_name"  id="user_name" class="form-control"  placeholder="User Name" />
                        </div>
                       
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-2 col-form-label text-md-left">Password </label>
                        <div class="col-md-4">
                            <input type="text"  name="password"  id="password" class="form-control" placeholder="Password" />
                        </div>
                        <label for="image" class="col-md-2 col-form-label text-md-left"> Image </label>
                        <div class="col-md-2">
                            <input type="file"  name="image"  id="portfolioImg" class="form-control"  />
                        </div>
                        <div class="col-md-2">
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
        portfolioImg.onchange = evt => {
            const [file] = portfolioImg.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
</script>
@endsection
