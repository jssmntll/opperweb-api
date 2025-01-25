<?php

declare(strict_types=1);

namespace App\Http\Resources\Api\Competitions;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaderboardResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'athlete' => $this->user_id,
            'position' => $this->position,
            'duration' => $this->duration,
        ];
    }
}
