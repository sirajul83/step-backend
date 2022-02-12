<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Experience;
use DB;

class ExperienceController extends Controller
{
    public function index(){
        $experience_info = Experience::orderBy('id', 'DESC')->get();
        return view('experience.experience_list', compact('experience_info'));
  
    }
    public function create(){
        return view('experience.experience_create');
  
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        
        $experience_data = new Experience();

        $experience_data->title       = $request->title;
        $experience_data->value       = $request->value;
        $experience_data->is_active   = 1;
        $experience_data->created_by  = Auth::user()->id;
        $experience_data->created_ip  = request()->ip();
        $experience_data->created_at  = date('Y-m-d H:i:s');

        $response = $experience_data->save();
        if($response){
            return redirect()->route('experience.list')->with('flash.message', 'Experience Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('experience.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }
    public function edit($id){
        $experience_info = Experience::find($id);
        return view('experience.experience_edit', compact('experience_info'));
  
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        
        $experience_data  =  Experience::find($id);

        $experience_data->title       = $request->title;
        $experience_data->value       = $request->value;
        $experience_data->is_active   = 1;
        $experience_data->created_by  = Auth::user()->id;
        $experience_data->created_ip  = request()->ip();
        $experience_data->created_at  = date('Y-m-d H:i:s');

        $response = $experience_data->save();
        if($response){
            return redirect()->route('experience.list')->with('flash.message', 'Experience Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('experience.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }
    public function destroy($id)
    {
        $experience_info =  Experience::find($id);
        $response        = $experience_info->delete();
        if($response){
            return redirect()->route('experience.list')->with('flash.message', 'Experience Deleted Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('experience.list')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    // API data send function 
    public function experience(){
        $experience_info =  Experience::all();
        return response()->json([
            'status'=> 200,
            "data"  => $experience_info,
        ]);
    }

}
