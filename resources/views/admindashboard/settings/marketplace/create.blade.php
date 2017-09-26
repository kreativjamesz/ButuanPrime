@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{asset('bower_components/Dropzone/dropzone.css')}}">
@endsection
@section('content-header')
    <section class="content-header">
        <h1>
            Marketplace Management
            <small>manage your marketplace</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="text-center">
        <h1>Add Marketplace<br><small>*Indicates important inputs</small></h1>
    </div>
    <hr>
    <div class="col-md-3">
        <form class="form-horizontal" action="{{route('marketplace.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
            {{csrf_field()}}
            <!-- TITLE -->
            <div class="form-group">
                <label class="control-label">Marketplace Title</label>
            </div>
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Marketplace Title">
            </div>
            <!-- TYPE -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Marketplace</button>
            </div>
        </form>
    </div>
    <div class="col-md-9">
        
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('bower_components/Dropzone/dropzone.js')}}"></script>
@endsection