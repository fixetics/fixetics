<?php

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

/*Global Routes*/
Route::get('/','AppController@home')->name('app.home');
Route::get('/register','AppController@getRegister')->name('register.get');
Route::post('/register','UserController@postRegister')->name('register.post');
Route::get('/login','UserController@getLogin')->name('login.get');
Route::post('/login','UserController@postLogin')->name('login.post');

/*Only Employer*/
Route::group(['middleware' => ['isEmployer']], function () {
  Route::get('/jobs/create','JobController@createJob')->name('job.create');
  Route::post('/jobs/create','JobController@postJob')->name('job.post');
  Route::get('/job/{slug}/applications','ApplicationController@getApplications')->name('job.applications.get');
  Route::post('/job/{slug}/applications','ApplicationController@approveApplication')->name('job.applications.approve');
});

Route::group(['middleware' => ['isFreelancer']], function () {
  Route::get('/apply-job/{slug}','ApplicationController@applyJob')->name('apply.job');
});



/*Only Auth Routes*/
Route::group(['middleware' => ['auth']], function () {
Route::get('/user','AppController@getUser')->name('user.get');
Route::get('/user/logout','UserController@logoutUser')->name('user.logout');
Route::get('/jobs','JobController@listJobs')->name('job.list');
Route::get('/jobs/{slug}','JobController@getJob')->name('job.get');


});
