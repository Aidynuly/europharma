<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\City;
use App\Models\OrderStatus;
use App\Models\Transport;
use App\Models\User;
use App\Models\UserDocument;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::get();
        $cars = Car::get();

        return view('admin.user.create', [
            'cities' => $cities,
            'cars'  =>  $cars,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = User::create([
            'city_id'   =>  $request['inputCity'],
            'phone'     =>  $request['inputPhone'],
            'password'  =>  \Hash::make($request['inputPassword']),
            'name'      =>  $request['inputName'],
            'surname'   =>  $request['inputSurname'],
            'date'      =>  $request['inputDate'],
            'iin'       =>  $request['inputIIN'],
            'avatar'    =>  'avatar/' . $request['inputPhoto'],
            'access_token'  =>  mb_strtoupper(\Str::random(40)),
            'code'      =>  11111,
            'promocode' =>  mb_strtoupper(\Str::random(6)),
            'actived'   =>  true,
            'phone_verified'    =>  Carbon::now(),
            'created_at'    =>  Carbon::now(),
            'updated_at'    =>  Carbon::now(),
        ]);

        $userDocument = UserDocument::create([
            'user_id'   =>  $user['id'],
            'doc_number'    =>  $request['doc_number'],
            'deadline'  =>  $request['deadline'],
            'image_1'   =>  $request['image_1'],
            'image_2'   =>  $request['image_2'],
            'person_image'  =>  $request['person_image'],
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ]);

        $userTransport = Transport::create([
            'car_id'    =>  $request['car'],
            'user_id'   =>  $user['id'],
            'car_date'  =>  $request['car_date'],
            'dimensions'=>  $request['dimension'],
            'number'    =>  $request['number'],
            'image' =>  $request['car_image'],
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ]);

        return redirect()->route('users.show', $user['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $userDocument = UserDocument::whereUserId($id)->first();
        $userTransport = Transport::whereUserId($id)->first();
        $finished = OrderStatus::whereUserId($id)->where('status', OrderStatus::STATUS_ACCEPT)->count();
        $accepted = OrderStatus::whereUserId($id)->where('status', OrderStatus::STATUS_PROCESS)->count();

        return view('admin.user.show', [
            'user' => $user,
            'document' => $userDocument ?? null,
            'transport' => $userTransport ?? null,
            'accepted'  =>  $accepted,
            'finished'  =>  $finished,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request['inputName'];
        $user->surname = $request['inputSurname'];
        $user->iin = $request['inputIIN'];
        $user->phone = $request['inputPhone'];
        $user->save();

        return redirect()->route('users.show', $user['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index', ['users' => User::get()]);
    }
}
