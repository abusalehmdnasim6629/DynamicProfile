<?php

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
Route::get('/home','ContentController@ContentControl');
Route::post('/message-send','MessageController@message');


Route::get('/admin','AdminController@adminHome');
Route::get('/add-person-detail','AdminController@addperson');
Route::post('/save-person-detail','AdminController@saveperson');
Route::get('/show-person-detail','AdminController@showperson');
Route::get('/show-educational-qualification','AdminController@showEQ');
Route::get('/add-educational-qualification','AdminController@addQulification');
Route::post('/save-qualification-detail','AdminController@saveQulification');
Route::get('/add-cv','AdminController@addCv');
Route::post('/save-cv','AdminController@saveCv');
Route::get('/download','AdminController@download');
Route::get('/add-service-detail','AdminController@addService');
Route::post('/save-service-detail','AdminController@saveService');
Route::get('/show-service-detail','AdminController@showservice');
Route::get('/add-work-detail','AdminController@addwork');
Route::post('/save-work-detail','AdminController@saveWork');
Route::get('/add-skill-detail','AdminController@addskill');
Route::post('/save-skill-detail','AdminController@saveskill');
Route::get('/delete-eq/{personQualification_id}','AdminController@deleteEq');
Route::get('/show-skill-detail','AdminController@showskill');
Route::get('/delete-skill/{skill_id}','AdminController@deleteskill');
Route::get('/show-work-detail','AdminController@showwork');
Route::get('/delete-work/{work_id}','AdminController@deletework');
Route::get('/delete-service/{service_id}','AdminController@deleteservice');