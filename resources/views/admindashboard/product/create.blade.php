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
    <div class="text-center">
        <h1>Add New Product<br><small><span style="color:red;">*</span> Indicates important inputs</small></h1>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
            {{csrf_field()}}
            <!-- TITLE -->
            <div class="form-group">
                <div class="">
                    <input type="text" name="title" class="form-control input-lg" placeholder="Product Title">
                </div>
            </div>
            <!-- REGULAR -->
            <div class="form-group">
                <div class="">
                    <input type="text" name="regular" class="form-control input-lg" placeholder="Regular Price">
                </div>
            </div>
            <!-- DISCOUNTED -->
            <div class="form-group">
                <div class="">
                    <input type="text" name="discounted" class="form-control input-lg" placeholder="Discounted Price">
                </div>
            </div>
            <!-- DESCRIPTION -->
            <div class="form-group">
                <div class="">
                    <textarea name="description" id="input" class="form-control input-lg" rows="3" required="required" placeholder="Product Description"></textarea>
                </div>
            </div>

            <button class="btn btn-success btn-lg pull-right">Save New Product</button>



        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('bower_components/Dropzone/dropzone.js')}}"></script>
@endsection