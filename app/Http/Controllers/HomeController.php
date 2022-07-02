<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatestBlog;

class HomeController extends Controller
{
   public function blogpage(){

        $blog=LatestBlog::all();
       return view('frontend.main',['blog'=>$blog]);
   }

   public function orderpage(){
    
    return view('frontend.order');
}


   
  
   

}
