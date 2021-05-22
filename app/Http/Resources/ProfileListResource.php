<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileListResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var User|ProfileListResource $this */
        return [
            'id'   => $this->getRouteKey(),
            'name' => $this->name
        ];
    }
}
