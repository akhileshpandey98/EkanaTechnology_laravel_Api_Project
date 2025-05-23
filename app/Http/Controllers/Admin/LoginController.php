<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
class LoginController extends Controller
{
 public function index(){
    return view('admin.login');   
 }
}