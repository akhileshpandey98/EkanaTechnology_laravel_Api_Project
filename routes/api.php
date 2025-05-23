<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\CreatevideoController;
use App\Http\Controllers\Admin\AddplacementstudentController;
use App\Http\Controllers\Admin\AddSliderController;
use App\Http\Controllers\Admin\CreatetrainingController;
use App\Http\Controllers\admin\ProfileController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/test',function(){
//     return ["name"=>"Khurshed Alam","Branch"=>"Computer Science And Engineering"];
// });

/*** The Register Fetch API DATA */
Route::get('registers',[RegisterController::class,'student']);
Route::post('add-student',[RegisterController::class,'addstudents']);
Route::get('deldata/{id}',[RegisterController::class,'delapi']);
Route::put('update/{id}',[RegisterController::class,'updateapi']);
Route::get('searcstudentname/{name}',[RegisterController::class,'searchingstudent']);

/*** The Feedback Fetch API DATA */
Route::get('feedback',[FeedbackController::class,'apifetch']);
Route::post('insertfeedback',[FeedbackController::class,'insert_data_api']);
Route::get('delete/{id}',[FeedbackController::class,'delete_data_api']);
Route::put('update/{id}',[FeedbackController::class,'update_date_api']);
Route::get('searchname/{name}',[FeedbackController::class,'seachingsdata']);

/*** The Contact Fetch API Data */
Route::get('show-data',[ContactController::class,'getalldata']);
Route::post('inst-data',[ContactController::class,'inscontat']);
Route::get('del-data/{id}',[ContactController::class,'delcontact']);
Route::put('updatedata/{id}',[ContactController::class,'update']);
Route::get('searcdata/{name}',[ContactController::class,'searcdata']);

/***The Video Fetch API Data */
Route::get('show-video',[CreatevideoController::class,'show_video']);
Route::post('inst-video',[CreatevideoController::class,'newvideo']);
Route::get('del-video/{id}',[CreatevideoController::class,'del_video']);
Route::put('update-video/{id}',[CreatevideoController::class,'update_video']);

/*** The Placement all data */
Route::get('displayrecord',[AddplacementstudentController::class,'getdata']);
Route::post('newinstdata',[AddplacementstudentController::class,'inst_record']);
Route::get('delterecords/{id}',[AddplacementstudentController::class,'del_data']);
Route::put('updaterecords/{id}',[AddplacementstudentController::class,'update_records']);
Route::get('searchrecord/{studentname}',[AddplacementstudentController::class,'searching_records']);

/** The Addslider All data*/
Route::get('displayslider',[AddSliderController::class,'displayslider']);
Route::post('insertslider',[AddSliderController::class,'newsliderinst']);
Route::get('deleteslider/{id}',[AddSliderController::class,'delete_slider']);
Route::put('updateslider/{id}',[AddSliderController::class,'update_slider']);

/** The TrainingImage Get All DATA
 * 
 */
Route::get('allgetimage',[CreatetrainingController::class,'gettrainingimage']);
Route::post('addtrainingimage',[CreatetrainingController::class,'newtrainingimage']);
Route::get('deltrainingimg/{id}',[CreatetrainingController::class,'delete_trainig_image']);
Route::put('updatetrainingimg/{id}',[CreatetrainingController::class,'update_training_img']);

/*** The Get Profile for API */
Route::get('getprofiledata',[ProfileController::class,'getprofile']);
Route::post('newprofile',[ProfileController::class,'addnewprofile']);
Route::get('deleteprofile/{id}',[ProfileController::class,'delete_profile']);
Route::put('updateprofile/{id}',[ProfileController::class,'update_profile']);

