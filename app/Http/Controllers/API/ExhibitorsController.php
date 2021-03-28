<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Exhibitor;
use App\Models\Hall;
use Illuminate\Http\Request;
use PDF;
class ExhibitorsController extends Controller
{
    public function index(){
        $exhibitors = Exhibitor::with('hall')->with('wing')->orderBy('created_at','desc')->get();
        return response()->json($exhibitors);
    }

    //activate reservation
    public function activateReservation(Request $request){
        $exhibitor = Exhibitor::find($request->id);
        if($exhibitor){
            $exhibitor->status = 1;
            $exhibitor->save();
            $data = 'تم تفعيل الحجز بنجاح';
        }else{
            $data = 'عفوا حدث خطا ما الرجاء المحاولة لاحقا';
        }
        return response()->json($data);
    }

    //deactivate reservation
    public function deactivateReservation(Request $request){
        $exhibitor = Exhibitor::find($request->id);
        if($exhibitor){
            $exhibitor->status = 0;
            $exhibitor->save();
            $data = 'تم الغاء تفعيل الحجز بنجاح';
        }else{
            $data = 'عفوا حدث خطا ما الرجاء المحاولة لاحقا';
        }
        return response()->json($data);
    }

    //delete exhibitor
    public function deleteExhibitor(Request $request){
        $exhibitor = Exhibitor::find($request->id);
        $exhibitor->delete();
        $message = "تم الحذف بنجاح";
        return response()->json($message);
    }

    //get active exhibitors
    public function activeExhibitors(){
        $exhibitors = Exhibitor::with(['hall','wing'])->active()->get();
        return response()->json($exhibitors);
    }

    //get inactive exhibitors
    public function inactiveExhibitors(){
        $exhibitors = Exhibitor::with(['hall','wing'])->inactive()->get();
        return response()->json($exhibitors);
    }

   
}
