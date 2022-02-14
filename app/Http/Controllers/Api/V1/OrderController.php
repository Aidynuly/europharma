<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryOrderRequest;
use App\Http\Requests\PointFinishRequest;
use App\Http\Resources\OrderPointResource;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderStatusResource;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Point;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrder(Request $request)
    {
        $orders = Order::whereFromCityId($request['city_id'])->where('status', Order::STATUS_SEND)->get();
        if (count($orders) != 0) {
            return self::response(200, OrderResource::collection($orders), 'Success!');
        }

        return self::response(400, null, 'Not found any orders');
    }

    public function acceptOrder(Request $request)
    {
        $user = $request->get('user');
        $order = Order::find($request['order_id']);
        $order->status = Order::STATUS_ACCEPT;
        $order->save();
        $orderStatus = OrderStatus::create([
            'order_id'  =>  $order['id'],
            'user_id'   =>  $user['id'],
            'status'    =>  OrderStatus::STATUS_ACCEPT,
        ]);

        return self::response(200, new OrderResource($order), 'Successfully accepted!');
    }

    public function acceptedOrders(Request $request)
    {
        $user = $request->get('user');
        $orders = OrderStatus::whereUserId($user['id'])->get();
        if (count($orders) != 0) {
            return self::response(200, OrderStatusResource::collection($orders), 'Success!');
        }

        return self::response(400, null, 'Not found!');
    }

    public function getPoint(Request $request)
    {
        $order = Order::find($request['order_id']);

        return self::response(200, new OrderResource($order), 'Success!');
    }

    public function getProduct(Request $request)
    {
        $point = Point::find($request['point_id']);

        return self::response(200, new OrderPointResource($point), 'Success!');
    }

    public function pointFinish(PointFinishRequest $request)
    {
        $product = Product::find($request['product_id']);
        if ($product['code'] == $request['code']) {
            $product->status = Product::STATUS_FINISH;
            $product->save();

            return self::response(200, $product, 'Success');
        }

        return self::response(400, null, 'Wrong code');
    }

    public function historyOrder(HistoryOrderRequest $request)
    {
        $user = $request->get('user');
        $orders = OrderStatus::whereUserId($user['id'])->get();
        if (isset($request['start_date']) && isset($request['end_date'])) {
            $orders->where('created_at', '<', $request['start_date'])->where('created_at', '>', $request['end_date']);
        }

        return self::response(200, OrderStatusResource::collection($orders), 'good');
    }


    //Web

    public function getAll(Request $request)
    {
        $orders = Order::get();
        return self::response(200, OrderResource::collection($orders), 'Success!');
    }
}
