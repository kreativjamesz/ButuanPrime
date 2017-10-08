@extends('layouts.master')
@section('styles')
	<!-- DataTables -->
  	<link rel="stylesheet" href="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section('content-header')
	<section class="content-header">
	    <h1>
	        Product Management
	        <small>manage your products</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	        <li class="active">Product</li>
	    </ol>
	</section>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
      	<div class="box">
            <div class="box-header">
              	<a href="{{route('product.create')}}" class="btn btn-success pull-right">
              	<i class="fa fa-plus"></i> Add New Product</a>
              	<h3 class="box-title">Product Table	</h3>
            </div>
            <div class="box-body">
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              		<div class="row">
					   <div class="col-sm-12">
        					<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            	<thead>
            	                	<tr role="row">
            	                		<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 25%;">Product</th>
            	                		<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 25%;">Slug</th>
                                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 25%;">Regular Price</th>
                                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 25%;">Discoutned Price</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            		@foreach($products as $product)
                                <tr role="row" class="odd">
                              			<td class="sorting_1">{{$product->title}}</td>
                                    <td>{{$product->slug}}</td>
                              			<td>{{$product->reg_price}}</td>
                              			<td>{{$product->dc_price}}</td>
                              			{{-- <td>This glutathione helps keep your skin firms and young looking skin.</td> --}}
                            		</tr>
                            		@endforeach
                            	</tbody>
                            	<tfoot>
                            		<tr>
                            			<th rowspan="1" colspan="1">Product</th>
                            			<th rowspan="1" colspan="1">Regular Price</th>
                            			<th rowspan="1" colspan="1">Discounted Price</th>
                            			{{-- <th rowspan="1" colspan="1">Description</th> --}}
                        			</tr>
                            	</tfoot>
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

@endsection
