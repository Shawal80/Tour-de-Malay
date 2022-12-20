<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TourSpotController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Models\{Hotel,Restaurant,TourSpot,Club};

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

Route::group(['middleware' => ['protectedPages']],function(){
    Route::get('admin-dashboard', function () {
        $totalHotel = Hotel::all()->count('id');
        $totalRestaurant = Restaurant::all()->count('id');
        $totalSpots = TourSpot::all()->count('id');
        $totalClubs = Club::all()->count('id');
        // dd($totalHotel);
        return view('welcome',compact('totalHotel','totalRestaurant'));
    });
    Route::resource('hotels', HotelController::class);
    Route::resource('restaurants', RestaurantController::class);
    Route::resource('tour_spots', TourSpotController::class);
    Route::resource('clubs', ClubController::class);
});




Route::post('auth-user',[UserAuth::class,'userLogin']);
Route::get('logout',[UserAuth::class,'userLogout']);

Route::get('login',function(){
    return view('auth.login');
});
Route::get('register',function(){
    return view('auth.register');
});



Route::get('/',function(){
    $totalHotel = Hotel::all()->count('id');
    $totalRestaurant = Restaurant::all()->count('id');
    $totalSpots = TourSpot::all()->count('id');
    $totalClubs = Club::all()->count('id');
    return view('user.index',compact('totalHotel','totalRestaurant','totalClubs','totalSpots'));
});

Route::get('about-us', function(){
    return view('user.about_us');
})->name('about-us');

Route::get('all-hotels',[UserController::class,'getAllHotels']);
Route::get('all-clubs',[UserController::class,'getAllClubs']);
Route::get('all-spots',[UserController::class,'getAllSpots']);
Route::get('all-restaurants',[UserController::class,'getAllRestaurants']);
Route::get('hotel-detail/{id}',[UserController::class,'getHotelDetails']);
Route::get('club-detail/{id}',[UserController::class,'getClubDetails']);
Route::get('spot-detail/{id}',[UserController::class,'getSpotDetails']);
Route::get('restaurant-details/{id}',[UserController::class,'getRestaurantDetails']);

