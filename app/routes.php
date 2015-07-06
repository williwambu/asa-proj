<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('uses'=>'HomeController@showWelcome'));

Route::get('executive',array('uses' => 'SiteRoutesController@executive'));

Route::get('directors',array('uses' => 'SiteRoutesController@directors'));

Route::get('gallery',array('uses' => 'SiteRoutesController@gallery'));

Route::get('contact-us',array('uses' => 'SiteRoutesController@contact'));

Route::get('about',array('uses' => 'SiteRoutesController@about', ));

Route::get('login-fb/',array('uses' => 'HomeController@loginWithFacebook'));

Route::get('login-google/',array('uses'=>'HomeController@loginWithGoogle'));

Route::get('portal',function(){
    return View::make('portal');
});

Route::get('callback',function(){
    $input = Input::all();
    dd($input);
});

/*
 * Admin Routes
 */

Route::get('admin',array('uses'=>'AdminController@loginPanel','as'=>'login-panel'));

Route::get('login',array('uses'=>'AdminController@loginPanel'));

Route::get('events/all',array('uses'=>'EventsController@all','as'=>'all-events'));

Route::get('events/{id}/delete',array('uses'=>'EventsController@deleteEvent','as' =>'delete-event'));

Route::get('events/{id}',array('uses'=>'EventsController@getEvent'));

Route::get('event/{id}',array('uses'=>'EventsController@subscribers','as'=>'subscribers'));

Route::post('events/subscribers/new',array('uses'=>'EventsController@addSubscriber'));

Route::post('events/new',array('uses'=>'EventsController@createEvent','as' => 'create-event'));

Route::post('admin/new',array('uses'=>'AdminController@newAdmin'));

Route::post('admin/login',array('uses'=>'AdminController@login','as' => 'admin-login'));

Route::get('admin/logout',array('uses'=>'AdminController@logout','as'=>'logout'));

Route::get('admin',array('before'=>'auth','uses'=>'AdminController@admin','as'=>'admin'));

Route::get('event/new',array('uses'=>'EventsController@createEventForm','as'=>'create-event-form'));

Route::get('admin/events',array('uses'=>'EventsController@adminAll','as'=>'admin-all'));

Route::post('upload-cv',array('uses'=>'HomeController@saveCv','as'=>'upload-cv'));

Route::get('admin/uploaded_cvs/{file_name}',function($file_name){
    $parts = explode($file_name,'.');
    $ext = $parts[count($parts) - 1]."'";

    $file = public_path().'/uploaded_cvs/'.$file_name;
    return Response::download($file,$file_name);
});

Route::get('/CVs.zip',array('uses'=>'HomeController@createZip','as'=>'create-zip'));
