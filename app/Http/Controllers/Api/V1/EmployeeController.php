<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTransportRequest;
use App\Http\Requests\EmployeeLoginRequest;
use App\Http\Requests\RegisterEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use App\Models\Transport;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\JsonResponse;
use Request;
use Str;

class EmployeeController extends Controller
{
    public function register(RegisterEmployeeRequest $request): JsonResponse
    {
        $employee = Employee::create([
            'name'  =>  $request['name'],
            'surname'   =>  $request['surname'],
            'phone'     =>  $request['phone'],
            'email'     =>  $request['email'],
            'password'  =>  Hash::make($request['password']),
            'token'     =>  mb_strtoupper(Str::random(40))
        ]);

        return self::response(200, $employee, 'Success!');
    }

    public function login(EmployeeLoginRequest $request): JsonResponse
    {
        $employee = Employee::whereEmail($request['email'])->first();
        if (Hash::check($request['password'], $employee['password'])) {
            return self::response(200, $employee, 'Success!');
        }
        return self::response(400, null, 'Password not correct!');
    }

    public function getAll(Request $request)
    {
        $employees = Employee::get();

        return self::response(200, EmployeeResource::collection($employees), 'Success');
    }

    public function addTransport(AddTransportRequest $request)
    {
        $transport = Transport::create([
            'mark_model_id' =>  $request['mark_model_id'],
            'car_date'  =>  Carbon::createFromFormat('Y-m-d', $request['car_date']),
            'dimensions'    =>  $request['dimensions'],
            'number'        =>  $request['number'],
            'registration'  =>  $request['registration'],
        ]);

        return self::response(200, $transport, 'Success!');
    }
}
