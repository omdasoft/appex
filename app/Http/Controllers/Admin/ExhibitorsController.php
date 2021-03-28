<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\exhibitorReservationRequest;
use App\Models\Exhibitor;
use App\Models\Hall;
use Illuminate\Http\Request;
use PDF;
class ExhibitorsController extends Controller
{
    public function index(){
        return view('admin.exhibitors.index');
    }

    public function activeExhibitors(){
        return view('admin.exhibitors.active');
    }

    public function inactiveExhibitors(){
        return view('admin.exhibitors.inactive');
    }

     //generate inactive exhibitors report
     public function inactiveExhibitorsReport(){
        $exhibitors = Exhibitor::where('status','=',0)->orderBy('created_at','desc')->with(['hall','wing'])->get();
        $pdf = PDF::loadView('admin.exhibitors.inactive_exhibitors_report', compact('exhibitors'),[],[
            'title' => 'inactive exhibitors report',
            'margin_top' => 5
        ]);
		return $pdf->stream('inactive_exhibitors.pdf');
        

    }

}
