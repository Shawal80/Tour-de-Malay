<?php

namespace App\Http\Controllers;

use App\Models\{TourSpot,Gallery};
use Illuminate\Http\Request;
use Datatables,File;


class TourSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TourSpot::all();
        return view('tour_spots.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tour_spots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // dd($request->restaurant_images);
         $request->validate([
            "name" => "required",
            "address" => "required",
            "spot_description" => "required",
            "spot_ratings" => "required",
            "tour_spot_images" => "required",
        ]);

        $newSpot = new TourSpot;

        $newSpot->name = $request->name;
        $newSpot->address = $request->address;
        $newSpot->spot_ratings = $request->spot_ratings;
        $newSpot->spot_description = $request->spot_description;
        $newSpot->status = "1";

        $newSpot->save();
        $hotelId = $newSpot->id;
        if ($newSpot) {

            $path = public_path('uploads/tour_spots/'.$request->name);
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $count = 0;
            foreach($request->file('tour_spot_images') as $key => $file)
            {

                $imageName = time(). ++$count.'.'.$request->tour_spot_images[$key]->getClientOriginalExtension();
                $request->tour_spot_images[$key]->move($path, $imageName);
                $db_path = 'uploads/tour_spots/'.$request->name.'/'.$imageName;
                $addTourSpotImages = Gallery::create([
                    'spot_id' => $hotelId,
                    'file_path' => $db_path,
                ]);

            }

            if(isset($addTourSpotImages)){

                return redirect()->route('tour_spots.index')->with('message','Tour Spot Added Succesfully');

            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TourSpot  $tourSpot
     * @return \Illuminate\Http\Response
     */
    public function show(TourSpot $tourSpot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TourSpot  $tourSpot
     * @return \Illuminate\Http\Response
     */
    public function edit(TourSpot $tourSpot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TourSpot  $tourSpot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            "name" => "required",
            "address" => "required",
            "spot_description" => "required",
            "spot_ratings" => "required",
        ]);
        $updateSpot = TourSpot::find($id);
        $updateSpot->name = $request->name;
        $updateSpot->address = $request->address;
        $updateSpot->spot_ratings = $request->spot_ratings;
        $updateSpot->spot_description = $request->spot_description;
        $updateSpot->status = $request->status;
        $query = $updateSpot->save();
        if($query){

            return redirect()->route('tour_spots.index')->with('message','Spot Updated Succesfully');


        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TourSpot  $tourSpot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hotel = TourSpot::find($id);
        $hotel->status = "3"; //status 3 means soft delete
        $hotel->save();
        if($hotel) {

            return redirect()->route('tour_spots.index')->with('message','Spot Deleted Succesfully');

        }
    }
}
