<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\FireBaseController;

use App\Http\Controllers\QucController;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/signup',UserController::class);
Route::resource('/signin',\App\Http\Controllers\LoginController::class);
Route::resource('/information',\App\Http\Controllers\BasicInformationController::class);
Route::resource('/hulul',\App\Http\Controllers\MtHululController::class)->middleware('auth');
Route::get('/hulul/delete/{$login}',[\App\Http\Controllers\MtHululController::class,'destroy'])->middleware('auth');
Route::resource('/demos',\App\Http\Controllers\TodoController::class)->middleware('auth');
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/demos/filter', [App\Http\Controllers\TodoController::class, 'filter'])->name('demos.filter');
//Route::get('/demos/delete/{$login}', [App\Http\Controllers\MtHululController::class, 'destroy'])->name('deleteDemo');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*corporate*/
Route::get('/corporate', function () {
    return view('createCompany');
});
// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
Route::resource('/account',\App\Http\Controllers\UserAccountsController::class)->middleware('auth');
Route::resource('/admin',\App\Http\Controllers\AdminController::class)->middleware('auth');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});
Route::get('/quc/step1', [QucController::class, 'Step1']);
Route::middleware(['agree','auth'])->group(function(){
    Route::post('/quc/create-step1', [QucController::class, 'createStep1']);
    Route::get('/quc/step2', [QucController::class, 'Step2']);
    Route::post('/quc/create-step2', [QucController::class, 'CreateStep2']);
    Route::get('/quc/step3', [QucController::class, 'Step3']);
    Route::post('/quc/create-step3', [QucController::class, 'CreateStep3']);
    Route::get('/quc/step4', [QucController::class, 'Step4']);
    Route::post('/quc/create-step4', [QucController::class, 'CreateStep4']);
    Route::get('/quc/step5', [QucController::class, 'Step5']);
    Route::post('/quc/create-step5', [QucController::class, 'CreateStep5']);

    Route::get('/quc/Student', [QucController::class, 'Student']);
    Route::post('/quc/create-Student', [QucController::class, 'CreateStudent']);
    Route::get('/quc/EmploymentStatus', [QucController::class, 'EmploymentStatus']);
    Route::post('/quc/create-EmploymentStatus', [QucController::class, 'CreateEmploymentStatus']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Route::get('/quc/step6', [QucController::class, 'Step6']);
Route::get('/live_chat', function () {
    return view('live_chat');
});
Route::post('/send-message', function (Request $request) {
    event(new Message($request->input('username'),$request->input('message')));
    return ["success"=>true] ;
});
// Route::resource('/email_verified',\App\Http\Controllers\VerificationController::class)->middleware(['auth','verified']);
Route::get('/email_verified',[\App\Http\Controllers\VerificationController::class, 'index'])->middleware(['auth','verified'])->name('verification.notice');

Route::get('email_verified', function () {
    return view('blank');
})->middleware('verified');
Route::get('VERIFICATION', function () {
    return view('admin.VERIFICATION');
});


//create demo
Route::get('/createdemo', function () {
    return view('createdemo');
});

//create demo message
Route::get('/demomessage', function () {
    return view('demomessage');
});
Route::get('/selectaccount', function () {
    return view('selectaccount');
});
Route::get('/changetradingaccount', function () {
    return view('changetradingaccount');
});
Route::get('/restbalance', function () {
    return view('restbalance');
});
