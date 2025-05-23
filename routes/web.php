<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AddSliderController;
use App\Http\Controllers\Admin\AddplacementstudentController;
use App\Http\Controllers\Admin\CreatetrainingController;
use App\Http\Controllers\Admin\CreatevideoController;
use App\Http\Controllers\Admin\CreateteamController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\FeedbackController;

/** Index Controllers */
;
Route::view('/demo','demo')->name('demo');
Route::view('/term-condition','term-condition')->name('term-condition');



Route::get('/',[IndexController::class,'index'])->name('/');
Route::get('/show-slider',[IndexController::class,'index'])->name('show-slider');
Route::get('/show-slider',[IndexController::class,'showslider'])->name('show-slider');
Route::post('/addslider',[IndexController::class,'addslider'])->name('addslider');
/****=============The team dynamic data from Static Pages */
Route::get('/show_team',[TeamController::class,'index'])->name('show_team');
Route::get('/show_training_program',[IndexController::class,'showtrainigIndex']);

/** ============ AboutController =========================== */
 Route::get('/about',[AboutController::class,'about'])->name('/about');
 /***===============Course Section */
Route::view('/python','python')->name('python');
Route::view('/android','android')->name('android');
Route::view('/php','phpdetails')->name('php');
Route::view('/java','javadetails')->name('java');
Route::view('wordpress','wordpress')->name('wordpress');
Route::view('/merndetails','merndetails')->name('merndetails');
Route::view('/netdetails','netdetails')->name('netdetails');
Route::view('/hrdetails','hrdetails')->name('hrdetails');
Route::view('/frontenddeveloper','frontend_developer')->name('frontenddeveloper');
Route::view('/clanguage','clanguagedetails');
Route::view('/bootstrap','bootstrapdetails');

 /** ===========RegisterController ============================ */
 Route::get('/register',[RegisterController::class,'index'])->name('register.view');
 Route::post('/register',[RegisterController::class,'register'])->name('register.store');
 Route::get('/list_student',[RegisterController::class,'liststudent'])->name('list_student');
 Route::get('delstudent/{id}',[RegisterController::class,'delstudent'])->name('delstudent');
 Route::get('/search_register_student',[RegisterController::class,'search_student']);
 
 Route::get('editstudent/{id}',[RegisterController::class,'edit'])->name('updatestudent');
 Route::put('updatestudent/{id}',[RegisterController::class,'update'])->name('updatestudent1');

 /** ========================== Placement Record=======================*/
 Route::get('/placement',[PlacementController::class,'placement'])->name('/placement');
 Route::get('/show_student',[PlacementController::class,'placement'])->name('show_student');

 /** ======================= Conatct us ===============================*/
 Route::get('/contact',[ContactController::class,'contact'])->name('/contact.view');
 Route::post('/contact',[ContactController::class,'index'])->name('/contact.store');
 Route::get('/contact_list',[ContactController::class,'contactlist'])->name('contact_list');
 Route::get('delcontact/{id}',[ContactController::class,'delcontactdata'])->name('delcontact');
Route::get('/serach_contact',[ContactController::class,'serach_contact']);

/** ==================== gellary ========================================= */
Route::get('/seminar',[SeminarController::class,'seminar'])->name('/seminar');
Route::get('/team',[TeamController::class,'team'])->name('/team')->name('/team');
Route::get('/video',[VideoController::class,'video'])->name('/video')->name('/video');

/** ================= The Training Section ================================== */
Route::get('/summerTraining',[TrainingController::class,'summerTraining'])->name('/summerTraining');
Route::get('/vocationalTraining',[TrainingController::class,'vocationalTraining'])->name('/vocationalTraining');
Route::get('/winterTraining',[TrainingController::class,'winterTraining'])->name('/winterTraining');
Route::get('/industrailTraining',[TrainingController::class,'industrailTraining'])->name('/industrailTraining');
Route::get('/apprenticeshipTraining',[TrainingController::class,'apprenticeshipTraining'])->name('/apprenticeshipTraining');
Route::get('/internshipTraining',[TrainingController::class,'internshipTraining'])->name('/internshipTraining');
Route::get('/projectTraining',[TrainingController::class,'projectTraining'])->name('/projectTraining');
Route::get('/syllabusTraining',[TrainingController::class,'syllabusTraining'])->name('/syllabusTraining');
Route::get('/courses',[CourseController::class,'index'])->name('courses');

/***=================The Admin Panel =========================================== */
Route::get('/dashboard',[AdminController::class,'index'])->name('admin.deshboard');
// Route::get('/admin-login',[LoginController::class,'index'])->name('admin.login');
// Route::post('/login',[LoginController::class,'login'])->name('admin.login');
//Start Admin Routes
Route::get('/admin-login', [LoginController::class, 'index'])->name('login');
Route::post('/login', function () {
session(['admin_logged_in' => true]);
return redirect()->route('dashboard');
})->name('login.submit');
Route::get('/dashboard', function () {
if (!session('admin_logged_in')) {
return redirect()->route('login');
}
return view('admin.deshboard');
})->name('dashboard');
Route::get('/logout', function () {
session()->forget('admin_logged_in');
return redirect()->route('login');
})->name('logout');


/** =============================== Start Slider  ================================*/
Route::get('/add_slider',[AddSliderController::class,'index'])->name('add_slider');
Route::post('/add_slider',[AddSliderController::class,'addslider'])->name('admin.add_slider');
Route::get('/show-slider',[AddSliderController::class,'showslider'])->name('admin.show_slider');
Route::get('deleteslider/{id}',[AddSliderController::class,'deletesliders'])->name('admin.delete_slider');

Route::get('show/{show}',[AddSliderController::class,'editsliders'])->name('admin.update_slider');
Route::put('updateslider/{id}',[AddSliderController::class,'updateslider'])->name('updateslider');

/****=============================The Placement Start======================= */
Route::get('/add_student',[AddplacementstudentController::class,'index'])->name('admin.add_placementstudent');
Route::post('/add_student',[AddplacementstudentController::class,'placement']);
Route::get('/show_student',[AddplacementstudentController::class,'showplacementstudent'])->name('show_student');
Route::get('deletestudent/{id}',[AddplacementstudentController::class,'deletestudents']);
Route::get('/search_student',[AddplacementstudentController::class,'search_students']);
Route::get('/updateformshow/{id}',[AddplacementstudentController::class,'edit'])->name('admin.updateplacement');
Route::put('/update/{id}',[AddplacementstudentController::class,'updateformshow'])->name('updateplacement1');

/****========================The Training Start================================== */
Route::get('/add_training_program',[CreatetrainingController::class,'index'])->name('admin.create_training.view');
Route::post('/add_training_program',[CreatetrainingController::class,'Createtraining'])->name('admin.create_training.store');
Route::get('/show_training_program',[CreatetrainingController::class,'showtraining'])->name('admin.create_training');
Route::get('deletetraining/{id}',[CreatetrainingController::class,'deletetrainingimage']);
Route::get('editimage/{id}',[CreatetrainingController::class,'editimage'])->name('editImage');
Route::put('updateimage/{id}',[CreatetrainingController::class,'updateimage'])->name('updateimage');

/***==================== The Video Start============================================ */
Route::get('/add_video',[CreatevideoController::class,'index'])->name('admin.create_video.view');
Route::post('/add_video',[CreatevideoController::class,'video'])->name('admin.create_video.store');
Route::get('show_video',[CreatevideoController::class,'showvideo'])->name('admin.show_video');
Route::get('deletevideo/{id}',[CreatevideoController::class,'deletevideo'])->name('admin.show_video.delete');

Route::get('/{id}',[CreatevideoController::class,'edit'])->name('admin.update_video');
Route::put('updatevideo/{id}',[CreatevideoController::class,'updatevideo'])->name('updatevideo');

/***====================The Teams Start==================================================== */
Route::get('/add_team',[CreateteamController::class,'index'])->name('admin.create_team.view');
Route::post('/add_team',[CreateteamController::class,'teams'])->name('admin.create_team');
Route::get('/show_team',[CreateteamController::class,'showteam'])->name('admin.show_team.view');
Route::get('deletetimage/{id}',[CreateteamController::class,'delteams'])->name('admin.show_team');
Route::get('/search_team',[CreateteamController::class,'search_team']);

// Route::view('profilelock', 'admin.profile.director_profile');
Route::get('/profilelock',[ProfileController::class,'index'])->name('admin.profile.director_profile.view');
Route::post('/profilelock',[ProfileController::class,'createprofile'])->name('admin.profile.director_profile');
Route::get('/show_profile',[ProfileController::class,'showprofile']);
 
/**=================== The feedback Start ============================*/
  Route::get('/feedback',[FeedbackController::class,'index'])->name('feedback.view');
  Route::post('feedback',[FeedbackController::class,'intfeedback'])->name('feedback');
  Route::get('showfeeddata',[FeedbackController::class,'shofeeddata']);
  Route::get('delfeedata/{id}',[FeedbackController::class,'delfeeddata'])->name('showfeeddata');
  Route::get('/search_name',[FeedbackController::class,'search_data']);
  // Route::get('/term-condition',[FeedbackController::class,'termcondition'])->name('term-condition');

/**=================== The feedback Ends =============================*/

?>


