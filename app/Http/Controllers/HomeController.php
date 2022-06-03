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

    public function edit(){
        return view('home');
    }

    public function update(){
        return view('home');
    }

    public function delete(){
        return view('home');
    }
}
