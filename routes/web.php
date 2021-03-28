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
//############################## front routes ########################################//
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/',[App\Http\Controllers\Front\FrontController::class, 'index']);

        Route::get('/about-appex',function(){
            return view('front.about-appex');
        });
        Route::get('/about-us',function(){
            return view('front.about-us');
        });
        
        Route::get('/award',function (){
           return view('front.award');
        })->name('front.award');
        
        Route::get('/exhibit',[App\Http\Controllers\Front\FrontController::class, 'exhibit']);
        Route::get('/sponsors',[App\Http\Controllers\Front\FrontController::class, 'sponsors']);
        Route::get('/posts',[App\Http\Controllers\Front\FrontController::class,'posts'])->name('posts');
        Route::get('/post/{id}',[App\Http\Controllers\Front\FrontController::class,'singlePost'])->name('single-post');
        
        Route::get('/contact-us',function (){
            return view('front.contact');
        });
        
        Route::post('/exhibit',[App\Http\Controllers\Front\FrontController::class, 'exhibitorReservation'])->name('exhibit.post');
        Route::post('/be-sponsor',[App\Http\Controllers\Front\FrontController::class, 'beSponsor'])->name('sponsor.post');
        Route::post('/send-message',[App\Http\Controllers\Front\FrontController::class, 'sendMessage'])->name('send-message');
        Route::get('/get_wings',[App\Http\Controllers\Front\FrontController::class, 'getWings']);


    });

Auth::routes();

//######################### Admin Routes ##########################//
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');

    ############################## exhibitors routes #######################
    Route::group(['prefix' => 'exhibitors'],function (){
        Route::get('/','ExhibitorsController@index')->name('admin.exhibitors');
        Route::get('/active','ExhibitorsController@activeExhibitors')->name('admin.exhibitors.active');
        Route::get('/inactive','ExhibitorsController@inactiveExhibitors')->name('admin.exhibitors.inactive');
        Route::get('/inactive_exhibitors_report','ExhibitorsController@inactiveExhibitorsReport')->name('admin.exhibitors.inactive_report');

    });
    ############################## sponsors routes #######################
    Route::group(['prefix' => 'sponsors'],function (){
        Route::get('/','SponsorsController@index')->name('admin.sponsors');
        Route::get('/active','SponsorsController@activeSponsors')->name('admin.sponsors.active');
        Route::get('/inactive','SponsorsController@inactiveSponsors')->name('admin.sponsors.inactive');
    });

    ############################## messages routes ##########################
    Route::group(['prefix' => 'messages'],function (){
        Route::get('/','MessagesController@index')->name('admin.messages.index');
    });

    ############################### Posts routes #########################
    Route::group(['prefix' => 'posts'],function (){
        Route::get('/','PostsController@index')->name('admin.posts.index');
        Route::get('/create','PostsController@create')->name('admin.posts.create');
        Route::post('/post','PostsController@post')->name('admin.posts.post');

    });

    ############################## Registration routes #################
    Route::group(['prefix' => 'visitors'],function (){
        Route::get('/registration','DashboardController@visitorsRegistration')->name('admin.visitiors.registrations');
        Route::get('/delete/{id}','DashboardController@deleteVisitor')->name('admin.visitiors.delete');
    });

    ############################## Digital Transformation Registration ##########
    Route::group(['prefix' => 'digital_transformation'],function(){
        Route::get('/visitors','DashboardController@digitalTransformationVisitorsRegistration')->name('admin.digital_transformation_visitors');
        Route::get('/delete/{id}','DashboardController@digitalTrnsformationDeleteVisitor')->name('admin.digital_transformation_visitiors.delete');

    });

});