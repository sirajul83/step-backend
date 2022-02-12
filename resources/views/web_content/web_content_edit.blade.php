@extends('layouts.master')
@section('title', 'Update Web Content')
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
                <h3 class="card-title"> Update Web Content </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('web_content.update', $web_content_info->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="short_title" class="col-md-2 col-form-label text-md-left"> Short Title </label>
                        <div class="col-md-6">
                            <input id="short_title" type="text" class="form-control @error('short_title') is-invalid @enderror" name="short_title" value="{{ $web_content_info->short_title }}" required autocomplete="short_title" autofocus >

                            @error('short_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="type" class="col-md-1 col-form-label text-md-left"> Type </label>
                        <div class="col-md-3">
                            <select name="type" id="type" class="form-control" onchange="typeFunction(this.value)">
                                <option value=""> Select Type</option>
                                <option value="1" @if($web_content_info->type == 1) selected @endif > WHO WE ARE</option>
                                <option value="2" @if($web_content_info->type == 2) selected @endif> WHAT WE DO</option>
                                <option value="3" @if($web_content_info->type == 3) selected @endif> WHY CHOOSE US</option>
                                <option value="4" @if($web_content_info->type == 4) selected @endif> MEET THE TEAM</option>
                                <option value="5" @if($web_content_info->type == 5) selected @endif> OUR PROJECT</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-left"> Title </label>
                        <div class="col-md-10">
                            <textarea name="title"  id="title" class="form-control" required> {{$web_content_info->title}}  </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label text-md-left"> Description </label>
                        <div class="col-md-10">
                            <textarea name="description"  id="description" rows="5" class="form-control" required>{{$web_content_info->description}}  </textarea>
                        </div>
                    </div>
                    <div class="form-group row" @if($web_content_info->type != 1) style="display: none"  @endif  id="ImageArea">
                        <label for="image" class="col-md-2 col-form-label text-md-left"> Image </label>
                        <div class="col-md-4">
                            <input type="file"  name="image"  id="typeImg" class="form-control"  />
                            <input type="hidden"  name="pre_image"  value="{{ $web_content_info->image}}" />
                        </div>
                        <div class="col-md-6">
                            <img id="imgPreview" src="{{ asset('public/assets/images')}}/{{$web_content_info->image}}" style="width: 100%; height: 100px;">
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
        typeImg.onchange = evt => {
            const [file] = typeImg.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
        function typeFunction(){
            $("#ImageArea").hide();

            var type = $("#type").val();
             if(type == 1){
                $("#ImageArea").show();
             }else{
                $("#ImageArea").hide();
             }
        }
</script>
@endsection
