<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'about' => $this->about,
            'avatar_url' => $this->avatar_url,
            'subscriptions_count' => $this->subscriptions_count,
            'subscriber_count' => $this->subscriber_count,
        ];
    }
}
