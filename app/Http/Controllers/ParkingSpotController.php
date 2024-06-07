<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingSpotController extends Controller
{
    public function park($id)
    {
        $spot = ParkingSpot::find($id);
        if($spot){
            $spot->is_occupied = true;
            $spot->save();
            return response()->json(["Message"=>"Parking Spot Occupied"]);
        } else {
            return response()->json(["Message"=>"Parking Spot Available"]);
        }
    }

    public function unpark($id)
    {
        $spot = ParkingSpot::find($id);
        if($spot){
            $spot->is_occupied = false;
            $spot->save();
            return response()->json(["Message"=>"Parking Spot Not Occupied"]);
        } else {
            return response()->json(["Message"=>"Parking Spot Unavailable"]);
        }
    }

    public function list()
    {
        $spot = ParkingSpot::all();
        return response()->json($spot);
    }
}
