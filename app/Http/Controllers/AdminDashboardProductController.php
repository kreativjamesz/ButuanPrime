<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marketplace;
use App\Category;

class AdminDashboardProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketplaces = Marketplace::pluck('title','id');
        $categories = Category::pluck('title','id');
        return view('admindashboard.product.index',compact('marketplaces','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketplaces = Marketplace::all();
        $categories = Category::all();
        return view('admindashboard.product.create',compact('marketplaces','categories'));
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
        ]);

        $property = new Product();
        $property->title = $request->title;
        $property->save();

        Session::flash('success', 'Successfully created the new '. $property->title . ' role in the database.');
        return redirect()->route('product.show', $property->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();
        return redirect()->route('product.show')->withPost($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
