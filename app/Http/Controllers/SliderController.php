<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Slider;
use DB;

class SliderController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider_info = Slider::orderBy('id', 'DESC')->get();
        return view("slider.slider_list", compact('slider_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("slider.slider_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'short_title' => 'required',
        ]);
         
        // slider img
        if(isset($request->image)){
            $imageName = 'slider_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = "default.jpg";
          }

        $slider_data = new Slider();

        $slider_data->short_title = $request->short_title;
        $slider_data->title       = $request->title;
        $slider_data->description = $request->description;
        $slider_data->position    = $request->position;
        $slider_data->image       = $image;
        $slider_data->is_active   = 1;
        $slider_data->created_by  = Auth::user()->id;
        $slider_data->created_ip  = request()->ip();
        $slider_data->created_at  = date('Y-m-d H:i:s');

        $response = $slider_data->save();
        if($response){
            return redirect()->route('slider.list')->with('flash.message', 'Slider Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('slider.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }

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
        $slider_info = Slider::find($id);
        return view("slider.slider_edit", compact('slider_info'));
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
        $request->validate([
            'short_title' => 'required',
        ]);
         
        // slider img
        if(isset($request->image)){
            $imageName = 'slider_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = $request->pre_image;
          }

        $slider_data =  Slider::find($id);

        $slider_data->short_title = $request->short_title;
        $slider_data->title       = $request->title;
        $slider_data->description = $request->description;
        $slider_data->position    = $request->position;
        $slider_data->image       = $image;
        $slider_data->is_active   = 1;
        $slider_data->created_by  = Auth::user()->id;
        $slider_data->created_ip  = request()->ip();
        $slider_data->created_at  = date('Y-m-d H:i:s');

        $response = $slider_data->save();
        if($response){
            return redirect()->route('slider.list')->with('flash.message', 'Slider Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('slider.edit')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider_info =  Slider::find($id);
        $response    = $slider_info->delete();
        if($response){
            return redirect()->route('slider.list')->with('flash.message', 'Slider Deleted Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('slider.list')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

     // API data send function 
     public function slider(){
        $slider_info =  Slider::orderBy('position', 'ASC')->get();
        return response()->json([
            'status'=> 200,
            "data"  => $slider_info,
        ]);
    }
}
