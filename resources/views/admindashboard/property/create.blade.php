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
        <h1>Add Listing<br><small>*Indicates important inputs</small></h1>
    </div>
    <hr>
    <div class="col-md-8 col-md-offset-2">
    <form class="form-horizontal" action="{{route('property.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
        {{csrf_field()}}
        <!-- TITLE -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Property Title</label>
            <div class="col-sm-8">
                <input type="text" name="title" class="form-control" placeholder="Property Title">
            </div>
        </div>
        <!-- TYPE -->
        <div class="form-group">
            <label class="col-sm-4 control-label">For Sale/Rent?</label>
            <div class="col-sm-8">
                <label class="radio-inline">
                  <input checked="checked" type="radio" name="type" id="typeRadio1" value="Rent">
                    Rent
                </label>
                <label class="radio-inline">
                  <input type="radio" name="type" id="typeRadio2" value="Sale">
                    Sale
                </label>
            </div>
        </div>
        <!-- PHP -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Price (IN PHP ₱)</label>
            <div class="col-sm-8">
                <input type="text" name="price" class="form-control" placeholder="Price (IN PHP ₱)">
            </div>
        </div>
        <!-- BEDROOMS -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Bedrooms</label>
            <div class="col-sm-8">
                <select name="bedrooms" id="bedrooms" class="form-control">
                    <option value="" selected="selected">-- Select Bedroom --</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7+">7+</option>
                </select>
            </div>
        </div>
        <!-- BATHROOMS -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Bathrooms</label>
            <div class="col-sm-8">
                <select name="bathrooms" id="bathrooms" class="form-control">
                    <option value="" selected="selected">-- Select Bathroom --</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Floor Area Sq/ft</label>
            <div class="col-sm-8">
                <input type="text" name="floor_area" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Min. Lot Area Sq/ft</label>
            <div class="col-sm-8">
                <input type="text" name="min_lot_area" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Upload Photos</label>
            <div class="col-sm-8">
                <input type="file" name="photos" class="form-control" multiple />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Location</label>
            <div class="col-sm-8">
                <input type="text" name="location" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Address</label>
            <div class="col-sm-8">
                <input type="text" name="address" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group">
        <label class="col-sm-4 control-label">Barangay</label>
        <div class="col-sm-8">
          <input type="text" name="barangay" class="form-control" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">City/Province</label>
        <div class="col-sm-8">
          <input type="text" name="city_prov" class="form-control" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">Country</label>
        <div class="col-sm-8">
          <input type="text" name="country" class="form-control" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">Zipcode</label>
        <div class="col-sm-8">
          <input type="text" name="zip" class="form-control" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">Property Description</label>
        <div class="col-sm-8">
          <textarea name="`description" class="form-control" placeholder=""></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <div class="checkbox">
            <label>
              <input type="checkbox">
              Yes ‚ feature this listing. </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <button type="submit" class="btn btn-lg btn-primary">Submit Property</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('bower_components/Dropzone/dropzone.js')}}"></script>
@endsection