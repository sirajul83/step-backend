<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Service;
use DB;


class ServiceController extends Controller
{
    
    public function index()
    {
        $service_info = Service::orderBy('id', 'DESC')->get();
        return view("service.service_list", compact('service_info'));
    }
    public function create()
    {
        return view("service.service_create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        
        $service_data = new Service();

        $service_data->title       = $request->title;
        $service_data->icon        = $request->icon;
        $service_data->description = $request->description;
        $service_data->is_active   = 1;
        $service_data->created_by  = Auth::user()->id;
        $service_data->created_ip  = request()->ip();
        $service_data->created_at  = date('Y-m-d H:i:s');

        $response = $service_data->save();
        if($response){
            return redirect()->route('service.list')->with('flash.message', 'Service Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('service.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    public function edit($id)
    {
        $service_info = Service::find($id);
        return view("service.service_edit", compact('service_info'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        
        $service_data =  Service::find($id);

        $service_data->title       = $request->title;
        $service_data->icon        = $request->icon;
        $service_data->description = $request->description;
        $service_data->is_active   = 1;
        $service_data->updated_by  = Auth::user()->id;
        $service_data->updated_ip  = request()->ip();
        $service_data->updated_at  = date('Y-m-d H:i:s');

        $response = $service_data->save();
        if($response){
            return redirect()->route('service.list')->with('flash.message', 'Service Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('service.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    public function destroy($id)
    {
        $service_info =  Service::find($id);
        $response = $service_info->delete();
        if($response){
            return redirect()->route('service.list')->with('flash.message', 'Service Delated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('service.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
        
    }

    // API data send function 
    public function service(){
        $service_info =  Service::all();
        return response()->json([
            'status'=> 200,
            "data"  => $service_info,
        ]);
       // return response()->json([$service_info]);
       // return \Response::json($service_info, 200);
    }
}
