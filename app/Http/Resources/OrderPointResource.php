<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderPointResource extends JsonResource
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
            'name'  =>  $this->name,
            'address'   =>  $this->address,
            'status'    =>  $this->status,
            'date'  =>  $this->date,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
            'products'  =>  $products = ProductResource::collection(Product::wherePointId($this->id)->get()),
            'count_products'    =>  count($products),
        ];
    }
}
