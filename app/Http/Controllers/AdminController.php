<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
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

    public function user()
    {
        $users = user::all();
        return view("admin.users", compact("users"));
    }
    
    public function deleteuser($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->back();

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
        //
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

    public function upload(Request $request)
    {
        $data = new food;

        $data->title = $request->title;
        $data->price = $request->price;
        // get image 
        $image = $request->image;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->image->move("foodimage",$imagename); //for upload file
        $data->image = $imagename;
        $data->description = $request->description;

        $data ->save();

        return redirect()->back();
    }
    
    public function foodtable(){
        $foods = food::all();
        return view("admin.foodlist", compact("foods"));
    }

    public function deleteFood($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editfood($id)
    {
        $data = food::find($id);

        return view("admin.editfood", compact("data"));

    }
    public function updatefood(Request $request, $id){
        $data = food::find($id);
        
        $data->title = $request->title;
        $data->price = $request->price;
        // get image 
        $image = $request->image;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->image->move("foodimage",$imagename); //for upload file
        $data->image = $imagename;
        $data->description = $request->description;

        $data ->save();

        return redirect()->back();
    }

}
