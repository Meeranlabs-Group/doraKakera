<?php

namespace App\Http\Controllers;


use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Property;
        $post->title= $request->input('title');
        $post['property_type']=$request['property_type'];
        $post['description']=$request['description'];
        $post['price']=$request['price'];
        $post['city']=$request['city'];
        $post['address']=$request['address'];
        $post['email']=$request['email'];
        $post['number']=$request['number'];
        $post['body']=$request['body'];

// $post['Published_at']= Carbon::now();

        $post->save();

        return redirect('/');


    }


    public function show_all(){

        $property= Property::all() ;

        return view('properties',compact('property'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $posts= Property::latest('published_at')->get();



    }

    public function detail(){

        return view('propertyDetail');
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
