<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Portfolio;
use DB;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio_info = Portfolio::orderBy('id', 'DESC')->get();
        return view("portfolio.portfolio_list", compact('portfolio_info'));
    }

    public function create()
    {
        return view("portfolio.portfolio_create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
         
        // Portfolio img
        if(isset($request->image)){
            $imageName = 'portfolio_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = "default.jpg";
          }

        $portfolio_data = new Portfolio();

        $portfolio_data->title             = $request->title;
        $portfolio_data->short_description = $request->short_description;
        $portfolio_data->description       = $request->description;
        $portfolio_data->project_url       = $request->project_url;
        $portfolio_data->user_name         = $request->user_name;
        $portfolio_data->password          = $request->password;
        $portfolio_data->position          = $request->position;
        $portfolio_data->image             = $image;
        $portfolio_data->is_active         = 1;
        $portfolio_data->created_by        = Auth::user()->id;
        $portfolio_data->created_ip        = request()->ip();
        $portfolio_data->created_at        = date('Y-m-d H:i:s');

        $response = $portfolio_data->save();
        if($response){
            return redirect()->route('portfolio.list')->with('flash.message', 'Portfolio Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('portfolio.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    public function edit($id)
    {
        $portfolio_info = Portfolio::find($id);
        return view("portfolio.portfolio_edit", compact('portfolio_info'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
         
        // Portfolio img
        if(isset($request->image)){
            $imageName = 'portfolio_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName);
            $image = $imageName;
          }else{
            $image = $request->pre_image;
          }

        $portfolio_data =  Portfolio::find($id);

        $portfolio_data->title             = $request->title;
        $portfolio_data->short_description = $request->short_description;
        $portfolio_data->description       = $request->description;
        $portfolio_data->project_url       = $request->project_url;
        $portfolio_data->user_name         = $request->user_name;
        $portfolio_data->password          = $request->password;
        $portfolio_data->position          = $request->position;
        $portfolio_data->image             = $image;
        $portfolio_data->is_active         = 1;
        $portfolio_data->updated_by        = Auth::user()->id;
        $portfolio_data->updated_ip        = request()->ip();
        $portfolio_data->updated_at        = date('Y-m-d H:i:s');

        $response = $portfolio_data->save();
        if($response){
            return redirect()->route('portfolio.list')->with('flash.message', 'Portfolio Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('portfolio.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    public function destroy($id)
    {
        $portfolio_data =  Portfolio::find($id);
        $delete = $portfolio_data->delete();
        if($delete){
            return redirect()->route('portfolio.list')->with('flash.message', 'Portfolio Delated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('portfolio.list')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    // API data send function 
    public function portfolio(){
        $portfolio_info =  Portfolio::orderBy('position', 'ASC')->get();
        return response()->json([
            'status'=> 200,
            "data"  => $portfolio_info,
        ]);
    }
    public function portfolio_info($id){
        $portfolio_info =  Portfolio::find($id);
        return response()->json([
            'status'=> 200,
            "data"  => $portfolio_info,
        ]);
    }
}
