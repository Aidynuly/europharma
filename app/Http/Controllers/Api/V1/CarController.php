<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransportResource;
use App\Models\Car;
use App\Models\MarkModel;
use App\Models\Transport;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function getCar(Request $request)
    {
        $cars = Transport::all();

        return self::response(200, TransportResource::collection($cars), 'Success!');
    }

    public function getModel(Request $request)
    {
        $marks = MarkModel::all();

        return self::response(200, $marks, 'Success!');
    }
}
