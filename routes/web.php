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


// Route::get('/apitest', 'App\Http\Controllers\ApplicantController@apitest');



Route::get('/application', 'App\Http\Controllers\ApplicationController@index')->middleware('kiosk');
Route::post('/application', 'App\Http\Controllers\ApplicationController@store');
Route::get('/application/create', 'App\Http\Controllers\ApplicationController@create');



Route::get('/application/download/{file1}', 'App\Http\Controllers\ApplicationController@download')->middleware('auth');
Route::get('/application/download2/{attachments}', 'App\Http\Controllers\ApplicationController@download2')->middleware('auth');
Route::get('/search', 'App\Http\Controllers\ApplicationController@search')->middleware('kiosk');
Route::get('/search/status', 'App\Http\Controllers\ApplicationController@searchStatus');

Route::get('/application/{Application_number}', 'App\Http\Controllers\ApplicationController@show')->middleware('kiosk');



// Route::get('/application/{id}', 'App\Http\Controllers\ApplicationController@display');


Route::prefix('kiosk')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\KioskController@index')->name('kiosk.dashboard')->middleware('kiosk');
    // Route::post('/dashboard', 'App\Http\Controllers\KioskController@store')->name('kiosk.dashboard')->middleware('kiosk');
    Route::delete('/reject/{Application_number}', 'App\Http\Controllers\KioskController@reject')->name('kiosk.reject')->middleware('auth');
    Route::delete('/done/{Application_number}', 'App\Http\Controllers\KioskController@done')->name('kiosk.done')->middleware('auth');
    // Route::post('/reject/submit', 'App\Http\Controllers\KioskController@submit')->name('kiosk.reject.submit')->middleware('kiosk');
    Route::get('/send', 'App\Http\Controllers\KioskController@send')->name('kiosk.send')->middleware('kiosk');
    // Route::get('/reason', 'App\Http\Controllers\KioskController@reason')->name('kiosk.reason')->middleware('kiosk');
    // Route::delete('/delete/{Application_no}', 'App\Http\Controllers\KioskController@delete')->name('kiosk.delete')->middleware('auth');
    Route::patch('/{id}/appStatus', 'App\Http\Controllers\KioskController@appStatus')->name('kiosk.appStatus')->middleware('kiosk');
    Route::patch('/{id}/kioskForwarded', 'App\Http\Controllers\KioskController@kioskForwarded')->name('kiosk.kioskForwarded')->middleware('kiosk');
    Route::get('/uploaded', 'App\Http\Controllers\KioskController@uploaded')->name('kiosk.uploaded')->middleware('kiosk');
    Route::get('/reciept/{id}', 'App\Http\Controllers\KioskController@reciept')->name('kiosk.reciept')->middleware('kiosk');
});


Route::prefix('settlement')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\SettlementController@index')->name('settlement.dashboard')->middleware('settlement');
    Route::get('/form/{Application_form}', 'App\Http\Controllers\SettlementController@form')->name('settlement.form')->middleware('settlement');
    Route::delete('/delete/{Application_no}', 'App\Http\Controllers\SettlementController@delete')->name('settlement.delete')->middleware('auth');
    Route::delete('/reject/{Application_number}', 'App\Http\Controllers\SettlementController@reject')->name('settlement.reject')->middleware('settlement');
    Route::get('/send', 'App\Http\Controllers\SettlementController@send')->name('settlement.send')->middleware('settlement');
    Route::get('/searchform', 'App\Http\Controllers\SettlementController@searchform')->name('settlement.searchform')->middleware('settlement');
    Route::get('/check', 'App\Http\Controllers\SettlementController@check')->name('settlement.check')->middleware('settlement');
    // Route::patch('/approve/{id}', 'App\Http\Controllers\SettlementController@approve')->name('settlement.approve')->middleware('settlement');
    // Route::get('/approved', 'App\Http\Controllers\SettlementController@approved')->name('settlement.approved')->middleware('settlement');
    Route::patch('/accept/{id}', 'App\Http\Controllers\SettlementController@accept')->name('settlement.accept')->middleware('settlement');
    Route::patch('/{id}/settlementForwarded', 'App\Http\Controllers\SettlementController@settlementForwarded')->name('settlement.settlementForwarded')->middleware('settlement');
    Route::get('/notesheet/{id}', 'App\Http\Controllers\SettlementController@notesheet')->middleware('settlement');
    Route::patch('/approved/{id}', 'App\Http\Controllers\SettlementController@approved')->name('settlement.approved')->middleware('settlement');
    Route::get('/verified', 'App\Http\Controllers\SettlementController@verified')->name('settlement.verified')->middleware('settlement');
    Route::patch('/finalSend/{id}', 'App\Http\Controllers\SettlementController@finalSend')->name('settlement.finalSend')->middleware('settlement');
    Route::patch('/{id}/settlementSigned', 'App\Http\Controllers\SettlementController@settlementSigned')->name('settlement.settlementSigned')->middleware('settlement');
    Route::patch('/{id}/settlementUploaded', 'App\Http\Controllers\SettlementController@settlementUploaded')->name('settlement.settlementUploaded')->middleware('settlement');
    Route::get('/upload', 'App\Http\Controllers\SettlementController@upload')->name('settlement.upload')->middleware('settlement');
    Route::get('/final', 'App\Http\Controllers\SettlementController@final')->name('settlement.final')->middleware('settlement');
    Route::get('/reciept/{id}', 'App\Http\Controllers\SettlementController@reciept')->name('settlement.reciept')->middleware('settlement');
});

Route::prefix('survey')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\SurveyController@index')->name('survey.dashboard')->middleware('survey');
    Route::get('/notesheet/{id}', 'App\Http\Controllers\SurveyController@notesheet')->middleware('survey');
    Route::get('/form/{id}', 'App\Http\Controllers\SurveyController@form')->name('survey.form')->middleware('survey');
    Route::post('/accept', 'App\Http\Controllers\SurveyController@accept')->name('survey.accept')->middleware('survey');

    Route::get('/send', 'App\Http\Controllers\SurveyController@send')->name('survey.send')->middleware('survey');
    Route::delete('/delete/{id}', 'App\Http\Controllers\SurveyController@delete')->name('survey.delete')->middleware('survey');
    Route::get('/verified', 'App\Http\Controllers\SurveyController@verified')->name('survey.verified')->middleware('survey');
    Route::patch('/accepted/{id}', 'App\Http\Controllers\SurveyController@accepted')->name('survey.accepted')->middleware('survey');
    Route::patch('/{id}/surveyForwarded', 'App\Http\Controllers\SurveyController@surveyForwarded')->name('survey.surveyForwarded')->middleware('survey');
    Route::patch('/comment/{id}', 'App\Http\Controllers\SurveyController@comment')->name('survey.comment')->middleware('survey');
});


Route::prefix('surveyor')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\SurveyorController@index')->name('surveyor.dashboard')->middleware('surveyor');
    Route::get('/form/{id}', 'App\Http\Controllers\SurveyorController@form')->name('surveyor.form')->middleware('surveyor');
    // Route::post('/verified', 'App\Http\Controllers\SurveyorController@verified')->name('surveyor.verified')->middleware('surveyor');
    Route::get('/send', 'App\Http\Controllers\SurveyorController@send')->name('surveyor.send')->middleware('surveyor');
    Route::get('/notesheet/{id}', 'App\Http\Controllers\SurveyorController@notesheet')->middleware('surveyor');
    Route::delete('/delete/{id}', 'App\Http\Controllers\SurveyorController@delete')->middleware('surveyor');
    Route::patch('/verified/{id}', 'App\Http\Controllers\SurveyorController@verified')->middleware('surveyor');
    Route::patch('/{id}/surveyorForwarded', 'App\Http\Controllers\SurveyorController@surveyorForwarded')->middleware('surveyor');
});


Route::prefix('clerk')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\ClerkController@index')->name('clerk.dashboard')->middleware('clerk');
    Route::get('/reciept/{id}', 'App\Http\Controllers\ClerkController@reciept')->name('clerk.reciept')->middleware('clerk');
    Route::patch('/{id}/clerkSent', 'App\Http\Controllers\ClerkController@clerkSent')->name('clerk.clerkSent')->middleware('clerk');
});


Auth::routes([
    'register' => false
]);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
