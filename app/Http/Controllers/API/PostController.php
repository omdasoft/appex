<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //get all posts
    public function index(){
        $posts = Post::orderBy('created_at','desc')->get();
        return response()->json($posts);
    }
    //create new post
    public function create(PostRequest $request){
        if($request->get('image'))
        {
            $image = $request->get('image');
            $name = time().'.'.explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($request->get('image'))->resize(800, 550)->save(public_path('/uploads/posts/' .$name));
            $request->merge(['image' => $name]);
        }

        $post = new Post();

        $post->title_ar = $request->title_ar;
        $post->title_en = $request->title_en;
        $post->post_ar = $request->post_ar;
        $post->post_en = $request->post_en;
        $post->image = $request->image;
        $post->date = date('Y-m-d');
        $post->save();
        $message = "post created successfully";
        return response()->json($message);
    }
    //update post
    public function update(Request $request){
        $post = Post::find($request->id);
        if($request->get('image') != $post->image)
        {
            if(file_exists(public_path('admin/uploads/posts/'.$post->image))){
                unlink(public_path('admin/uploads/posts/'.$post->image));
            }
            $image = $request->get('image');
            $name = time().'.'.explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($request->get('image'))->resize(800, 550)->save(base_path('public/uploads/posts/').$name);
            $request->merge(['image' => $name]);
        }
        $post->update($request->all());
        $message = "the post has been updated successfully";
        return response()->json($message);
    }

    //delete post
    public function delete(Request $request){
        $post = Post::find($request->id);
        if(file_exists(public_path('/uploads/posts/'.$post->image))){
            unlink(public_path('/uploads/posts/'.$post->image));
        }
        $post->delete();
        $message = "post deleted successfully";
        return response()->json($message);
    }
}