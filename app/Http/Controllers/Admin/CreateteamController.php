<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class CreateteamController extends Controller
{
    public function index(){
        return view('admin.create_team');
    }
    public function teams(Request $request){
           $request->validate([
            'file'=>'required|mimes:png,jpg,jpeg,svg|max:40000',
            'name'=>'required|string|max:255',
            'daveloper'=>'required|string|max:300',
            'experience'=>'required|string|max:255',
            'companyname'=>'required|string|max:250',
            'description'=>'required|string|max:2000',
           ]);
        // dd($validatec);
        $file=$request->file('file');
        $path=$request->file->store('teamimage','public');
        Team::create([
           'file'=>$path,
           'name'=>$request->name,
           'daveloper'=>$request->daveloper,
           'experience'=>$request->experience,
           'companyname'=>$request->companyname,
           'description'=>$request->description,

        ]);
        return redirect('add_team')->with('success','Teams Upload Successfully');
    }
    public function showteam(){
        $teamshow=Team::all();
        return view('admin.show_team',['teams'=>$teamshow]);
    }
     /*****Searching Section Start */
     public function search_team(Request $request){
        // return $request->search;
        $teamshow= Team::where('name','like',"%$request->search%")
          ->orWhere('daveloper','like',"%$request->search%")
          ->get();
          return view('admin.show_team',['teams'=>$teamshow,'search'=>$request->search]);
}  
      public function delteams($id){
                 $delteams =Team::destroy($id);
                //  dd($delteams);
                if($delteams){
                    return redirect('/show_team')->with('success','Team Profile Delete Successfully');
                }
                else{
                    return 'Try Again';
                }
      }
      /*** Update Query */
      public function editstudent(){
       
      }
}
