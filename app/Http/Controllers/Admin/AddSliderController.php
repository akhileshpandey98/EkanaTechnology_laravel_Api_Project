<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addslider;
use Illuminate\Support\Facades\Validator;
class AddSliderController extends Controller
{
    public function index(){
        // $users=Addslider::get();
        // return view('admin.add_slider',compact('users'));
          return view('admin.add_slider');
       
    }
       /*** The Testing for API  start*/
             /**================All Data Display=============== */
             public function displayslider(){
              return Addslider::all();
             }
              /** New slider Add Queries */
              public function newsliderinst(Request $request){
                       /** Validation */
                       $rules=array(
                        'slider_image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                       );
                       $validation =Validator::make($request->all(), $rules);
                       if($validation->fails()){
                        return $validation->errors();
                       }else{
                        $file=$request->file('slider_image');
                        $path =$request->slider_image->store('image','public');
                        Addslider::create([
                          'add_slider'=>$path,
                             ]);
                           return "Upload Slider Successfully";
                       }
              }
                    /*** The Delete Slider Queries */
                    public function delete_slider($id){
                           $del_slider=Addslider::destroy($id);
                           if($del_slider){
                              return "Delete Successfully";
                           }else{
                            return "Try Again";
                           }
                    }
                    /***===== The Update Queries ======*/
                    public function update_slider(Request $request, $id){
                      $update_slider=Addslider::findOrFail($id);
                      $update_slider->update($request->all());
                      if($update_slider){
                           return "Add New Slider";
                      }else{
                        return "Try again";
                      }
                    }

       /*** The Testing for API  Ends*/

    public function addslider(Request $request){
        $request->validate([
            'slider_image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
        //  dd($checkvalid);
        $file=$request->file('slider_image');
        $filename =time().'_'.$file->getClientOriginalName();
        $path =$request->slider_image->store('image','public');
        // dd($path);
        Addslider::create([
            'add_slider'=>$path,
        ]);
        return redirect('add_slider')->with('success','Image Upload Successfully');
    }
    public function showslider(){
        $showslider =Addslider::all();
        return view('admin.show_slider',['shows'=>$showslider]);
    }
    public function deletesliders($id){
              $deleteslider=Addslider::destroy($id);
                // dd($deleteslider);
              if($deleteslider){
                return redirect('show-slider')->with('success','Deleted Successfully');
              }
              else{
                return "Try Again";
              }
         }
         /***Update Queries start*/

           public function editsliders($id){
                $show =Addslider::findOrFail($id);
                return view('admin.update_slider',['uslider'=>$show]);
           }

           public function updateslider(Request $request, $id){
                  $request->validate([
                       'slider_image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
                  ]);
                  $uslider  =Addslider::findOrFail($id);
                   $file=$request->file('slider_image');
                  //  $filename =time().'_'.$file->getClientOriginalName();
                   $path =$request->slider_image->store('image','public');

                   $uslider->update([
                    'add_slider'=>$path,
                    ]);
                   return redirect()->route('admin.add_slider')->with('success','Image Update Successfully');
    
           }
}
