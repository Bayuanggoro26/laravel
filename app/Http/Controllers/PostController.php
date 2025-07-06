<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
       

        post::create([
            'name' => $request->name,
            'email'=> $request->email
        ]);

    return redirect('/'); 
         
    }

    public function index(){
        $posts =post::all();
        return view('home',compact('posts'));
    }

    public function edit($id){
        $post = post::findOrFail($id);
        return view('edit',compact('post'));
    }

    public function update(Request $request,$id)  {
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $posts = Post::findOrFail($id);
        $posts->name = $request->name;
        $posts->email = $request->email;
        $posts->save();
        return redirect('/');

    }

public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect('/')->with('success', 'Data berhasil dihapus!');
}

}
