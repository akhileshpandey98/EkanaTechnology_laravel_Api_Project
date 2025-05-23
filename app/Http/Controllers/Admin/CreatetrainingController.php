<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Createtraining;
use Illuminate\Support\Facades\Validator;

class CreatetrainingController extends Controller
{
   public function index(){
    return view('admin.create_training');
   }
     /*** The API Fetch Data Section start */
              public function gettrainingimage(){
                  return Createtraining::all();
              }

              /**=========The new Training Image  add start*/
              public function newtrainingimage(Request $request){
                    /** The validation  */
                    $rules=array(
                        'traingpic'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
                    );
                    $validation =Validator::make($request->all(), $rules);
                    if($validation->fails()){
                      return $validation->errors();
                    }
                     $file=$request->file('traingpic');
                     $path=$request->traingpic->store('training','public');
                     Createtraining::create([
                        'traingpic'=>$path,
                        ]);
                        return "Insert Training Image";
                      }
                   /**================== Delete The Training Section  */
                   public function delete_trainig_image($id){
                         $deltrainingimg=Createtraining::destroy($id);
                         if($deltrainingimg){
                              return "New Training Image Upload Successfully";
                         }else{
                              return "Try again";
                         }
                   }
                   public function update_training_img(Request $request, $id){
                        $updatetrainingimg=Createtraining::findOrFail($id);
                        $updatetrainingimg->update($request->all());
                        if($updatetrainingimg){
                                return "Update successfully";
                        }else{
                              return "Try again";
                        }
                   }

                  /*** The API Fetch Data Section ends */

   public function Createtraining(Request $request){
              $request->validate([
                   'traingpic'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
             ]);
             $file=$request->file('traingpic');
             $path=$request->traingpic->store('training','public');
             Createtraining::create([
                   'traingpic'=>$path,
             ]);
             return redirect('add_training_program')->with('success','Upload Successfully');
   }
   public function showtraining(){
         $trainingshowdata=Createtraining::all();
         return view('admin.show_training',['trainigs'=>$trainingshowdata]);
   }
   public function deletetrainingimage($id){
           $deltrainingimage=Createtraining::destroy($id);
           if($deltrainingimage){
            return redirect('show_training_program')->with('success','Delete Successfully');
           }
   }
       /*** The Update Section  */
       public function editimage($id){
            $trainig=Createtraining::findorFail($id);
            return view('admin.create_training',compact('trainig'));
       }
        public function updateimage(Request $request, $id){
              $request->validate([
                 'traingpic'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
              ]);
              $trainig=Createtraining::findorFail($id);
              $file=$request->file('traingpic');
              $path=$request->traingpic->store('training','public');
              $trainig->update([
                   'traingpic'=>$path,
             ]);
             return redirect()->route('admin.create_training')->with('success','Image update successfully');
        }
}
