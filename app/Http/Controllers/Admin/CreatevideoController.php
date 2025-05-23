<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Createvideo;
use Illuminate\Support\Facades\Validator;
class CreatevideoController extends Controller
{
      public function index(){
        return view('admin.create_video');
      }
      /***Start API testing CRUD */
               /***=============The Show Videos =====================*/
              public function show_video(){
                return Createvideo::all();
              }
            /***==================The Create new Data ===================== */
            public function newvideo(Request $request){
                    // return "Video Upload Successfully";
                   $rules=array(
                         'video'=>"required|mimes:mp4,avi,mkv|max:2048000",
                         'title'=>"required|string|min:3|max:250",
                         'videodesc'=>"required|string|min:3|max:500"
                   );
                   $validation=Validator::make($request->all(), $rules);
                   if($validation->fails()){
                    return $validation->errors();
                   }else{
                    $file =$request->file('video');
                    $path =$request->video->store('video','public');
                    Createvideo::create([
                        'video'=>$path,
                        'title'=>$request->title,
                        'videodesc'=>$request->videodesc,
                    ]);
                    return "Video Upload Successfully";
                   }
            }
            /** The Delete Queries */
            public function del_video($id){
              $del_video=Createvideo::destroy($id);
              if($del_video){
                   return "Video deleted successfully";
              }else{
                return "Try again";
              }
            }
            /***========================= The Update Query ===================== */
            public function update_video(Request $request, $id){
                    $update_videos= Createvideo::findOrFail($id);
                    $update_videos->update($request->all());
                    if($update_videos){
                         return "Video Update Successfully";
                    }else{
                      return "Try Again";
                    }
                    
                   
            }

      /*** End API testing CRUD */

      public function video(Request $request){
          $request->validate([
            'video'=>'required|mimes:mp4,avi,mkv|max:2048000', /***2GB */
            'title'=>'required|string|max:255',
            'videodesc'=>'required|string|max:500',
          ]);
        //    dd($validchect);
        $file =$request->file('video');
        $path =$request->video->store('video','public');
        Createvideo::create([
             'video'=>$path,
             'title'=>$request->title,
             'videodesc'=>$request->videodesc,
        ]);
        return redirect('add_video')->with('success','Video Upload Successfully');
      }
      public function showvideo(){
        $showvideo =Createvideo::all();
        return view('admin.show_video',['videos'=>$showvideo]);
      }
            public function deletevideo($id){
                     $delvideo=Createvideo::destroy($id);
                    //  dd($delvideo);
                    if($delvideo){
                      return redirect('show_video')->with('success','Video Deleted Successfully');
                    }
                    else{
                      return 'Try Again';
                    }
            }
            /*** The Update videos start queries */
            public function edit($id){
              $video=Createvideo::findorFail($id);
              return view('admin.update_video',['updatevideo'=>$video]);
              
            }
            // public function editvideo($id){
            //      $videoes =Createvideo::findorFail($id);
            //      return view('admin.update_video',['video'=>$videoes]);
            // }
            public function updatevideo(Request $request, $id){
                   $request->validate([
                    'video'=>'required|mimes:mp4,avi,mkv|max:2048000', /***2GB */
                    'title'=>'required|string|max:255',
                    'videodesc'=>'required|string|max:500',
                   ]); 
                   $updatevideo =Createvideo::findorFail($id);
                   $file =$request->file('video');
                   $path =$request->video->store('video','public');
                    $updatevideo->update([
                         'video'=>$path,
                         'title'=>$request->input('title'),
                         'videodesc'=>$request->input('videodesc'),
                    ]);
                    return redirect()->route('admin.create_video')->with('success','Update video successfully');
            }
}
