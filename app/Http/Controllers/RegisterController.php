<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Register;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
  /***Fetch API Data */
   public function student(){
    return Register::all();
   }

   public function addstudents(Request $request){
        // return $request->input();
        $rules=array(
               'name'=>"required|string|min:3|max:250",
               'phone'=>"required|digits:10",
               'subject'=>"required|in:Summer Training,Vocational Training,Winter Training,Industrial Training,Apprenticeship Training,Project Training",
               'technologies'=>"required|in:PHP,ASP.Net,Python,JAVA,Android,MERN,React.Native",
               'coursename'=>"required|in:B.Tech(CS),B.Tech(IT),MCA,BCA,Diploma(I.T),Diploma(CS),Diploma(PGDCA),Other",
               'optionsession'=>"required|in:First Year(1st),Second Year(2nd),Third Year(3rd),Forth Year(4th),Completed,Other",
               'fathername'=>"required|string|min:3|max:250",
               'email'=>"required|string|max:250",
               'college'=>"required|string|max:250",
               'amount'=>"required|numeric|min:1000|max:10000"
        );
        $validation=Validator::make($request->all(), $rules);
        if($validation->fails()){
          return $validation->errors();
        }else{
          Register::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'technologies'=>$request->technologies,
            'coursename'=>$request->coursename,
            'optionsession'=>$request->optionsession,
            'fathername'=>$request->fathername,
            'email'=>$request->email,
            'college'=>$request->college,
            'amount'=>$request->amount,
          ]);
          return "Register Successfully";
        }
        
     }
           /*** Searching data used for API*/  
           public function searchingstudent($name){
                 $register=Register::where('name','like',"%$name%")->get();
                 if($register){
                  return $register;
                 }else{
                  return "No data found";
                 }
           } 

       public function delapi($id){
             $del=Register::destroy($id);
             if($del){
              return "Delete Succefully ";
             }else{
              return "Try Agian";
             }
       }
       
        public function updateapi(Request $request, $id){
                    
                   $update=Register::findorFail($id);
                   $update->update([
                    'name'=>$request->input('name'),
                    'phone'=>$request->input('phone'),
                    'subject'=>$request->input('subject'),
                    'technologies'=>$request->input('technologies'),
                    'coursename'=>$request->input('coursename'),
                    'optionsession'=>$request->input('optionsession'),
                    'fathername'=>$request->input('fathername'),
                    'email'=>$request->input('email'),
                    'college'=>$request->input('college'),
                    'amount'=>$request->input('amount'),
                   ]);
                   if($update){
                    return "Update Successfully";
                   }
                   else{
                    return "Try Agian";
                   }
        }

   //** The API Ends**/


    public function index(){
        return view('register');
    }
      public function register(Request $request){
              //*** Register Form Validation  */
             $request->validate([
               'name'=>'required|string|max:255',
               'phone'=>'required|digits:10',
               'subject'=>'required|in:Summer Training,Vocational Training,Winter Training,Industrial Training,Apprenticeship Training,Project Training',
               'technologies'=>'required|in:PHP,ASP.Net,Python,JAVA,Android,MERN,React.Native',
               'coursename'=>'required|in:B.Tech(CS),B.Tech(IT),MCA,BCA,Diploma(I.T),Diploma(CS),Diploma(PGDCA),Other',
               'optionsession'=>'required|in:First Year(1st),Second Year(2nd),Third Year(3rd),Forth Year(4th),Completed,Other',
               'fathername'=>'required|string|max:250',
               'email'=>'required|email',
               'college'=>'required|string|max:3000',
               'amount'=>'required|numeric|min:500|max:10000',
              ]);
              Register::create([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'subject'=>$request->subject,
                'technologies'=>$request->technologies,
                'coursename'=>$request->coursename,
                'optionsession'=>$request->optionsession,
                'fathername'=>$request->fathername,
                'email'=>$request->email,
                'college'=>$request->college,
                'amount'=>$request->amount,
              ]);
              return redirect('register')->with('success','Registeration successfully');

      }
      public function liststudent(){
             $showstudent=Register::all();
            return view('admin.studentlist',['student'=>$showstudent]);
      }
      public function delstudent($id){
             $delstudents=Register::destroy($id);
             if($delstudents){
                 return redirect('list_student')->with('success','Data Deleted Successfully');
             }
      }
      
      /*** The Searching  */
      public function search_student(Request $request){
                  $showstudent=Register::where('name','like',"%$request->search%")
                  ->orWhere('subject','like',"%$request->search%")
                  ->get();
                   return view('admin.studentlist',['student'=>$showstudent,'search'=>$request->search]);
      }
     

      /*** Edit Queries */
      
      public function edit($id){
        $students=Register::findorfail($id);
           return view('updatestudent',compact('students'));
      }
      public function update(Request $request, $id){
        $request->validate([
          'name'=>'required|string|max:255',
          'phone'=>'required|digits:10',
          'subject'=>'required|in:Summer Training,Vocational Training,Winter Training,Industrial Training,Apprenticeship Training,Project Training',
          'technologies'=>'required|in:PHP,ASP.Net,Python,JAVA,Android,MERN,React.Native',
          'coursename'=>'required|in:B.Tech(CS),B.Tech(IT),MCA,BCA,Diploma(I.T),Diploma(CS),Diploma(PGDCA),Other',
          'optionsession'=>'required|in:First Year(1st),Second Year(2nd),Third Year(3rd),Forth Year(4th),Completed,Other',
          'fathername'=>'required|string|max:250',
          'email'=>'required|email',
          'college'=>'required|string|max:3000',
          'amount'=>'required|numeric|min:500|max:10000',
         ]);
         $students=Register::findorfail($id);
         $students->update([
              'name'=>$request->input('name'),
              'phone'=>$request->input('phone'),
              'subject'=>$request->input('subject'),
              'technologies'=>$request->input('technologies'),
              'coursename'=>$request->input('coursename'),
              'optionsession'=>$request->input('optionsession'),
              'fathername'=>$request->input('fathername'),
              'email'=>$request->input('email'),
              'college'=>$request->input('college'),
              'amount'=>$request->input('amount'),
         ]);
         return redirect()->route('/register')->with('success','Upadate Successfully');
      }
}
