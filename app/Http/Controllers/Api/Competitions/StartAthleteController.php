<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Competitions;

use App\Http\Controllers\Controller;
use App\Services\Competitions\LeaderboardService;

class StartAthleteController extends Controller
{
    public function __invoke(LeaderboardService $service, string $athlete)
    {
        $service->startAthlete($athlete);

        return response()->json(
            data: ['message' => 'Athlete started swimming']
        );
    }
}
