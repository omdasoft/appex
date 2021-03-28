<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});



Route::get('/get_exhibitors',[App\Http\Controllers\API\ExhibitorsController::class,'index']);
Route::get('/activate_reservation',[App\Http\Controllers\API\ExhibitorsController::class,'activateReservation']);
Route::get('/deactivate_reservation',[App\Http\Controllers\API\ExhibitorsController::class,'deactivateReservation']);
Route::get('/delete_exhibitor',[App\Http\Controllers\API\ExhibitorsController::class,'deleteExhibitor']);
Route::get('/active_exhibitors',[App\Http\Controllers\API\ExhibitorsController::class,'activeExhibitors']);
Route::get('/inactive_exhibitors',[App\Http\Controllers\API\ExhibitorsController::class,'inactiveExhibitors']);
//Route::get('/inactive_exhibitors_report',[App\Http\Controllers\API\ExhibitorsController::class,'inactiveExhibitorsReport']);

Route::get('/get_sponsors',[App\Http\Controllers\API\SponsorsController::class,'index']);
Route::get('/activate_sponsor',[App\Http\Controllers\API\SponsorsController::class,'activateSponsor']);
Route::get('/deactivate_sponsor',[App\Http\Controllers\API\SponsorsController::class,'deactivateSponsor']);
Route::get('/delete_sponsor',[App\Http\Controllers\API\SponsorsController::class,'deleteSponsor']);
Route::get('/active_sponsors',[App\Http\Controllers\API\SponsorsController::class,'activeSponsors']);
Route::get('/inactive_sponsors',[App\Http\Controllers\API\SponsorsController::class,'inactiveSponsors']);



Route::get('/get_messages',[App\Http\Controllers\API\MessagesController::class,'index']);
Route::get('/delete_message',[App\Http\Controllers\API\MessagesController::class,'deleteMessage']);

Route::post('/new-post',[App\Http\Controllers\API\PostController::class,'create']);
Route::get('/get_posts',[App\Http\Controllers\API\PostController::class,'index']);
Route::put('/update_post',[App\Http\Controllers\API\PostController::class,'update']);
Route::get('/delete_post',[App\Http\Controllers\API\PostController::class,'delete']);

Route::post('/register',[App\Http\Controllers\API\RegistrationController::class,'register']);

Route::post('/digital-transformation-register',[App\Http\Controllers\API\RegistrationController::class,'digitalTransformationRegister']);










Route::get('/get_hall_name',[App\Http\Controllers\API\ExhibitorsController::class,'getHallName']);
Route::get('/get_halls',[App\Http\Controllers\API\HallWingController::class,'getHalls']);
Route::get('/get_wings',[App\Http\Controllers\API\HallWingController::class,'getWings']);
