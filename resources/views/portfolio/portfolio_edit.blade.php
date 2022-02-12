@extends('layouts.master')
@section('title', 'Update Portfolio')
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
                <h3 class="card-title"> Update Portfolio </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('portfolio.update', $portfolio_info->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-left">  Title </label>
                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $portfolio_info->title }}" required autocomplete="short_title" >

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
                            <textarea name="short_description"  id="short_description" class="form-control" required> {{$portfolio_info->short_description}} </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label text-md-left"> Description </label>
                        <div class="col-md-10">
                            <textarea name="description"  id="description" rows="5" class="form-control" required> {{$portfolio_info->description}}  </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-2 col-form-label text-md-left"> Image </label>
                        <div class="col-md-4">
                            <input type="file"  name="image"  id="portfolioImg" class="form-control"  />

                            <input type="hidden"  name="pre_image" value="{{$portfolio_info->image}}"  />
                        </div>
                        <div class="col-md-6">
                            <img id="imgPreview" src="{{ asset('public/assets/images')}}/{{$portfolio_info->image}}" style="width: 100%; height: 100px;">
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
        portfolioImg.onchange = evt => {
            const [file] = portfolioImg.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
</script>
@endsection
