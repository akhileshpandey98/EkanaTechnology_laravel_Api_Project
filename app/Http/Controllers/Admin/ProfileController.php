<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.director_profile');
    }
    /***The Testing for API  start*/
           public function getprofile(){
            return Profile::all();
           }
           public function addnewprofile(Request $request){
                     /** The validation */
                     $rules=array(
                        'profile'=>'required|mimes:png,jpg,jpeg,svg|max:2048',
                        'name'=>'required|string|max:250',
                        'companyname'=>'required|string|max:250',
                        'phone' => 'required|string|digits:10',
                        'email'=>'required|string|max:250',
                        'location'=>'required|string|max:250',
                     );
                   $validation=Validator::make($request->all(), $rules);
                   if($validation->fails()){
                    return $validation->errors();
                   }else{
                    $file=$request->file('profile');
                    $path=$request->profile->store('profileimage','public');
                    Profile::create([
                      'profile'=>$path,
                      'name'=>$request->name,
                      'companyname'=>$request->companyname,
                      'phone'=>$request->phone,
                      'email'=>$request->email,
                      'location'=>$request->location,
                     ]);
                       return "Profile Uploaded Successfully";
                   }   
           }
           public function delete_profile($id){
                       $deleteprofile=Profile::destroy($id);
                       if($deleteprofile){
                          return "Your Profile Deleted Successfully";
                       }
           }
           public function update_profile(Request $request, $id){
                 $updateprofile=Profile::findOrFail($id);
                 $updateprofile->update($request->all());
                 if($updateprofile){
                    return "Update Your Profile Successfully";
                 }else{
                    return "Try Again";
                 }
           }
    /***The Testing for API  ends*/

    public function createprofile(Request $request){
             $request->validate([
                'profile'=>'required|mimes:png,jpg,jpeg,svg|max:2048',
                'name'=>'required|string|max:250',
                'companyname'=>'required|string|max:250',
                'phone' => 'required|string|digits:10',
                'email'=>'required|string|max:250',
                'location'=>'required|string|max:250',
              ]);
             $file=$request->file('profile');
             $path=$request->profile->store('profileimage','public');
             Profile::create([
                 'profile'=>$path,
                 'name'=>$request->name,
                 'companyname'=>$request->companyname,
                 'phone'=>$request->phone,
                 'email'=>$request->email,
                 'location'=>$request->location,
             ]);
             return redirect('/profilelock')->name('success','Successfully Profile');
    }
    public function showprofile(){
         $showprofiles= Profile::all();
         return view('admin.show_profile',['profiles'=>$showprofiles]);
    }
}
