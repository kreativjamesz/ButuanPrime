@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('bower_components/Dropzone/dropzone.css')}}">
@endsection
@section('content-header')
    <section class="content-header">
        <h1>
            Product Management
            <small>manage your products</small>
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
            <!-- Marketplace -->
            <div class="form-group">
                <select name="marketplace_id" id="input" class="form-control input-lg" required="required" required="required" placeholder="Select Marketplace" autofocus>
                    <option value="0" selected="selected">--Select Marketplace--</option>
                    @foreach($marketplaces as $market)
                        <option value="{{$market->id}}">{{$market->title}}</option>
                    @endforeach
                </select>
            </div>
            <!--Category-->
            <div class="form-group">
                <select name="category_id" id="input" class="form-control input-lg" required="required" required="required" placeholder="Select Marketplace">
                    <option value="0" selected="selected">--Select Category--</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <!-- TITLE -->
            <div class="form-group">
                <div class="">
                    <input type="text" name="title" class="form-control input-lg" required="required" placeholder="Product Title">
                </div>
            </div>
            <!-- REGULAR -->
            <div class="form-group">
                <div class="">
                    <input type="text" name="reg_price" class="form-control input-lg" required="required" placeholder="Regular Price">
                </div>
            </div>
            <!-- DISCOUNTED -->
            <div class="form-group">
                <div class="">
                    <input type="text" name="dc_price" class="form-control input-lg" required="required" placeholder="Discounted Price">
                </div>
            </div>
            <!-- DESCRIPTION -->
            {{-- <div class="form-group">
                <div class="">
                    <textarea name="description" id="input" class="form-control input-lg" rows="3" required="required" placeholder="Product Description"></textarea>
                </div>
            </div> --}}
            <div class="form-group m-b-15">
                <button class="btn btn-success btn-lg pull-right">Save New Product</button>
            </div>

        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('bower_components/Dropzone/dropzone.js')}}"></script>
@endsection