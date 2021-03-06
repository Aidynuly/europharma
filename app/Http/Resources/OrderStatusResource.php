<?php

namespace App\Http\Resources;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderStatusResource extends JsonResource
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
            'order' =>  new OrderResource(Order::find($this->order_id)),
            'user'  =>  new UserResource(User::find($this->user_id)),
            'status'    =>  $this->status,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
        ];
    }
}
