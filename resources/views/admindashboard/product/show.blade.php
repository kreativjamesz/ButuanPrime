@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('bower_components/Dropzone/dropzone.css')}}">
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
                <a href="{{route('product.create')}}" class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Add New Product</a>
                <h3 class="box-title">Product Table </h3>
            </div>
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                       <div class="col-sm-12">
                            
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection