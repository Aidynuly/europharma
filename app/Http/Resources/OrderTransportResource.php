<?php

namespace App\Http\Resources;

use App\Models\Transport;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderTransportResource extends JsonResource
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
            'order_id'  =>  $this->order_id,
            'transport'  =>  new TransportResource(Transport::find($this->transport_id)),
            'type'  =>  $this->type,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
        ];
    }
}
