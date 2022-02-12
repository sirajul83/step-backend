@extends('layouts.master')
@section('title', 'Change Password')
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
                <h3 class="card-title">  Change Password </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="POST" action="{{ route('user.change_password_store') }}">
                  @csrf
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left"> Old Password </label>
                    <div class="col-md-6">
                      <input id="old_password" type="password" class="form-control" name="old_password" required placeholder="Old Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left"> New Password </label>
                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-left"> Confirm New Password </label>
                    <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div  class="col-md-3"></div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success">
                            {{ __('Submit') }}
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