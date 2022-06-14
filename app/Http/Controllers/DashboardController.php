<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatestBlog;

class DashBoardController extends Controller
{
    public function Dashboard(){
        return view('backend.main');
    }
    public function create(){
        return view('backend.blog.create');
    }
    public function dataCreate(Request $request){
        //dd($request->x);
        $data['author']=$request->x;
        $data['title']=$request->title;
        $data['description']=$request->description;

        LatestBlog::create($data);

      return redirect()->route('dashboard');
       
    }
    public function viewData(){
        $data=LatestBlog::all();
        return view('backend.blog.viewdata',['x' => $data]);
    }
}
