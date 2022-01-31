<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\PasswordUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\VerifyUserRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\UserResource;
use App\Models\Car;
use App\Models\Order;
use App\Models\Transport;
use App\Models\User;
use App\Models\UserDocument;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function registerUser(RegisterUserRequest $request)
    {
        $user = User::wherePhone($request['phone'])->first();
        if (!$user) {
            $user = User::create([
                'phone'         =>  $request['phone'],
//                'code'          =>  random_int(10000, 99999),
                'code'          =>  11111,
            ]);

            return self::response(200, $user, 'Success!');
        }

        return self::response(400, null, 'User already exist!');
    }

    public function passwordUser(PasswordUserRequest $request)
    {
        $user = User::wherePhone($request['phone'])->where('actived', false)->first();
        if ($user['code'] == $request['code']) {
            $user->update([
                'access_token'  => mb_strtoupper(Str::random(40)),
                'promocode'     =>  mb_strtoupper(Str::random(5)),
                'phone_verified'    =>  Carbon::now(),
            ]);

            return self::response(200, $user, 'Success!');
        }

        return self::response(400, null, 'Wrong code');
    }

    public function registerConfirm(Request $request)
    {
        if (!$request->bearerToken()) {
            return self::response(400, null, 'Token!');
        }
        if ($request['password'] && $request['promocode']) {
            $user = User::whereAccessToken($request->bearerToken())->whereNotNull('phone_verified')
                ->where('promocode', $request['promocode'])
                ->first();
            if ($user) {
                $user->update([
                    'password' => Hash::make($request['password']),
                    'access_token' => mb_strtoupper(Str::random(40)),
                ]);

                return self::response(200, $user, 'Success!');
            }
        }
        return self::response(400, null, 'Promocode wrong!');
    }

    public function loginUser(LoginUserRequest $request)
    {
        $user = User::wherePhone($request['phone'])->first();
        if (Hash::check($request['password'], $user['password'])) {
            return self::response(200, $user, 'Success!');
        }

        return self::response(400, null, 'Wrong password!');
    }

    public function verify(VerifyUserRequest $request)
    {
        if (!$request->bearerToken()) {
            return self::response(400, null, 'Token!');
        }
        $user = User::whereAccessToken($request->bearerToken())->first();
        if ($user) {
            $user->update([
                'name'      =>  $request['name'],
                'surname'   =>  $request['surname'],
                'date'      =>  $request['date'],
                'iin'       =>  $request['iin'],
            ]);

            $userDocument = UserDocument::create([
                'user_id'       =>  $user['id'],
                'doc_number'    =>  $request['doc_number'],
                'deadline'      =>  Carbon::createFromFormat('Y-m-d', $request['deadline']),
                'image_1'       =>  $request['image_1'],
                'image_2'       =>  $request['image_2'],
                'person_image'  =>  $request['person_image'],
            ]);

            $userTransport = Transport::create([
                'car_id'        =>  $request['car_id'],
                'user_id'       =>  $user['id'],
                'car_date'      =>  Carbon::createFromFormat('Y-m-d', $request['car_date']),
                'dimensions'    =>  $request['dimensions'],
                'number'        =>  $request['number'],
                'registration'  =>  $request['registration'],
                'image'         =>  $request['image'],
            ]) ;

            return self::response(200, $user, 'Success!');
        }

        return self::response(400, null, 'User not found!');
    }

    public function getProfile(Request $request)
    {
        $user = $request->get('user');

        return self::response(200, new UserResource($user), 'Success');
    }

    public function getDocument(Request $request)
    {
        $user = $request->get('user');

        return self::response(200, new UserResource($user), 'Success!');
    }
}
