@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('bower_components/Dropzone/dropzone.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section('content-header')
    <section class="content-header">
        <h1>
            Categories Management
            <small>manage your Categories</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="text-center">
        <h1>Add Categories<br><small>*Indicates important inputs</small></h1>
    </div>
    <hr>
    <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
            {{csrf_field()}}
            <!-- TITLE -->
            <div class="form-group">
                <label class="control-label">Categories Title</label>
            </div>
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Categories Title">
            </div>
            <!-- TYPE -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Category</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('bower_components/Dropzone/dropzone.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
      $(function () {
        $('#tbl_category').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : true
        })
    })
</script>
@endsection