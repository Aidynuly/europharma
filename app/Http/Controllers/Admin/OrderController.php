<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderImage;
use App\Models\OrderStatus;
use App\Models\Point;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use function Sodium\add;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();

        return view('admin.order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::get();
        $employees = Employee::get();
        $users=  User::get();

        return view('admin.order.create', [
            'cities'    =>  $cities,
            'employees' =>  $employees,
            'users'     =>  $users,
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
        $fromCity = City::find($request['from_city']);
        $toCity = City::find($request['to_city']);
        $order = Order::create([
            'description'   =>  $request['description'],
            'from'  =>  $fromCity->name,
            'to'    =>  $toCity->name,
            'from_lat'  =>  '1111',
            'from_long'  =>  '1111',
            'to_lat'  =>  '1111',
            'to_long'  =>  '1111',
            'status'    =>  $request['status'],
            'employee_id'   =>  $request['employee'],
            'start_date'    =>  $request['start_date'],
            'end_date'      =>  $request['end_date'],
            'price'     =>  $request['price'],
            'from_city_id'  =>  $request['from_city'],
            'to_city_id'  =>  $request['to_city'],
        ]);
        $images = $request['images'];
        foreach ($images as $image) {
            $img = $this->uploadImage($image);
            OrderImage::create([
                'order_id'  =>  $order['id'],
                'path'      =>  $img,
            ]);
        }
        return redirect()->route('orders.index', ['orders' => Order::get()])->with('Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $orderStatuses = OrderStatus::whereOrderId($id)->get();
        $images = OrderImage::whereOrderId($id)->get();
        $points = Point::whereOrderId($id)->get();

        return view('admin.order.show', [
            'order' =>  $order,
            'statuses'  =>  $orderStatuses,
            'images'    =>  $images,
            'points'    =>  $points,
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getLatLong($address)
    {
        $apiKey = "947b28ef-0fe1-438f-a8aa-f35cfc65e50d";
        $address = 'Москва, Тверская, д.7';

        $ch = curl_init("https://geocode-maps.yandex.ru/1.x/?apikey=$apiKey&format=json&geocode=" . urlencode($address));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);

        $res = json_decode($res, true);
        dd($res);
    }
}
