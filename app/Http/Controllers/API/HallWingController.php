<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Wing;
use DB;
class HallWingController extends Controller
{
    //get halls
    public function getHalls(){
        $data = Hall::get();
        return response()->json($data);
    }

    //get wings
    public function getWings(Request $request){
       $data = Wing::where('hall_id',$request->hall_id)->get();
        return response()->json($data);
    }
}
