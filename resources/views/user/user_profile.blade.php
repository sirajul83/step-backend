@extends('layouts.master')
@section('title', 'User Profile')
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
                <h3 class="card-title">  User Profile </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h2> Name  : {{$user_info->name}} </h2>
                <p> Email : {{$user_info->email}}</p>
           </div>
      </div>
   </div>
</div>
<!-- /.card -->
@endsection