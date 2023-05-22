<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
          'first_name' => $this->first_name,
          'last_name' => $this->last_name,
          'email' => $this->email,
          'profile' => $this->avatar,
          'status' => $this->is_active ? "Active" : "Deactive",
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
        ];
    }

}
