<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }
    /*** The Testing API Crud Start*/
          /**============== Show Data ================ */
          public function getalldata(){
              return Contact::all();
          }
          /**============ The Create Data ================= */
          public function inscontat(Request $request){
                    //  return "Contact Successfully";
                   $rules=array(
                          'name'=>"required|string|min:3|max:250",
                          'email'=>"required|string|min:3|max:250",
                          'phone'=>"required|digits:10",
                          'message'=>'required|string|min:3|max:2000'
                   );
                   $validation=Validator::make($request->all(), $rules);
                   if($validation->fails()){
                      return $validation->errors();
                   }
                   else{
                    Contact::create([
                         'name'=>$request->name,
                         'email'=>$request->email,
                         'phone'=>$request->phone,
                         'message'=>$request->message,
                    ]);
                    return "Contact successfully";
                   }
                    
          }
          /*** The Searching Api Data */
          public function searcdata($name){
            // return $name;
            $contact=Contact::where('name','like',"%$name%")->get();
            if($contact){
                return $contact;
            }else{
                return "No Data found";
            }
          }
        /***===========The Delete Data================ */
                     public function delcontact($id){
                        $del_contact=Contact::destroy($id);
                        if($del_contact){
                            return "<script>confirm('Delete Successfully')</script>";
                        }else{
                            return "Try Again";
                        }
                    }
          /***===========The Update Data Queries */
          public function update(Request $request, $id){
                        $update_contact=Contact::findorFail($id);
                        $update_contact->update($request->all());
                        if($update_contact){
                            return "Update Successfully";
                        }else{
                            return "Try Again";
                        }
          }
   /*** The Testing API Crud Ends*/

    public function index(Request $request){
            // dd($request);
         $request->validate([
                'name'=>'required|string|max:250',
                'email'=>'required|email',
                'phone'=>'required|digits:10',
                'message'=>'required|string|max:2000',
            ]);
            // dd($convalidate);
          Contact::create([
               'name'=>$request->name,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'message'=>$request->message,
            ]);
            // dd($data);
            return redirect('/contact')->with('success','Contact Successfully');
    }
    public function contactlist(){
          $contactdata=Contact::all();
          return view('admin.contactlist',['contactlist'=>$contactdata]);
    }
    public function delcontactdata($id){
         $delcontact =Contact::destroy($id);
         if($delcontact){
                 return redirect('contact_list')->with('success','Data Deleted Successfully');
         }
         else{
            return 'Try Again';
         }
    }
    /*** The Searching Data  */
    public function serach_contact(Request $request){
             $contactdata=Contact::where('name','like',"%$request->search%")
             ->orWhere('phone','like',"%$request->search")
             ->get();
             return view('admin.contactlist',['contactlist'=>$contactdata,'search'=>$request->search]);
    }
}
