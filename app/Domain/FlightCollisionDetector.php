<?php

namespace App\Domain\Passenger;

use App\Models\Passenger;

class FlightCollisionDetector { 
    public static function run(Passenger $passanger) {
        $passanger->dates;
        return "Collision!";
    }
}
