<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
        $messages = Message::orderBy('created_at','desc')->get();
        return response()->json($messages);
    }

    public function deleteMessage(Request $request){
        $message = Message::find($request->id);
        $message->delete();
        $data = "message has been deleted successfully";
        return response()->json($data);
    }
}
