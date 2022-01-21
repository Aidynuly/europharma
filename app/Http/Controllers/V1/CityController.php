<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCity(Request $request)
    {
        $cities = City::all();

        return self::response(200, CityResource::collection($cities), 'Success!');
    }
}
