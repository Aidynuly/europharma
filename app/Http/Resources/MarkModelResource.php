<?php

namespace App\Http\Resources;

use App\Models\Mark;
use Illuminate\Http\Resources\Json\JsonResource;

class MarkModelResource extends JsonResource
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
            'mark'  =>  Mark::find($this->mark_id),
            'name'  =>  $this->name,
            'icon'  =>  $this->icon,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
        ];
    }
}
