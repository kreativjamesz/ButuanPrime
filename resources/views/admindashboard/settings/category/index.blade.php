@extends('layouts.master')
@section('styles')
	<!-- DataTables -->
  	<link rel="stylesheet" href="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section('content-header')
	<section class="content-header">
	    <h1>
	        Category Management
	        <small>manage your categories</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
	        <li class="active">Here</li>
	    </ol>
	</section>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
      	<div class="box">
            <div class="box-header">
              	<a href="{{route('category.create')}}" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Add New Category</a>
                <h3 class="box-title">Category Table</h3>
            </div>
            <div class="box-body">
              	<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              		<div class="row">
					   <div class="col-sm-12">
        					<table id="tbl_category" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            	<thead>
            	                	<tr role="row">
            	                		<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 40%;">Title</th>
            							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 40%;">Slug</th>
            	                		<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 15%;">Action</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            		@foreach($categories as $category)
                                    <tr role="row">
                              			<td>{{$category->title}}</td>
                              			<td>{{$category->slug}}</td>
                              			<td>
                                            <a class="btn btn-warning btn-xs m-r-5" href="{{route('category.show', $category->slug)}}"><i class="fa fa-pencil"></i> View</a>
                                            <a class="btn btn-danger btn-xs" href="{{route('category.edit', $category->id)}}"><i class="fa fa-times"></i> Edit</a>
                                        </td>
                            		</tr>
                                    @endforeach
                            	</tbody>
                            </table>
                        </div>
                    </div>
      			</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
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