<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/applicant', 'App\Http\Controllers\ApplicantController@index');
// Route::get('/applicant/form', 'App\Http\Controllers\ApplicantController@form');
// Route::get('/applicant/create', 'App\Http\Controllers\ApplicantController@create');
// Route::get('/applicant/{id}', 'App\Http\Controllers\ApplicantController@show');
// Route::get('/apitest', 'App\Http\Controllers\ApplicantController@apitest');

// Route::post('/applicant', 'App\Http\Controllers\ApplicantController@store');

Route::get('/application', 'App\Http\Controllers\ApplicationController@index')->middleware('kiosk');
Route::post('/application', 'App\Http\Controllers\ApplicationController@store');
Route::get('/application/create', 'App\Http\Controllers\ApplicationController@create');



Route::get('/application/download/{file1}', 'App\Http\Controllers\ApplicationController@download');
Route::get('/application/download2/{attachments}', 'App\Http\Controllers\ApplicationController@download2');
Route::get('/search', 'App\Http\Controllers\ApplicationController@search')->middleware('kiosk');

Route::get('/application/{Application_number}', 'App\Http\Controllers\ApplicationController@show')->middleware('kiosk');
Route::get('/pdf', 'App\Http\Controllers\PDFMaker@gen');
Route::get('/pdfgen', 'App\Http\Controllers\KioskController@gen');

// Route::get('/application/{id}', 'App\Http\Controllers\ApplicationController@display');


Route::prefix('kiosk')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\KioskController@index')->name('kiosk.dashboard')->middleware('kiosk');
    Route::post('/dashboard', 'App\Http\Controllers\KioskController@store')->name('kiosk.dashboard')->middleware('kiosk');
    Route::delete('/reject/{Application_number}', 'App\Http\Controllers\KioskController@reject')->name('kiosk.reject')->middleware('kiosk');
    Route::post('/reject/submit', 'App\Http\Controllers\KioskController@submit')->name('kiosk.reject.submit')->middleware('kiosk');
    Route::get('/send', 'App\Http\Controllers\KioskController@send')->name('kiosk.send')->middleware('kiosk');
    Route::get('/reason', 'App\Http\Controllers\KioskController@reason')->name('kiosk.reason')->middleware('kiosk');
    Route::delete('/delete/{Application_no}', 'App\Http\Controllers\KioskController@delete')->name('kiosk.delete')->middleware('auth');
});


Route::prefix('settlement')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\SettlementController@index')->name('settlement.dashboard')->middleware('settlement');
    Route::get('/form/{Application_form}', 'App\Http\Controllers\SettlementController@form')->name('settlement.form')->middleware('settlement');
    Route::delete('/delete/{Application_no}', 'App\Http\Controllers\SettlementController@delete')->name('settlement.delete')->middleware('auth');
    Route::delete('/reject/{Application_number}', 'App\Http\Controllers\SettlementController@reject')->name('settlement.reject')->middleware('settlement');
    Route::get('/send', 'App\Http\Controllers\SettlementController@send')->name('settlement.send')->middleware('settlement');
    Route::get('/searchform', 'App\Http\Controllers\SettlementController@searchform')->name('settlement.searchform')->middleware('settlement');
    Route::post('/accept', 'App\Http\Controllers\SettlementController@accept')->name('settlement.accept')->middleware('settlement');
});

Route::prefix('survey')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\SurveyController@index')->name('survey.dashboard')->middleware('survey');
    Route::get('/notesheet/{id}', 'App\Http\Controllers\SurveyController@notesheet')->middleware('survey');
    Route::get('/form/{id}', 'App\Http\Controllers\SurveyController@form')->name('survey.form')->middleware('survey');
    Route::post('/accept', 'App\Http\Controllers\SurveyController@accept')->name('survey.accept')->middleware('survey');
    Route::get('/send', 'App\Http\Controllers\SurveyController@send')->name('survey.send')->middleware('survey');
    Route::delete('/delete/{id}', 'App\Http\Controllers\SurveyController@delete')->name('survey.delete')->middleware('survey');
    Route::get('/verified', 'App\Http\Controllers\SurveyController@verified')->name('survey.verified')->middleware('survey');
});


Route::prefix('surveyor')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\SurveyorController@index')->name('surveyor.dashboard')->middleware('surveyor');
    Route::get('/form/{id}', 'App\Http\Controllers\SurveyorController@form')->name('surveyor.form')->middleware('surveyor');
    Route::post('/verified', 'App\Http\Controllers\SurveyorController@verified')->name('surveyor.verified')->middleware('surveyor');
    Route::get('/send', 'App\Http\Controllers\SurveyorController@send')->name('surveyor.send')->middleware('surveyor');
    Route::get('/notesheet/{id}', 'App\Http\Controllers\SurveyorController@notesheet')->middleware('surveyor');
});
Route::get('clerk/dashboard', 'App\Http\Controllers\ClerkController@index')->name('clerk.dashboard')->middleware('clerk');











// Route::prefix('kiosk')->group(function () {
//     Route::get('/login', 'App\Http\Controllers\Auth\Kiosk\LoginController@showLoginForm')->name('kiosk.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\Kiosk\LoginController@login')->name('kiosk.login.submit');
//     Route::post('/logout', 'App\Http\Controllers\Auth\Kiosk\LoginController@logout')->name('kiosk.logout');
//     Route::get('/dashboard', 'App\Http\Controllers\KioskController@index')->name('kiosk.dashboard');
// });
// Route::prefix('settlement')->group(function () {
//     Route::get('/login', 'App\Http\Controllers\Auth\Settlement\LoginController@showLoginForm')->name('settlement.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\Settlement\LoginController@login')->name('settlement.login.submit');
//     Route::get('/dashboard', 'App\Http\Controllers\SettlementController@index')->name('settlement.dashboard');
// });
// Route::prefix('survey')->group(function () {
//     Route::get('/login', 'App\Http\Controllers\Auth\Survey\LoginController@showLoginForm')->name('survey.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\Survey\LoginController@login')->name('survey.login.submit');
//     Route::get('/dashboard', 'App\Http\Controllers\SurveyController@index')->name('survey.dashboard');
// });
// Route::prefix('surveyor')->group(function () {
//     Route::get('/login', 'App\Http\Controllers\Auth\Surveyor\LoginController@showLoginForm')->name('surveyor.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\Surveyor\LoginController@login')->name('surveyor.login.submit');
//     Route::get('/dashboard', 'App\Http\Controllers\SurveyorController@index')->name('surveyor.dashboard');
// });
// Route::prefix('clerk')->group(function () {
//     Route::get('/login', 'App\Http\Controllers\Auth\Clerk\LoginController@showLoginForm')->name('clerk.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\Clerk\LoginController@login')->name('clerk.login.submit');
//     Route::get('/dashboard', 'App\Http\Controllers\ClerkController@index')->name('clerk.dashboard');
// });
// Route::prefix('user')->group(function () {
//     Route::get('/login', 'App\Http\Controllers\Auth\User\LoginController@showLoginForm')->name('user.login');
//     Route::post('/login', 'App\Http\Controllers\Auth\User\LoginController@login')->name('user.login.submit');
//     Route::get('/dashboard', 'App\Http\Controllers\UserController@index')->name('user.dashboard');
// });



Auth::routes([
    'register' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
