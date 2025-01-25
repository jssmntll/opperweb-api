<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Competitions;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Competitions\LeaderboardResource;
use App\Services\Competitions\LeaderboardService;

class LeaderboardController extends Controller
{
    public function __invoke(LeaderboardService $service)
    {
        return LeaderboardResource::collection(
            resource: $service->getAllAthletesFinished()
        );
    }
}
