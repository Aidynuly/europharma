<?php

namespace App\Http\Resources;

use App\Models\Car;
use App\Models\MarkModel;
use Illuminate\Http\Resources\Json\JsonResource;

class TransportResource extends JsonResource
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
            'model'   =>  MarkModel::find($this->mark_model_id),
            'car_date'  =>  $this->car_date,
            'dimensions'    =>  $this->dimensions,
            'number'        =>  $this->number,
            'registration'  =>  $this->registration,
            'image' =>  $this->image,
        ];
    }
}
