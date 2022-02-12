<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Contact;

class ContactController extends Controller
{
    // API data send function 
    public function contact(Request $request ){

        $contact_data = new  Contact();

        $contact_data->name        = $request->input('name');
        $contact_data->email       = $request->input('email');
        $contact_data->subject     = $request->input('subject');
        $contact_data->message     = $request->input('message');
        $contact_data->created_ip  = request()->ip();
        $contact_data->created_at  = date('Y-m-d H:i:s');

        $response = $contact_data->save();

        return response()->json([
            'status'  => 200,
            "message" => 'Succesfully Send',
        ]);
    }
}
