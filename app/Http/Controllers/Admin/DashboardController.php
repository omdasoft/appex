<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Exhibitor;
use App\Models\Sponsor;
use App\Models\Message;
use App\Models\Registration;
use App\Models\DigitalTransformationRegistration;

class DashboardController extends Controller
{
    public function index(){
        $inactive_exhibitors = Exhibitor::with(['hall','wing'])->inactive()->orderBy('created_at','desc')->limit(10)->get();
        $inactive_sponsors = Sponsor::inactive()->orderBy('created_at','desc')->limit(10)->get();
        $messages = Message::orderBy('created_at','desc')->limit(10)->get();
        $posts = Post::orderBy("created_at","desc")->limit(10)->get();

        return view('admin.dashboard',compact(['inactive_exhibitors','inactive_sponsors','messages','posts']));
    }

    public function visitorsRegistration(){
        $registrations = Registration::orderBy('created_at','desc')->get();
        //dd($registrations);
        return view('admin.visitors_registration',compact('registrations'));
    }

    public function deleteVisitor($id){
        $visitor = Registration::find($id)->delete();
        return redirect()->back();
    }

    public function digitalTransformationVisitorsRegistration(){
        $registrations = DigitalTransformationRegistration::orderBy('created_at','desc')->get();
        //dd($registrations);
        return view('admin.digital_transformation_registration',compact('registrations'));
    }

    public function digitalTrnsformationDeleteVisitor($id){
        DigitalTransformationRegistration::find($id)->delete();
        return redirect()->back();
    }

}
