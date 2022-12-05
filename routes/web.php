<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\FbController;



use Illuminate\Http\Request;

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
Route::group(['middleware'=>"web"],function(){


Route::get('/', function () {
    return view('login');
});
    Route::get('/home', function () {
        return view('home');
    });
Route::get('/admin', function () {
    return view('admin.dashboard');
});

// Route::get('admin/profile', function () {
//     return view('admin.profile');
// });
Route::controller(SampleController::class)->group(function(){

Route::get('login','index')->name('login');

Route::get('register','register')->name('register');

 Route::get('logout','logout')->name('logout');

Route::post('validation_register', 'validation_register')->name('sample.validation_register');

// Route::post('validate_login', 'validate_login');

Route::get('dashboard', 'dashboard')->name('dashboard');

});
Route::post("/validate_login",[SampleController::class,'validate_login']);


Route::controller(ProjectController::class)->group(function(){

//Route::get('home', 'home')->name('home');
Route::post('create_project', 'create_project')->name('create_project');

});
Route::controller(ViewController::class)->group(function(){
    Route::get('view', 'view')->name('view');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('view.update');
    Route::get('delete/{id}', 'delete')->name('delete');

});
    Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth');
    Route::get('auth/google/call-back', [GoogleController::class, 'CallBack']);


    Route::get('github', [GitHubController::class, 'Gitredirect']);
    Route::get('callback/github', [GitHubController::class, 'GitcallBack']);

    Route::get('facebook', [FbController::class, 'Fbredirect']);
    Route::get('/auth/facebbok/callback', [FbController::class, 'FbcallBack']);
    
});
//Route::get("/loginwithgoogle", [GoogleController::class, 'loginwithgoogle']);



// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();

//     // $user->token
// });





