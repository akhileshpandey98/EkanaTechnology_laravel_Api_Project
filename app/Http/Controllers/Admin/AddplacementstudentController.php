<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Placementrecord;
use Illuminate\Support\Facades\Validator;
class AddplacementstudentController extends Controller
{
    public function index(){
        return view('admin.add_placementstudent');
    }
    /*** The Crud API Start */
         /** Display All Data  */
       public function getdata(){
          return Placementrecord::all();
       }
       /***New data Insert Queries */
       public function inst_record(Request $request){
             /** Validation start  */
             $rules=array(
                'studentpic'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
                'studentname'=>'required|string|max:250',
                'companyname'=>'required|string|max:250',
                'collegname'=>'required|string|max:250',
                'description'=>'required|string|max:1000',
             );
             $validation=Validator::make($request->all(), $rules);
             if($validation->fails()){
                return $validation->errors();
             }else{
                $file=$request->file('studentpic');
                $path =$request->studentpic->store('placement','public');
                Placementrecord::create([
                 'studentpic'=>$path,
                 'studentname'=>$request->studentname,
                 'companyname'=>$request->companyname,
                 'collegname'=>$request->collegname,
                 'description'=>$request->description,
                ]);
                return "Insert  successfully";
             }
       }
      /*** The Data Delete Queries */
      public function del_data($id){
               $placement_recourds=Placementrecord::destroy($id);
               if($placement_recourds){
                   return "Deleted Successfully";
               }else{
                return "Try Again";
               }
      }
      /*** The Data Update Queries */
      public function update_records(Request $request, $id){
               $placement_recourds=Placementrecord::findOrFail($id);
               $placement_recourds->update($request->all());
               if($placement_recourds){
                       return "Update Successfully";
               }else{
                return "Try Again";
               }
      }
      /*** The Searching data used for API */
      public function searching_records($studentname){
        $searching_records=Placementrecord::where('studentname','like',"%$studentname%")->get();
        if($searching_records){
              return $searching_records;
        }else{
            return "No data found";
        }
      }     

    /*** The Crud API Ends */


    public function placement(Request $request){
            // dd($request);
            $request->validate([
                'studentpic'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
                'studentname'=>'required|string|max:100',
                'companyname'=>'required|string|max:120',
                'collegname'=>'required|string|max:120',
                'description'=>'required|string|max:1000',
            ]);
            // dd($checkvalid);
            $file=$request->file('studentpic');
            $path =$request->studentpic->store('placement','public');
            // dd($path);
            Placementrecord::create([
                'studentpic'=>$path,
                'studentname'=>$request->studentname,
                'companyname' =>$request->companyname,
                'collegname'=>$request->collegname,
                'description'=>$request->description,
            ]);
            return redirect('add_student')->with('success','Student Placement Successfully');
    }
    public function showplacementstudent(){
        $studentData =Placementrecord::all();
        return view('admin.show_student',['student'=>$studentData]);
    }
    public function deletestudents($id){
            $studentdel =Placementrecord::destroy($id);
            // dd($studentdel);
            if($studentdel){
                return redirect('show_student')->with('success','Delete Successfully');
            }else{
                return "Try Again";
            }
    }
    /*****Searching Section Start */
    public function search_students(Request $request){
                // return $request->search;
                $studentData= Placementrecord::where('studentname','like',"%$request->search%")
                  ->orWhere('collegname','like',"%$request->search%")
                  ->get();
                  return view('admin.show_student',['student'=>$studentData,'search'=>$request->search]);
    }  

    /*** The Update Query */
    public function edit($id){
         $students=Placementrecord::findorFail($id);
         return view('admin.updateplacement',compact('students'));
    }
    public function  updateformshow(Request $request,$id){
        $request->validate([
            'studentpic'=>'required|mimes:jpg,png,svg,jpeg,gif|max:2048',
            'studentname'=>'required|string|max:100',
            'companyname'=>'required|string|max:120',
            'collegname'=>'required|string|max:120',
            'description'=>'required|string|max:1000',
        ]);
        $students=Placementrecord::findorFail($id);
        $file=$request->file('studentpic');
        $path =$request->studentpic->store('placement','public');
        $students->update([
            'studentpic'=>$path,
            'studentname'=>$request->input('studentname'),
            'companyname'=>$request->input('companyname'),
            'collegename'=>$request->input('collegename'),
            'description'=>$request->input('description'),
        ]);
        return redirect()->route('show_student')->with('success','Update successfully');
    }
}
