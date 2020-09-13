<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public  function allPost(){
        $posts=Post::all();
        return view('allpost',compact('posts'));
    }
    public  function createForm(){
        return view('createPost');
    }
    public function addPost(Request $request){
        $posts=Post::create($request->all());
        return redirect('allpost');
    }
    public function editPost($id){
        $posts=Post::findOrFail($id);
        return view('editPost',compact('posts'));
    }
    public function updatePost(Request $request ,$id){
        $posts=Post::findOrFail($id);
          $posts->update($request->all());
          return redirect('allpost');
    }
    public function deletePost($id){
        $posts=Post::findOrFail($id);
        $posts->delete();
        return redirect('allpost');
    }
    public function showPost($id){
        $posts=Post::select('body','id','title')->find($id);
        return view('showPost',compact('posts'));
    }
}
