<?php

namespace App\Http\Controllers;
use App\Models\Placementrecord;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
   public function placement(){
   //  return view('placement');
     
      $studentData =Placementrecord::all();
      return view('placement',['student'=>$studentData]);
   }
}
