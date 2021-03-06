<?php

namespace App\Http\Resources;

use App\Models\City;
use App\Models\Transport;
use App\Models\UserDocument;
use App\Models\UserTransport;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'    =>  $id = $this->id,
            'city'  =>  $this->city_id,
            'phone' =>  $this->phone,
            'name'  =>  $this->name,
            'surname'   =>  $this->surname,
            'date'      =>  $this->date,
            'iin'   =>  $this->iin,
            'role'  =>  $this->role,
            'type'  =>  $this->type,
            'avatar'    =>  $this->avatar,
            'token' =>  $this->access_token,
            'promocode' =>  $this->promocode,
            'actived'   => (bool)$this->actived,
            'phone_verified'    =>  $this->phone_verified,
            'created_at'    =>  $this->created_at,
            'updated_at'    =>  $this->updated_at,
            'documents' =>  new DocumentResource(UserDocument::whereUserId($id)->first()),
            'transport' =>  new TransportResource(Transport::where('user_id', $id)->first()),
        ];
    }
}
