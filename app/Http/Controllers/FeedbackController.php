<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
class FeedbackController extends Controller
{
    public function index(){
        return view('feedback');
    }
    /*** API Testing Section Start */
    public function apifetch(){
         return Feedback::all();
    }
    /** Insert data used for API CRUD*/
       public function insert_data_api(Request $request){
                $rules=array(
                  'name'=>"required|string|min:3|max:250",
                  'file'=>"required|mimes:jpg,png,svg,jpeg,gif|max:2048",
                  'college'=>"required|string|max:250",
                  'feedback'=>"required|string|min:3|max:2000"
                );
                $validation =Validator::make($request->all(), $rules);
                if($validation->fails()){
                  return $validation->errors();
                }
                else{
                  $file=$request->file('file');
                $path=$request->file->store('feedback','public');
                Feedback::create([
                    'name'=>$request->name,
                    'file'=>$path,
                    'college'=>$request->college,
                    'feedback'=>$request->feedback,
                ]);
                return 'Your Feedback Successfully';
                }
       }
       /*** The Searcing Data API  */
         public function seachingsdata($name){
                 $feedback =Feedback::where('name','like',"%$name%")->get();
                 if($feedback){
                  return $feedback;
                 }else{
                  return "No data found";
                 }
         }
         /*** The Delete Data used for API */
            public function delete_data_api($id){
                   $del_data_api=Feedback::destroy($id);
                   if($del_data_api){
                    return "Your Feedback deleted successfully";
                   }else{
                    return "Try Again";
                   }
            }
            /*** Display Data  */
            
           /*** The Update Data used for API */
              public function update_date_api(Request $request, $id){
                      
                      $feedback_update= Feedback::findOrFail($id);
                      $feedback_update->update($request->all());
                      if($feedback_update){
                        return "Update Successfully";
                      }
                      else{
                        return "Try again";
                      }
              }

    /*** API Testing Section Ends CRUD*/

    public function intfeedback(Request $request){
          $request->validate([
              'name'=>'required|string|max:250',
              'file'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
              'college'=>'required|string|max:250',
              'feedback'=>'required|string|max:2000',
            ]);
           
            $file=$request->file('file');
            $path=$request->file->store('feedback','public');
            Feedback::create([
                 'name'=>$request->name,
                 'file'=>$path,
                 'college'=>$request->college,
                 'feedback'=>$request->feedback,
            ]);
            return redirect('feedback')->with('success','Your beedback successfully');
    }
    public function shofeeddata(){
          $showdatafeed=Feedback::all();
          return view('admin.listfeedback',['showdatafeeds'=>$showdatafeed]);
    }
    public function delfeeddata($id){
          $deldata=Feedback::destroy($id);
          if($deldata){
            return redirect('showfeeddata')->with('success','Deleted Successfully');
          }
          return 'Try Again';
    }
    public function search_data(Request $request){
           $showdatafeed=Feedback::where('name','like',"%$request->search%")
           ->orWhere('college','like',"%$request->search%")
           ->get();
           return view('admin.listfeedback',['showdatafeeds'=>$showdatafeed,'search'=>$request->serach]);
    }


  //   // Term & Condition page
  //   public function termcondition(){
  //     return view('term-condition');
  // }
}
