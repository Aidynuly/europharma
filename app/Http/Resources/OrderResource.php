<?php

namespace App\Http\Resources;

use App\Models\City;
use App\Models\Employee;
use App\Models\MarkModel;
use App\Models\OrderImage;
use App\Models\OrderTransport;
use App\Models\Point;
use App\Models\Transport;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'    =>  $this->id,
            'description'   =>  $this->description,
            'from'  =>  $this->from,
            'to'    =>  $this->to,
            'from_lat'  =>  $this->from_lat,
            'from_long' =>  $this->from_long,
            'to_lat'    =>  $this->to_lat,
            'to_long'   =>  $this->to_long,
            'status'    =>  $this->status,
            'employee'  =>  Employee::find($this->employee_id),
            'start_date'    =>  $this->start_date,
            'end_date'  =>  $this->end_date,
            'payment'   =>  $this->payment,
            'from_city_id'  =>  City::find($this->from_city_id),
            'to_city_id'    =>  City::find($this->to_city_id),
            'created_at'    =>  $this->created_at,
//            'images'        =>  OrderImageResource::collection(OrderImage::whereOrderId($this->id)->get()),
            'images'        => $this->images(),
            'points'    =>  $points = OrderPointResource::collection(Point::whereOrderId($this->id)->orderBy('created_at', 'asc')->get()),
            'count_points'  =>  count($points),
            'transport' =>  new OrderTransportResource(OrderTransport::where('order_id', $this->id)->first()),
        ];
    }
}
