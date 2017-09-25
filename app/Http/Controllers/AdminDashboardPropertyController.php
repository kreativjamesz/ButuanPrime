<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admindashboard.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admindashboard.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'type'=>'required',
            'price'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'floor_area'=>'required',
            'min_lot_area'=>'required',
            'status'=>'required',
            'photos'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'location'=>'required',
            'address'=>'required',
            'barangay'=>'required',
            'city_prov'=>'required',
            'country'=>'required',
            'zip'=>'required',
            'description'=>'required',
        ]);


        $property = new Property();
        $property->title       = $request->title;
        $property->type         = $request->type;
        $property->price        = $request->price;
        $property->bedrooms     = $request->bedrooms;
        $property->bathrooms    = $request->bathrooms;
        $property->floor_area   = $request->floor_area;
        $property->min_lot_area = $request->min_lot_area;
        $property->status       = $request->status;
        $property = $request->file('photos');
        $photoname = time().'.'.$request->image->getClientOriginalExtension();
        $property->move(public_path('img/listing'), $photoname);
        $property->photos       = $request->photos;
        $property->location     = $request->location;
        $property->address      = $request->address;
        $property->barangay     = $request->barangay;
        $property->city_prov    = $request->name;
        $property->country      = $request->country;
        $property->zip          = $request->zip;
        $property->description  = $request->description;
        $property->save();

        Session::flash('success', 'Successfully created the new '. $property->title . ' role in the database.');
        return redirect()->route('property.show', $property->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admindashboard.property.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admindashboard.property.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
