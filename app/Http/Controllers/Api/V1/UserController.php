<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\PasswordUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\VerifyUserRequest;
use App\Http\Resources\UserResource;
use App\Models\Car;
use App\Models\Transport;
use App\Models\User;
use App\Models\UserDocument;
use Auth;
use Cache;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Storage;

class UserController extends Controller
{
    public function registerUser(RegisterUserRequest $request)
    {
        $code = 12345;
        Cache::put($request['phone'], $code, now()->addMinutes(3));

        return self::response(200, '', 'Смс с кодом 12345 отправлен');
    }

    public function passwordUser(PasswordUserRequest $request)
    {
        if (!Cache::has($request->get('phone'))) {
            return self::response(400, '', 'неверный номер');
        }
        $cache = Cache::get($request->get('phone'));
        if ($request['code'] == $cache) {
            $user = User::create([
                'phone' => $request['phone'],
//                'access_token' => mb_strtoupper(Str::random(40)),
                'phone_verified'    =>  Carbon::now(),
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'user'  =>  new UserResource($user),
                'token' =>  $token,
                'message'   =>  "Success"
            ],200);
        }

        return self::response(400, null, 'Wrong code!');
    }

    public function registerConfirm(Request $request)
    {
        $user = auth()->user();
        if ($user) {
            $user->update([
                'password' => Hash::make($request['password']),
                'promocode' =>  $request['promocode'] ?? null,
            ]);

            return self::response(200, new UserResource($user), 'Success!');
        }

        return self::response(400, null, 'Token wrong!');
    }

    public function loginUser(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->only('phone', 'password'))) {
            return self::response(400, '', 'неверный телефон номер или пароль');
        }

        $user = User::wherePhone($request['phone'])->firstOrFail();
        if ($request->has('device_token')) {
            $user->device_token = $request->get('device_token');
            $user->save();
        }
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token'  =>  $token,
            'user'      =>  new UserResource($user),
        ]);
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
                'image_1'       =>  $this->uploadImage($request['image_1']),
                'image_2'       =>   $this->uploadImage($request['image_2']),
                'person_image'  =>   $this->uploadImage($request['person_image']),
            ]);

            $userTransport = Transport::create([
                'car_id'        =>  $request['mark_model_id'],
                'user_id'       =>  $user['id'],
                'car_date'      =>  Carbon::createFromFormat('Y-m-d', $request['car_date']),
                'dimensions'    =>  $request['dimensions'],
                'number'        =>  $request['number'],
                'registration'  =>  $request['registration'],
                'image'         =>  $this->uploadImage($request['image'])
            ]) ;

            return self::response(200, new UserResource($user), 'Success!');
        }

        return self::response(400, null, 'User not found!');
    }

    public function getProfile(Request $request)
    {
        $user = auth()->user();

        return self::response(200, new UserResource($user), 'Success');
    }

    public function getDocument(Request $request)
    {
        $user = $request->get('user');

        return self::response(200, new UserResource($user), 'Success!');
    }

    public function logout(Request $request)
    {
        Auth::user()->tokens()->delete();

        return self::response(200, null, 'Successfully logout!');
    }

    public function getAll(Request $request)
    {
        $users = User::get();

        return self::response(200, UserResource::collection($users), 'Success');
    }
}
