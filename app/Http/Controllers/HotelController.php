<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Hotel,Gallery};
use Datatables,File;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = Hotel::all();
        return view('hotels.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->hotel_images);
        $request->validate([
            "name" => "required",
            "address" => "required",
            "contact_number" => "required",
            "manager_name" => "required",
            "hotel_description" => "required",
            "manager_contact_number" => "required",
            "number_of_rooms" => "required",
            "hotel_ratings" => "required",
            "hotel_images" => "required",
        ]);

        $newHotel = new Hotel;

        $newHotel->name = $request->name;
        $newHotel->address = $request->address;
        $newHotel->number_of_rooms = $request->number_of_rooms;
        $newHotel->hotel_ratings = $request->hotel_ratings;
        $newHotel->hotel_description = $request->hotel_description;
        $newHotel->manager_name = $request->manager_name;
        $newHotel->manager_contact_number = $request->manager_contact_number;
        $newHotel->contact_number = $request->contact_number;
        $newHotel->status = "1";

        $newHotel->save();
        $hotelId = $newHotel->id;
        if ($newHotel) {

            $path = public_path('uploads/hotels/'.$request->name);
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $count = 0;
            foreach($request->file('hotel_images') as $key => $file)
            {

                $imageName = time(). ++$count.'.'.$request->hotel_images[$key]->getClientOriginalExtension();
                $request->hotel_images[$key]->move($path, $imageName);
                $db_path = 'uploads/hotels/'.$request->name.'/'.$imageName;
                $addHotelImages = Gallery::create([
                    'hotel_id' => $hotelId,
                    'file_path' => $db_path,
                ]);

            }

            if(isset($addHotelImages)){

                return redirect()->route('hotels.index')->with('message','Hotel Added Succesfully');

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

        $updateHotel = Hotel::find($id);
        $updateHotel->name = $request->name;
        $updateHotel->address = $request->address;
        $updateHotel->number_of_rooms = $request->number_of_rooms;
        $updateHotel->hotel_ratings = $request->hotel_ratings;
        $updateHotel->hotel_description = $request->hotel_description;
        $updateHotel->manager_name = $request->manager_name;
        $updateHotel->manager_contact_number = $request->manager_contact_number;
        $updateHotel->contact_number = $request->contact_number;
        $updateHotel->status = $request->status;
        $query = $updateHotel->save();
        if($query){

            return redirect()->route('hotels.index')->with('message','Hotel Updated Succesfully');


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
        $hotel = Hotel::find($id);
        $hotel->status = "3"; //status 3 means soft delete
        $hotel->save();
        if($hotel) {

            return redirect()->route('hotels.index')->with('message','Hotel Deleted Succesfully');

        }
    }
}
