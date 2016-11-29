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
/*
 * load view
 */

Route::get('/hello', function()
{
	return View::make('hello');
});

Route::get('/', 'HomeController@showWelcome');
Route::get('administrator/','AdministratorController@index');

/*
 * To route to a controller
 */
Route::get('/write', 'HomeController@writeThis');

/*
 * To route to a controller and pass a variable to it
 */

Route::get('/administrator/{data}', array('uses' => 'AdministratorController@getVars'));

/*
 * To pass multiple variables
 */
Route::get('vars/{param1}&{param2}', function($param1,$param2){
    return "My name is $param1 $param2";
});

Route::get('/template' ,function(){
    return View::make('template');
});
Route::get('/createtable' ,'AdministratorController@CreateTable');
Route::get('/updatetable' ,'AdministratorController@UpdateTable');
Route::get('createuser' ,'AdministratorController@CreateUser');
Route::post('/administrator/signup' ,'AdministratorController@SignUp');
Route::get('browse' ,'AdministratorController@BrowseAll');
Route::get('administrator/deleteuser/{id}' ,'AdministratorController@DeleteUser');
Route::get('signup' ,function() {
    return View::make('signup');
});


/**
 * this section is all new for presidential car
 *
 */
//-------------------ADMIN---------------------//
Route::get('/',                     'UserController@index');
Route::get('',                      'UserController@index');
Route::get('/user',                'UserController@index');
Route::get('/user/dashboard',      'UserController@viewDashboard');
Route::get('/signup',               'UserController@signUp');

Route::get('/user/viewdrivers',    'UserController@viewDrivers');
Route::get('/user/viewclients',    'UserController@viewClients');
Route::get('/user/logout',         'UserController@logout');
Route::get('/user/viewtrips',      'UserController@viewTrips');
Route::get('/user/newtrips',       'UserController@newTrips');
Route::get('/user/viewcars',       'UserController@viewCars');
Route::get('/user/cardetails/{id}','UserController@carDetails');
Route::get('/user/driverdetails/{id}','UserController@driverDetails');
Route::get('/user/viewpayments',   'UserController@viewPayments');

Route::post('/user/login',         'UserController@login');
Route::post('/user/gettrips',      'UserController@getTrips');
Route::post('/user/getdriverdailytrips',      'UserController@getDriverDailyTrips');
Route::post('/user/getdriverperformance',      'UserController@getDriverDailyTrips');
Route::post('/user/gettripsbydriver',  'UserController@getTripsByDriver');
Route::post('/user/geteditedtripbyid',  'UserController@getEditedTripById');
Route::post('/user/saveeditedtrip',  'UserController@saveEditedTrip');
Route::post('/user/getdrivers',    'UserController@getDrivers');
Route::post('/user/getclients',    'UserController@getClients');
Route::post('/user/newtrip',       'UserController@newDailyTrip');
Route::post('/user/deletetrip', 'UserController@deleteTrip');
Route::post('/user/newuser',       'UserController@createNewUser');
Route::post('/user/getcars',       'UserController@getCars');
Route::post('/user/cardetails/get',       'UserController@getCarDetails');
Route::post('/user/cardetails/getfuel',       'UserController@getFuel');
Route::post('/user/getpayments',       'UserController@getPayments');
Route::post('/user/createreport',      'UserController@createReport');

Route::post('/user/getdriverbyid', 'UserController@getDriverById');
Route::post('/user/savedriver',    'UserController@saveDriver');
Route::post('/user/savenewdriver', 'UserController@saveNewDriver');
Route::post('/user/deletedriver',  'UserController@deleteDriver');

Route::post('/user/getclientbyid', 'UserController@getClientById');
Route::post('/user/saveclient',    'UserController@saveClient');
Route::post('/user/savenewclient',    'UserController@saveNewClient');
Route::post('/user/deleteclient',  'UserController@deleteClient');


Route::post('/user/getcarbyid', 'UserController@getCarById');
Route::post('/user/savecar',    'UserController@saveCar');
Route::post('/user/savenewcar',    'UserController@saveNewCar');
Route::post('/user/deletecar', 'UserController@deleteCar');

Route::post('/user/savepayment',    'UserController@savePayment');
//-------------------DRIVER---------------------//

Route::get('/driver/newtrip' ,'DriverController@newTrip');
Route::get('/driver/logout' ,'DriverController@logout');
Route::get('/driver/mytrips', 'DriverController@myTrips');
Route::get('/driver/myfueltank', 'DriverController@myFuelTank');
Route::get('/driver/showemailform', 'DriverController@showEmailForm');

Route::post('/driver/getlocation' ,'LocationController@getLocation');
Route::post('/driver/gettime' ,'LocationController@getTime');
Route::post('/driver/savenewtrip' ,'DriverController@saveNewTrip');
Route::post('/driver/savenewtemptrip' ,'DriverController@saveNewTempTrip');
Route::post('/driver/getavailablecars' ,'DriverController@getAvailableCars');
Route::post('/driver/replacecar', 'DriverController@replaceCar');
Route::post('/driver/gettrip', 'DriverController@getTripById');
Route::post('/driver/requestdeletion', 'DriverController@requestDeletion');
Route::post('/driver/requestrevision', 'DriverController@requestRevision');
Route::post('/driver/showmytrips', 'DriverController@showMyTrips');
Route::post('/driver/savefuelfillup', 'DriverController@saveFuelFillUp');
Route::post('/driver/sendemail' ,'DriverController@sendEmail');