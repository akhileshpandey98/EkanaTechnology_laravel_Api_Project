<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
   public function team(){
   //  return view('team');
       $teamshow=Team::all();
        return view('team',['teams'=>$teamshow]);
   }
}
