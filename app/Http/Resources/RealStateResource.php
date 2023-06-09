<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RealStateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->real_state_type,
            // 'street' => $this->street,
            // 'external_number' => $this->external_number,
            // 'internal_number' => $this->internal_number,
            // 'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'country' => $this->country,
            // 'rooms' => $this->rooms,
            // 'bathrooms' => $this->bathrooms,
            // 'comments' => $this->comments
        ];
    }

    // public function with($request){
    //     return [
    //         'res' =>true
    //     ];
    // }
}
