<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function getCar(Request $request)
    {
        $cars = Car::all();

        return self::response(200, $cars, 'Success!');
    }
}
