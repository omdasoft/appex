<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PostsController extends Controller
{
    //return post index page
    public function index(){
        return view('admin.posts.index');
    }

    public function create(){
        return view('admin.posts.create');
    }
    //return create post page
    public function post(PostRequest $request){
        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $filename    = time().'.'.$image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(800, 550);
            $image_resize->save(public_path('/uploads/posts/' .$filename));

        }
        $post = new Post();
        $post->title_ar = $request->title_ar;
        $post->title_en = $request->title_en;
        $post->post_ar = $request->post_ar;
        $post->post_en = $request->post_en;
        $post->image = $filename;
        $post->date = date('Y-m-d');
        $post->save();
        return redirect()->route('admin.posts.index');
    }
}
