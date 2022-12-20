<?php

namespace App\Http\Controllers;
use App\Models\{Hotel,Gallery,Club,TourSpot,Restaurant};

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllHotels(){

        $data = Hotel::where('status','1')->get();
        return view('user.hotels',compact('data'));


    }
    public function getAllClubs(){

        $data = Club::where('status','1')->get();
        return view('user.club',compact('data'));


    }
    public function getAllSpots(){

        $data = TourSpot::where('status','1')->get();
        return view('user.spot',compact('data'));


    }
    public function getAllRestaurants(){

        $data = Restaurant::where('status','1')->get();
        return view('user.restaurant',compact('data'));


    }

    public function getHotelDetails($id){

        $data = Hotel::find($id);
        $dataImages = Gallery::where('hotel_id',$data->id)->get();
        return view('user.hotel_detail',compact('data','dataImages'));

    }
    public function getRestaurantDetails($id){

        $data = Restaurant::find($id);
        $dataImages = Gallery::where('restaurant_id',$data->id)->get();
        return view('user.restaurant_detail',compact('data','dataImages'));

    }
    public function getClubDetails($id){

        $data = CLub::find($id);
        $dataImages = Gallery::where('club_id',$data->id)->get();
        return view('user.club_detail',compact('data','dataImages'));

    }
    public function getSpotDetails($id){

        $data = TourSpot::find($id);
        $dataImages = Gallery::where('spot_id',$data->id)->get();
        return view('user.spot_detail',compact('data','dataImages'));

    }
}
