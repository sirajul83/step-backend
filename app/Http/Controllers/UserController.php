<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(){
        $user_list = User::orderBy('id', 'DESC')->get();
        return view('user.user_list', compact('user_list'));
    }
    public function create(){
        return view('user.user_create');
    }
    public function store(Request $request){

        $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|unique:users|max:255',
            'password' => 'required|min:8',
        ]);

        $data = [
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'created_by' => Auth::user()->id,
            'created_ip' => request()->ip(),
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $response = DB::table('users')->insert($data);

        if($response){
            return redirect()->route('user.list')->with('flash.message', 'User Added Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('user.create')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }
    public function edit($id){
        $user_info = User::find($id);
        return view('user.user_edit', compact('user_info'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        $data = [
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'updated_by' => Auth::user()->id,
            'updated_ip' => request()->ip(),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $response = DB::table('users')->where('id', '=', $id)->update($data);

        if($response){
            return redirect()->route('user.list')->with('flash.message', 'User Updated Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('user.update')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }

    public function delete($id){
        $user_info = User::find($id);
        $delete    = $user_info->delete();

        if($delete){
            return redirect()->route('user.list')->with('flash.message', 'User Deleted Sucessfully!')->with('flash.class', 'success');
        }else{
            return redirect()->route('user.list')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
    }
    public function profile(){
        $id = Auth::user()->id;
        $user_info = User::find($id);
        return view('user.user_profile', compact('user_info'));
    }
    public function change_password(){

        return view("user.user_password_change");
    }
    public function change_password_store(Request $request){
        $id = Auth::user()->id;
        $user_info = User::findOrFail($id);

        if (Hash::check($request->old_password, $user_info->password)) { 

            $validated = $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
    
            $user_data =  [
                'password'   => Hash::make($request['password']),
                'updated_by' => Auth::user()->id,
                'updated_ip' => request()->ip(),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $save_user = DB::table('users')->where('id', $id)->update($user_data);

            if($save_user){
                return redirect()->route('user.profile')->with('flash.message', 'Password Change Sucessfully')->with('flash.class', 'success');
            }else{
                return redirect()->route('user.change_password')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
            }

        }else{
           
            return redirect()->route('changePassword')->with('flash.message', 'Password does not match. Please Try Again!')->with('flash.class', 'danger');
        }

    }

}
