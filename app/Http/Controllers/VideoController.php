<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Createvideo;
class VideoController extends Controller
{
   public function video(){
    //  return view('video');
       $showvideo =Createvideo::all();
        return view('video',['videos'=>$showvideo]);
   }
   
}
