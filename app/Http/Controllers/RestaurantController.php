<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Hotel,Gallery,Restaurant};
use Datatables,File;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = Restaurant::all();
        return view('restaurants.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->restaurant_images);
        $request->validate([
            "name" => "required",
            "address" => "required",
            "contact_number" => "required",
            "manager_name" => "required",
            "restaurant_description" => "required",
            "manager_contact_number" => "required",
            "number_of_tables" => "required",
            "restaurant_ratings" => "required",
            "restaurant_images" => "required",
        ]);

        $newRestaurant = new Restaurant;

        $newRestaurant->name = $request->name;
        $newRestaurant->address = $request->address;
        $newRestaurant->number_of_tables = $request->number_of_tables;
        $newRestaurant->restaurant_ratings = $request->restaurant_ratings;
        $newRestaurant->restaurant_description = $request->restaurant_description;
        $newRestaurant->manager_name = $request->manager_name;
        $newRestaurant->manager_contact_number = $request->manager_contact_number;
        $newRestaurant->contact_number = $request->contact_number;
        $newRestaurant->status = "1";

        $newRestaurant->save();
        $hotelId = $newRestaurant->id;
        if ($newRestaurant) {

            $path = public_path('uploads/restaurants/'.$request->name);
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $count = 0;
            foreach($request->file('restaurant_images') as $key => $file)
            {

                $imageName = time(). ++$count.'.'.$request->restaurant_images[$key]->getClientOriginalExtension();
                $request->restaurant_images[$key]->move($path, $imageName);
                $db_path = 'uploads/restaurants/'.$request->name.'/'.$imageName;
                $addRestaurantImages = Gallery::create([
                    'restaurant_id' => $hotelId,
                    'file_path' => $db_path,
                ]);

            }

            if(isset($addRestaurantImages)){

                return redirect()->route('restaurants.index')->with('message','Restaurant Added Succesfully');

            }

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $updateRestaurant = Restaurant::find($id);
        $updateRestaurant->name = $request->name;
        $updateRestaurant->address = $request->address;
        $updateRestaurant->number_of_tables = $request->number_of_tables;
        $updateRestaurant->restaurant_ratings = $request->restaurant_ratings;
        $updateRestaurant->restaurant_description = $request->restaurant_description;
        $updateRestaurant->manager_name = $request->manager_name;
        $updateRestaurant->manager_contact_number = $request->manager_contact_number;
        $updateRestaurant->contact_number = $request->contact_number;
        $updateRestaurant->status = $request->status;
        $query = $updateRestaurant->save();
        if($query){

            return redirect()->route('restaurants.index')->with('message','Hotel Updated Succesfully');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurants = Restaurant::find($id);
        $restaurants->status = "3"; //status 3 means soft delete
        $restaurants->save();
        if($restaurants) {

            return redirect()->route('restaurants.index')->with('message','Restaurant Deleted Succesfully');

        }
    }
}
