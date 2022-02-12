@extends('layouts.master')
@section('title', 'Company Profile')
@section('content')

<div class="card card-default">
    @if (session()->has('flash.message'))
        <div class="alert alert-{{ session('flash.class') }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session('flash.message') }}
        </div>
    @endif
  <div class="card-header">
    <h3 class="card-title"> Company Profile </h3>
  </div>
  <!-- /.card-header -->
<form method="POST" action="{{ route('company_profile_save') }}" enctype="multipart/form-data">
    @csrf

  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Company Name</label>
          <input name="name" id="name" type="text" class="form-control" value="{{ $comapny_info->name}}">
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <label>Email</label>
            <input name="email" id="email" type="email" class="form-control" value="{{ $comapny_info->email}}">
          </div>
        <div class="form-group">
          <label>Website url </label>
          <input name="website" id="website" type="text" class="form-control" value="{{ $comapny_info->website}}">
        </div>
        <div class="form-group">
            <label>Copyright Year</label>
            <input name="copyright_year" id="copyright_year" type="text" class="form-control" value="{{ $comapny_info->copyright_year}}">
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input name="facebook" id="facebook" type="text" class="form-control" value="{{ $comapny_info->facebook}}">
        </div>
        <div class="form-group">
            <label>Twitter</label>
            <input name="twitter" id="twitter" type="text" class="form-control" value="{{ $comapny_info->twitter}}">
        </div>
        <div class="form-group">
            <label> Address </label>
            <textarea name="address"  id="address" class="form-control">{{ $comapny_info->address}} </textarea>
          </div>
      </div>
      <!-- /.col -->
      <div class="col-md-6">
           <div class="form-group">
            <label>Slogan</label>
                <input name="slogan" id="slogan" type="text" class="form-control" value="{{ $comapny_info->slogan}}">
            </div>
            <div class="form-group">
                <label> Mobile </label>
                <input name="mobile_no1" id="mobile_no1" type="text" class="form-control" value="{{ $comapny_info->mobile_no1}}">
            </div>
            <div class="form-group">
                <label> Other Mobile  </label>
                <input name="mobile_no2" id="mobile_no2" type="text" class="form-control" value="{{ $comapny_info->mobile_no2}}">
            </div>
            <div class="form-group">
                <label>LinkedIn</label>
                <input name="linkedIn" id="linkedIn" type="text" class="form-control" value="{{ $comapny_info->linkedIn}}">
            </div>
            <div class="form-group">
                <label>Youtube</label>
                <input name="youtube" id="youtube" type="text" class="form-control" value="{{ $comapny_info->youtube}}">
            </div>
            <div class="form-group">
                <label>logo</label>
                <input name="logo" id="logo" type="file" class="form-control">

                <input name="pre_logo" id="pre_logo" type="hidden" value="{{ $comapny_info->logo}}">
            </div>

            <div class="form-group">
                <img src="{{ asset('public/assets/images')}}/{{ $comapny_info->logo}}" style="width: 80PX; height: 70px;">
            </div>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-2">
        <input type="submit" class="btn btn-success form-control" value="Save">
      </div>
      <div class="col-md-10"></div>
    </div>
  </div>
  </form>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection