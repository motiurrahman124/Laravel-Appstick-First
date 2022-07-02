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

        if(!file_exists(public_path('images')))
        {
            mkdir(public_path('images'),0777,true);
        }

        $image=$request->image;
        $name=$image->getClientOriginalName();
        $imagename=time()."_".$name;
        $destination=public_path('images');
        $image->move($destination,$imagename);
        
        $data['image']='images/'.$imagename;
        $data['author']=$request->x;
        $data['title']=$request->title;
        $data['description']=$request->description;

        LatestBlog::create($data);

      return redirect()->route('viewData');
       
    }
    public function viewData(){
        $data=LatestBlog::all();
        return view('backend.blog.viewdata',['x' => $data]);
    }
    

    public function data_delete($id){

        // $data=LatestBlog::where($id,'id')->first();
        // $data->delete();

        $data=LatestBlog::where(['id'=>$id])->first();

        if($data)
        {
            $data->delete();
            return redirect()->route('viewData');
        }
    }

    public function data_update($id){
        $var=LatestBlog::where(['id'=>$id])->first();
        if($var)
        {
            return view('backend.blog.view',['v'=>$var]);
        }
    }
    public function data_view($id){
        $var=LatestBlog::where(['id'=>$id])->first();
        if($var)
        {
            return view('backend.blog.oneview',['u'=>$var]);
        }
    }
}
