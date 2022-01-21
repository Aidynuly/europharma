<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
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
            'doc_number'    =>  $this->doc_number,
            'deadline'  =>  $this->deadline,
            'image_1'   =>  $this->image_1,
            'image_2'   =>  $this->image_2,
            'person_image'  =>  $this->person_image,
        ];
    }
}
