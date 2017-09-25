@extends('layouts.master')
@section('styles')
	<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section('content-header')
	<section class="content-header">
	    <h1>
	        Property Management
	        <small>manage your properties</small>
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
              	<a href="{{route('property.create')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Listings</a><h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              	<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              		<div class="row">
					   <div class="col-sm-12">
        					<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            	<thead>
            	                	<tr role="row">
            	                		<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Rendering engine</th>
            							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Browser</th>
            	                		<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Platform(s)</th>
            	                		<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Engine version</th>
            	                		<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">CSS grade</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            		<tr role="row" class="odd">
                              			<td class="sorting_1">Gecko</td>
                              			<td>Firefox 1.0</td>
                              			<td>Win 98+ / OSX.2+</td>
                              			<td>1.7</td>
                              			<td>A</td>
                            		</tr>
                            		<tr role="row" class="even">
                              			<td class="sorting_1">Gecko</td>
                              			<td>Firefox 1.5</td>
                              			<td>Win 98+ / OSX.2+</td>
                              			<td>1.8</td>
                              			<td>A</td>
                            		</tr>
                            	</tbody>
                            	<tfoot>
                            		<tr>
                            			<th rowspan="1" colspan="1">Rendering engine</th>
                            			<th rowspan="1" colspan="1">Browser</th>
                            			<th rowspan="1" colspan="1">Platform(s)</th>
                            			<th rowspan="1" colspan="1">Engine version</th>
                            			<th rowspan="1" colspan="1">CSS grade</th>
                        			</tr>
                            	</tfoot>
                            </table>
                        </div>
                    </div>
      			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
@endsection

@section('scripts')
<!-- DataTables -->
<script src="{{asset('/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
	  $(function () {
	    $('#example1').DataTable()
	    $('#example2').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
  	})
</script>
@endsection