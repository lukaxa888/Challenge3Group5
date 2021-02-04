<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use app\Models\Instructor;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Instructor\instructor_dashboard;
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
    return view('pages/landingPage');
})->name('users.landing');

Route::get('/facilities', function () {
    return view('pages/facilities');
})->name('users.facilities');

Route::get('/courses', function () {
    return view('pages/courses');
})->name('users.courses');

Route::get('/prices', function () {
    return view('pages/prices');
})->name('users.prices');




Route::group(['middleware' => ['auth', 'web']], function() {
    
    Route::get('/calendar','CalendarController@showAdmin')->name('calendarAdmin');
    Route::post('/calendarUpdate','WorkoutConnectionController@update')->name('calendarUpdate');
    Route::post('/userUpdate','UserProfileController@update')->name('userUpdate');




    Route::delete('/calendarDelete/{id}','CalendarController@destroy')->name('calendarDelete');
    Route::get('/instructorSchedule/{instructor}','InstructorController@show')->name('instructor.schedule');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/admin_dashboard','Admin\DashboardController@index')->middleware('role:1');
    
    Route::get('/adminPanel','Admin\DashboardController@returnUsers')->name('dashboardAdmin')->middleware('role:1');
    
    Route::delete('users/{id}', 'UserController@deleteUser')
            ->name('userDestroy')->middleware('role:1');

    //Panel editar

    Route::get('/editPanel','Admin\DashboardController@returnUsersEdit')->name('editPanel')->middleware('role:1');

    Route::get('/usersEdit/{id}', 'Admin\DashboardController@returnUserEdit')->name('userUpdateAdmin')->middleware('role:1');

    Route::post('/usersEdit/{user}', 'UserController@registerEdit')->name('registerEdit')->middleware('role:1');

    Route::get('/instructor_dashboard','Instructor\DashboardController@index')->middleware('role:2');
    Route::delete('/deleteUser','UserProfileController@destroy')->name('deleteUser');
    Route::get('/profile', function () {
        return view('pages/userProfile');
    })->name('users.profile');
    Route::get('/register', function () {
        return view('register');
    })->name('users.register');
    Route::get('/shop', function () {
        return view('pages/shop');
    })->name('users.shop');
    Route::post('/store', [shopController::class, 'store'])->name('users.store.shop');
});
Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'en|es'
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
