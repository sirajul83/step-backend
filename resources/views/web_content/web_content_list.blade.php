@extends('layouts.master')
@section('title', 'Web Content List')
@section('css_script')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      @if (session()->has('flash.message'))
        <div class="alert alert-{{ session('flash.class') }} alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          {{ session('flash.message') }}
        </div>
      @endif
      <div class="card-header">
        <h3 class="card-title"> Web Content list </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th> Sl     </th>
            <th> Short Title </th>
            <th> Title  </th>
            <th> Description  </th>
            <th> Image  </th>
            <th> Action </th>
          </tr>
          </thead>
          <tbody>
          @php $i=1; @endphp
          @foreach ($web_content_info as $item)
          <tr>
            <td>{{ $i++ }}</td> 
            <td>{{$item->short_title}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>
              <img src="{{ asset('public/assets/images')}}/{{$item->image}}" style="width: 150PX; height: 80px;">
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-info btn-sm" href="{{ route('web_content.edit', $item->id )}}">
                  <i class="fas fa-pencil-alt"></i>
              </a>
              <a  onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{ route('web_content.delete', $item->id )}}">
                  <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>   

@endsection

@section('js_script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    
    <script>
        $(function () {
          $('#example1').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@endsection