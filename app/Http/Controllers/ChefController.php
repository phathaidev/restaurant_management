<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.chef");
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
        $data = new chef;

        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->position = $request->position;
        $data->fblink = $request->fblink;
        $data->iglink = $request->iglink;
        $data->ytlink = $request->ytlink;

        // get image 
        $image = $request->image;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->image->move("chefimage",$imagename); //for upload file
        $data->image = $imagename;

        $data ->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $chefs = chef::all();

        return view("admin.listchef", compact("chefs"));
    }

    public function showtofrontpage(){
        $chefs = chef::all();

        return view("chef", compact("chefs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chef = chef::find($id);

        return view("admin.editchef", compact("chef"));
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
        $data = chef::find($id);
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->position = $request->position;
        $data->fblink = $request->fblink;
        $data->iglink = $request->iglink;
        $data->ytlink = $request->ytlink;

        // get image 
        $image = $request->image;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->image->move("chefimage",$imagename); //for upload file
        $data->image = $imagename;

        $data ->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = chef::find($id);
        $data -> delete();
        return redirect()->back();
    }
}
