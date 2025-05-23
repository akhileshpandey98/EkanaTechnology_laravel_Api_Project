<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Addslider;
use App\Models\Createtraining;
class IndexController extends Controller
{
    public function index(){
        // return view('index');
        $showslider =Addslider::all();
        return view('index',compact('showslider'));
    }
    public function showtrainigIndex(){
        $trainingshowdata=Createtraining::all();
        // return view('index',compact('trainingshowdata'));
        dd($trainingshowdata);
        
  }  
}
