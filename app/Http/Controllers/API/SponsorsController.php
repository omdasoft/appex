<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index(){
        $sponsors = Sponsor::orderBy('created_at','desc')->get();
        return response()->json($sponsors);
    }

    //activate sponsor
    public function activateSponsor(Request $request){
        $sponsor = Sponsor::find($request->id);
        if($sponsor){
            $sponsor->status = 1;
            $sponsor->save();
            $data = 'تم تفعيل الحجز بنجاح';
        }else{
            $data = 'عفوا حدث خطا ما الرجاء المحاولة لاحقا';
        }
        return response()->json($data);
    }

    //deactivate sponsor
    public function deactivateSponsor(Request $request){
        $sponsor = Sponsor::find($request->id);
        if($sponsor){
            $sponsor->status = 0;
            $sponsor->save();
            $data = 'تم الغاء تفعيل الحجز بنجاح';
        }else{
            $data = 'عفوا حدث خطا ما الرجاء المحاولة لاحقا';
        }
        return response()->json($data);
    }

    //delete sponsor
    public function deleteSponsor(Request $request){
        $sponsor = Sponsor::find($request->id);
        if($sponsor){
            $sponsor->delete();
            $message = "sponsor has been successfully deleted";
        }else{
            $message = "sorry something went wrong";
        }

        return response()->json($message);
    }

    //get all inactive sponsors
    public function inactiveSponsors(){
        $sponsors = Sponsor::inactive()->orderBy('created_at','desc')->get();
        return response()->json($sponsors);
    }

    //get all active sponsors
    public function activeSponsors(){
        $sponsors = Sponsor::active()->orderBy('created_at','desc')->get();
        return response()->json($sponsors);
    }
}
