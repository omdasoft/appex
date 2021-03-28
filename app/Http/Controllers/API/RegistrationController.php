<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\DigitalTransformationRegistration;
class RegistrationController extends Controller
{
    public function register(Request $request){
        /*
        $this->validate($request,[
            'name' => 'required|max:200',
            'email' => 'required|email',
            'phone' => 'required|digits:10'
        ]);*/
        
    $registration = new Registration();
    $registration->name = $request->name;
    $registration->email = $request->email;
    $registration->phone = $request->phone;
    $registration->date = date('Y-m-d');
    $registration->save();
    $message = "registration done";
    return response()->json($message);
        }

        public function digitalTransformationRegister(Request $request){
            $registration = new DigitalTransformationRegistration();
            $registration->name = $request->name;
            $registration->email = $request->email;
            $registration->phone = $request->phone;
            $registration->date = date('Y-m-d');
            $registration->save();
            $message = "registration done";
            return response()->json($message);
        }
}