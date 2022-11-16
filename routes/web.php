<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\PagesController;

use App\Http\Controllers\Admin\AboutController;

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

Auth::routes(['verify' => true]);



Route::get('/',[PagesController::class,'index']);

Route::get('aboutus',[PagesController::class,'aboutus']);
Route::get('event',[PagesController::class,'event']);

Route::get('news',[PagesController::class,'news']);
Route::get('notice',[PagesController::class,'notice']);

Route::get('contact',[PagesController::class,'contact']);


// Admin Routes

Route::get('login/admin',[AdminController::class,'adminLoginForm'])->name('admin.login.form');

Route::post('admin-login',[AdminController::class,'adminLogin'])->name('admin.login');

Route::group(['middleware'=>'admin'],function(){

    Route::get('admin/dashboard',[DashboardController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');

    // Mission Routes
    Route::get('mission',[App\Http\Controllers\Admin\MissionController::class, 'index']);
    Route::get('add-mission',[App\Http\Controllers\Admin\MissionController::class, 'create']);
    Route::post('add-mission',[App\Http\Controllers\Admin\MissionController::class, 'store']);
    Route::get('edit-mission/{mission_id}',[App\Http\Controllers\Admin\MissionController::class, 'edit']);
    Route::put('update-mission/{mission_id}',[App\Http\Controllers\Admin\MissionController::class, 'update']);

    Route::get('delete-mission/{mission_id}',[App\Http\Controllers\Admin\MissionController::class, 'destroy']);

    // Slider Routes
    Route::get('slider',[App\Http\Controllers\Admin\SliderController::class, 'index']);
    Route::get('add-slider',[App\Http\Controllers\Admin\SliderController::class, 'create']);
    Route::post('add-slider',[App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('edit-slider/{slider_id}',[App\Http\Controllers\Admin\SliderController::class, 'edit']);
    Route::put('update-slider/{slider_id}',[App\Http\Controllers\Admin\SliderController::class, 'update']);

    Route::get('delete-slider/{slider_id}',[App\Http\Controllers\Admin\SliderController::class, 'destroy']);

    // About Routes
    Route::get('about',[App\Http\Controllers\Admin\AboutController::class, 'index']);
    Route::get('add-about',[App\Http\Controllers\Admin\AboutController::class, 'create']);
    Route::post('add-about',[App\Http\Controllers\Admin\AboutController::class, 'store']);
    Route::get('edit-about/{about_id}',[App\Http\Controllers\Admin\AboutController::class, 'edit']);
    Route::put('update-about/{about_id}',[App\Http\Controllers\Admin\AboutController::class, 'update']);

    Route::get('delete-about/{about_id}',[App\Http\Controllers\Admin\AboutController::class, 'destroy']);




});

// logged-in user routes
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('profile',[App\Http\Controllers\UsersInfoController::class, 'show'])->name('profile');
    Route::post('profile',[App\Http\Controllers\UsersInfoController::class, 'update'])->name('profile.update');
    Route::get('search',[App\Http\Controllers\UsersInfoController::class, 'search'])->name('search');
    Route::get('payment-history',[App\Http\Controllers\UsersInfoController::class, 'paymentHistory'])->name('payment.history');
    Route::get('/registration', [App\Http\Controllers\SslCommerzPaymentController::class, 'registration'])->name('registration');
    Route::get('list',[App\Http\Controllers\UsersInfoController::class, 'list'])->name('list');
    Route::get('/membership-yearly', [App\Http\Controllers\SslCommerzPaymentController::class, 'yearlyMembership'])->name('membership.yearly');

   Route::get('memberlist',[App\Http\Controllers\UsersInfoController::class, 'memberlist'])->name('memberlist');

});

    // SSLCOMMERZ Start
    Route::get('/example1', [App\Http\Controllers\SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    // Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
    // Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

    Route::post('/pay', [App\Http\Controllers\SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [App\Http\Controllers\SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [App\Http\Controllers\SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [App\Http\Controllers\SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [App\Http\Controllers\SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [App\Http\Controllers\SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END
