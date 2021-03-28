<?php

namespace App\Http\Controllers\Front;

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\beSponsorRequest;
use App\Http\Requests\exhibitorReservationRequest;
use App\Http\Requests\MessageRequest;
use App\Models\Hall;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Exhibitor;
use App\Models\Sponsor;
use Intervention\Image\ImageManagerStatic as Image;

use DB;
class FrontController extends Controller
{
    //return the index page
    public function index(){
        $active_exhibitors = Exhibitor::with('wing')->where('status',1)->paginate(12);
        $active_sponsors = Sponsor::where('status',1)->get();
        $golden_sponsors = Sponsor::where('status',1)->where('sponsorship_type','راعي ذهبي')->get();
        $diamond_sponsors = Sponsor::where('status',1)->where('sponsorship_type','راعي ماسي')->get();

        $posts = Post::orderBy("created_at","desc")->limit(5)->get();

        return view('front.index',compact('active_exhibitors','posts','active_sponsors','golden_sponsors','diamond_sponsors'));
    }

    //return exhibit page
    public function exhibit(){
        $active_exhibitors = Exhibitor::with('wing')->where('status',1)->get();
        $halls = Hall::get();
        return view('front.exhibit',compact('active_exhibitors','halls'));
    }

    //return sponsors page
    public function sponsors(){
        $active_sponsors = Sponsor::where('status',1)->get();
        $golden_sponsors = Sponsor::where('status',1)->where('sponsorship_type','راعي ذهبي')->get();
        $diamond_sponsors = Sponsor::where('status',1)->where('sponsorship_type','راعي ماسي')->get();

        return view('front.sponsors',compact('golden_sponsors','diamond_sponsors','active_sponsors'));
    }

    //return post page
    public function posts(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('front.posts',compact('posts'));
    }

    //view post
    public function singlePost($id){
        $post = Post::find($id);
        if($post){
            return view('front.single-post',compact('post'));
        }else{
            return redirect()->back();
        }

    }
    //exhibitors reservation
    public function exhibitorReservation(exhibitorReservationRequest $request)
    {
        $check_wing = Exhibitor::where('wing','=',$request->wing)->where('status','=',1)->first();
        //dd($check_wing);
        if($check_wing){
            $this->validate($request,[
                'wing' => 'unique:exhibitors'
            ]);
        }
    /*
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $name = time().'.'.$logo->getClientOriginalExtension();
            $destinationPath = public_path('/admin/uploads/exhibitors/logos/');
            $logo->move($destinationPath, $name);
            //$request->merge(['logo' => $name]);
        }*/
        if($request->hasFile('logo')) {

            $logo       = $request->file('logo');
            $filename    = time().'.'.$logo->getClientOriginalName();
            $image_resize = Image::make($logo->getRealPath());
            $image_resize->resize(150, 70);
            $destinationPath = public_path('/uploads/exhibitors/logos/');
            $image_resize->save($destinationPath.$filename);


            //$name = time().'.'.$image->getClientOriginalExtension();
            //$destinationPath = public_path('/uploads/ads');
            //$imagePath = $destinationPath. "/".  $name;
            //$file->move($destinationPath,$name);


        }


        $wing_type = $request->input('wing_type');
        $area = $request->input('area');
        $total_amount = 0;
        if($wing_type == 1){
            $total_amount = $area*6500;
        }else{
            $total_amount = $area*6000;
        }

        $exhibitor = new Exhibitor();
        $exhibitor->hall = $request->input('hall');
        $exhibitor->wing = $request->input('wing');
        $exhibitor->wing_type = $request->input('wing_type');
        $exhibitor->area = $request->input('area');
        $exhibitor->ammount = $total_amount;
        $exhibitor->company = $request->input('company');
        $exhibitor->work_nature = $request->input('work_nature');
        $exhibitor->logo = $filename;
        $exhibitor->address = $request->input('address');
        $exhibitor->name = $request->input('name');
        $exhibitor->phone = $request->input('phone');
        $exhibitor->email = $request->input('email');
        $exhibitor->save();
        return redirect()->back()->with(['success'=> __('pages.sub-success')]);

    }

    public function getWings(Request $request){
        if($request->ajax()){
            $output = "";
            $data = DB::table('wings')->where('hall_id','=',$request->hall_id)->get();
            $count = $data->count();
            if($count > 0){
                if(\Lang::getLocale() == 'ar'){
                    foreach($data as $row){
                        $output .= '<option value='.$row->id.'>'.$row->name.'</option>';
                    }
    
                }else{
                    foreach($data as $row){
                        $output .= '<option value='.$row->id.'>'.$row->name_en.'</option>';
                    }
                }
                
            }else{
                $output .= '<option value="none" selected>اختار الجناح ...</option>';
            }

            return Response($output);
        }
    }

    public function beSponsor(beSponsorRequest $request){

        if($request->hasFile('logo')) {

            $logo       = $request->file('logo');
            $filename    = time().'.'.$logo->getClientOriginalName();
            $image_resize = Image::make($logo->getRealPath());
            $image_resize->resize(150, 70);
            $destinationPath = public_path('/uploads/sponsors/logos/');
            $image_resize->save($destinationPath.$filename);
        }

        $sponsor = new Sponsor();
        $sponsor->sponsorship_type = $request->input('sponsorship_type');
        $sponsor->company = $request->input('company');
        $sponsor->work_nature = $request->input('work_nature');
        $sponsor->logo = $filename;
        $sponsor->address = $request->input('address');
        $sponsor->name = $request->input('name');
        $sponsor->phone = $request->input('phone');
        $sponsor->email = $request->input('email');
        $sponsor->save();
        return redirect()->back()->with(['success'=> __('pages.sub-success')]);

    }

    public function sendMessage(MessageRequest $request){
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->phone = $request->input('phone');
        $message->msg = $request->input('msg');
        $message->save();
        return redirect()->back()->with(['success'=> __('pages.message-success')]);

    }


}
