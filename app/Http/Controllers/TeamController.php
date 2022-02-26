<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Team;
use DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_info = Team::orderBy('id', 'DESC')->get();
        return view("team.team_member_list", compact('team_info'));
    }

    public function create()
    {
        return view("team.team_member_create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
         
        // team member img
        if(isset($request->image)){
            $imageName = 'team_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = "default.jpg";
          }

        $team_data = new Team();

        $team_data->name        = $request->name;
        $team_data->designation = $request->designation;
        $team_data->facebook    = $request->facebook;
        $team_data->twitter     = $request->twitter;
        $team_data->linkedIn    = $request->linkedIn;
        $team_data->position    = $request->position;
        $team_data->image       = $image;
        $team_data->is_active   = 1;
        $team_data->created_by  = Auth::user()->id;
        $team_data->created_ip  = request()->ip();
        $team_data->created_at  = date('Y-m-d H:i:s');

        $response = $team_data->save();
        if($response){
            return redirect()->route('team_member.list')->with('flash.message', 'Team Member Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('team_member.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team_info = Team::find($id);
        return view("team.team_member_edit", compact('team_info'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
         
        // team member img
        if(isset($request->image)){
            $imageName = 'team_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = $request->pre_image;
          }

        $team_data =  Team::find($id);

        $team_data->name        = $request->name;
        $team_data->designation = $request->designation;
        $team_data->facebook    = $request->facebook;
        $team_data->twitter     = $request->twitter;
        $team_data->linkedIn    = $request->linkedIn;
        $team_data->position    = $request->position;
        $team_data->image       = $image;
        $team_data->is_active   = 1;
        $team_data->created_by  = Auth::user()->id;
        $team_data->created_ip  = request()->ip();
        $team_data->created_at  = date('Y-m-d H:i:s');

        $response = $team_data->save();
        if($response){
            return redirect()->route('team_member.list')->with('flash.message', 'Team Member Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('team_member.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
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
        $team_info = Team::find($id);
        $response = $team_info->delete();
        if($response){
            return redirect()->route('team_member.list')->with('flash.message', 'Team Member Delated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('team_member.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

     // API data send function 
     public function team(){
        $team_info =  Team::orderBy('position', 'ASC')->get();
        return response()->json([
            'status'=> 200,
            "data"  => $team_info,
        ]);
    }
}
