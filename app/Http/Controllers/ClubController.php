<?php

namespace App\Http\Controllers;

use App\Models\{Club,Gallery};
use Illuminate\Http\Request;
use File;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Club::all();

        return view('clubs.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "address" => "required",
            "manager_name" => "required",
            "club_description" => "required",
            "manager_contact_number" => "required",
            "opens_at" => "required",
            "close_at" => "required",
            "club_ratings" => "required",
            "club_images" => "required",
        ]);

        $addClub = new Club;
        $addClub->name = $request->name;
        $addClub->address = $request->address;
        $addClub->club_ratings = $request->club_ratings;
        $addClub->club_description = $request->club_description;
        $addClub->manager_name = $request->manager_name;
        $addClub->manager_contact_number = $request->manager_contact_number;
        $addClub->opens_at = $request->opens_at;
        $addClub->close_at = $request->close_at;
        $addClub->status = "1";

        $addClub->save();
        $clubId = $addClub->id;
        if ($addClub) {

            $path = public_path('uploads/clubs/'.$request->name);
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $count = 0;
            foreach($request->file('club_images') as $key => $file)
            {

                $imageName = time(). ++$count.'.'.$request->club_images[$key]->getClientOriginalExtension();
                $request->club_images[$key]->move($path, $imageName);
                $db_path = 'uploads/clubs/'.$request->name.'/'.$imageName;
                $addClubImages = Gallery::create([
                    'club_id' => $clubId,
                    'file_path' => $db_path,
                ]);

            }

            if(isset($addClubImages)){

                return redirect()->route('clubs.index')->with('message','Club Added Succesfully');

            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateClub = Club::find($id);
        $updateClub->name = $request->name;
        $updateClub->address = $request->address;
        $updateClub->club_ratings = $request->club_ratings;
        $updateClub->club_description = $request->club_description;
        $updateClub->manager_name = $request->manager_name;
        $updateClub->manager_contact_number = $request->manager_contact_number;
        $updateClub->opens_at = $request->opens_at;
        $updateClub->close_at = $request->close_at;
        $updateClub->status = $request->status;
        $query = $updateClub->save();
        if($query){

            return redirect()->route('clubs.index')->with('message','Club Updated Succesfully');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);
        $club->status = "3"; //status 3 means soft delete
        $club->save();
        if($club) {

            return redirect()->route('clubs.index')->with('message','Club Deleted Succesfully');

        }
    }
}
