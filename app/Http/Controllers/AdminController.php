<?php

namespace App\Http\Controllers;
use App\Http\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function index(){
        return view('admin.deshboard');
   }
   public function login(Request $request)
{
$request->validate([
'email' => 'required|email',
'password' => 'required',
]);
$admin = Admin::where('email', $request->email)->first();
if ($admin && Hash::check($request->password, $admin->password)) {
session(['admin' => $admin->id]);
return redirect()->route('admin.dashboard');
}
return back()->withErrors(['error' => 'Invalid credentials']);
}
public function logout()
{
session()->forget('admin');
return redirect()->route('admin.login');
}
 

}
