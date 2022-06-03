<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $data = Post::all();
        return view('home',compact('data'));
    }

    public function new(){
        // return redirect('/');
        return view('new');
    }

    public function store(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = new Post();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect('/');
        // return view('home');
    }

    public function edit($id){
      $data=Post::findorFail($id);
      // dd($data);
        return view('edit',compact('data'));
    }

    public function update(Request $request,$id){

      $validated = $request->validate([
          'title' => 'required',
          'description' => 'required',
      ]);
      $data=Post::findorFail($id);
      // dd($data);
      $data->title = $request->title;
      $data->description = $request->description;
      $data->save();
      // dd($data);
        return redirect('/');
    }

    public function delete(){
        return view('home');
    }
}
