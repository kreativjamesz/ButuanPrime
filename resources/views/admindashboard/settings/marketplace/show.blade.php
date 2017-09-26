@extends('layouts.master')
@section('styles')
	<!-- DataTables -->
  	<link rel="stylesheet" href="{{asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section('content-header')
	<section class="content-header">
	    <h1>
	        Marketplace Management
	        <small>manage your marketplaces</small>
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
                <a href="{{route('marketplace.create')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Marketplace</a>
              	<a href="{{route('marketplace.index')}}" class="btn btn-warning pull-right"><i class="fa fa-arrow-left"></i> Return</a>
                <h3 class="box-title">Marketplace Information</h3>
            </div>
            <div class="box-body">
				<p>
                  	<strong>{{$marketplace->title}}</strong>
                  	<small>{{$marketplace->slug}}</small>
                  	<br>
                  	{{$marketplace->created_at}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection