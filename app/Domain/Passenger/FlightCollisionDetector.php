<?php

namespace App\Domain\Passenger;

use App\Models\Passenger;
use Illuminate\Support\Facades\DB;

class FlightCollisionDetector { 
    public static function run(Passenger $passenger) {
        $flights = $passenger->flights;

        foreach($flights as $flightOne)
        {
            foreach($flights as $flightTwo)
            {
                if($flightOne->id == $flightTwo->id) break;

                if($flightOne->arrival_date->gt($flightTwo->departure_date)) return "Collision!";
                if($flightTwo->arrival_date->gt($flightOne->departure_date)) return "Collision!";
            }
        }
    }
}
