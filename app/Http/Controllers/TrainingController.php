<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
   public function summerTraining(){
    return view('summerTraining');
   }
   public function vocationalTraining(){
    return view('vocationalTraining');
   }
   public function winterTraining(){
    return view('winterTraining');
   }
   public function industrailTraining(){
    return view('industrailTraining');
   }
   public function apprenticeshipTraining(){
    return view('apprenticeshipTraining');
   }
   public function internshipTraining(){
    return view('internshipTraining');
   }
   public function projectTraining(){
    return view('projectTraining');
   }
   public function syllabusTraining(){
    return view('syllabusTraining');
   }
}
