<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Configuration;
use DB;

class CompanyProfileController extends Controller
{
    public function index(){

        $comapny_info = DB::table('configurations')->first();
    
        return view('company_profile', compact('comapny_info'));
  
      }

      public function company_profile_save(Request $request){

        if(isset($request->logo)){
            $imageName = 'logo_'.time().'.'.$request->logo->extension();  
            $request->logo->move(public_path('assets/images'), $imageName);
            $logo = $imageName;
          }else{
            $logo = $request->pre_logo;
          }

        $company_info =  Configuration::first();
      
        if(empty($company_info)){
              $company_data =[
                "name"           => $request->name,
                "slogan"         => $request->slogan,
                "email"          => $request->email,
                "mobile_no1"     => $request->mobile_no1,
                "mobile_no2"     => $request->mobile_no2,
                "website"        => $request->website,
                "logo"           => $logo,
                "address"        => $request->address,
                "copyright_year" => $request->copyright_year,
                "facebook"       => $request->facebook,
                "twitter"        => $request->twitter,
                "linkedIn"       => $request->linkedIn,
                "youtube"        => $request->youtube,
                "is_active"      => 1,
                'created_by'     => Auth::user()->id,
                'created_ip'     => request()->ip(),
                'created_at'     => date('Y-m-d H:i:s'),
              ];

              $save = DB::table('configurations')->insert($company_data);
        }else{
            $id = $company_info->id;

            $company_data =[
                "name"           => $request->name,
                "slogan"         => $request->slogan,
                "email"          => $request->email,
                "mobile_no1"     => $request->mobile_no1,
                "mobile_no2"     => $request->mobile_no2,
                "website"        => $request->website,
                "logo"           => $logo,
                "address"        => $request->address,
                "copyright_year" => $request->copyright_year,
                "facebook"       => $request->facebook,
                "twitter"        => $request->twitter,
                "linkedIn"       => $request->linkedIn,
                "youtube"        => $request->youtube,
                "is_active"      => 1,
                'updated_by'     => Auth::user()->id,
                'updated_ip'     => request()->ip(),
                'updated_at'     => date('Y-m-d H:i:s'),
            ];

            $save = DB::table('configurations')->where('id', $id)->update($company_data);
        }
          
        if($save){
            return redirect()->route('company.profile')->with('flash.message', 'Company Profile Sucessfully Saved!')->with('flash.class', 'success');
        }else{
            return redirect()->route('company.profile')->with('flash.message', 'Somthing went to wrong!')->with('flash.class', 'danger');
        }
      }

      // API data send function 
     public function companyinfo(){
      $company_info =  Configuration::first();
      return response()->json([
          'status'=> 200,
          "data"  => $company_info,
      ]);
  }
}
