<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\WebContent;
use DB;

class WebContentController extends Controller
{
    public function index()
    {
        $web_content_info = WebContent::orderBy('id', 'DESC')->get();
        return view("web_content.web_content_list", compact('web_content_info'));
    }

    public function create()
    {
        return view("web_content.web_content_create");
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'short_title' => 'required',
        ]);
         
        // web content img
        if(isset($request->image)){
            $imageName = 'web_content_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = "default.jpg";
          }

        $web_content_data = new WebContent();

        $web_content_data->short_title = $request->short_title;
        $web_content_data->title       = $request->title;
        $web_content_data->title       = $request->title;
        $web_content_data->type        = $request->type;
        $web_content_data->description = $request->description;
        $web_content_data->image       = $request->type == 1 ? $image : NULL;
        $web_content_data->is_active   = 1;
        $web_content_data->created_by  = Auth::user()->id;
        $web_content_data->created_ip  = request()->ip();
        $web_content_data->created_at  = date('Y-m-d H:i:s');

        $response = $web_content_data->save();
        if($response){
            return redirect()->route('web_content.list')->with('flash.message', 'Web Content Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('web_content.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    public function edit($id)
    {
        $web_content_info = WebContent::find($id);
        return view("web_content.web_content_edit", compact('web_content_info'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'short_title' => 'required',
        ]);
         
        // web content img
        if(isset($request->image)){
            $imageName = 'web_content_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = $request->pre_image;
          }

        $web_content_data =  WebContent::find($id);

        $web_content_data->short_title = $request->short_title;
        $web_content_data->title       = $request->title;
        $web_content_data->title       = $request->title;
        $web_content_data->type        = $request->type;
        $web_content_data->description = $request->description;
        $web_content_data->image       = $request->type == 1 ? $image : NULL;
        $web_content_data->is_active   = 1;
        $web_content_data->updated_by  = Auth::user()->id;
        $web_content_data->updated_ip  = request()->ip();
        $web_content_data->updated_at  = date('Y-m-d H:i:s');

        $response = $web_content_data->save();
        if($response){
            return redirect()->route('web_content.list')->with('flash.message', 'Web Content Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('web_content.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

   
    public function destroy($id)
    {
        $web_content_info =  WebContent::find($id);
        $response         = $web_content_info->delete();

        if($response){
            return redirect()->route('web_content.list')->with('flash.message', 'Web Content Delated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('web_content.list')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    // API data send
    public function serviceHeading(){
        $service_heading = WebContent::where('type', 2)->first();
        return response()->json([
            'status'=> 200,
            "data"  => $service_heading,
        ]);
    }

    public function portfolioHeading(){
        $portfolio_heading = WebContent::where('type', 5)->first();
        return response()->json([
            'status'=> 200,
            "data"  => $portfolio_heading,
        ]);
    }
    public function teamHeading(){
        $team_heading = WebContent::where('type', 4)->first();
        return response()->json([
            'status'=> 200,
            "data"  => $team_heading,
        ]);
    }
    public function aboutHeading(){
        $about_heading = WebContent::where('type', 1)->first();
        return response()->json([
            'status'=> 200,
            "data"  => $about_heading,
        ]);
    }
    public function experienceHeading(){
        $experience_heading = WebContent::where('type', 3)->first();
        return response()->json([
            'status'=> 200,
            "data"  => $experience_heading,
        ]);
    }
}
