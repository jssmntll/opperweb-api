<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Competitions;

use App\Http\Controllers\Controller;
use App\Services\Competitions\LeaderboardService;

class FinishAthleteController extends Controller
{
    public function __invoke(LeaderboardService $service, string $athlete)
    {
        $service->finishAthlete($athlete);

        return response()->json(
            data: [
                'message' => 'Athlete finished'
            ]
        );
    }
}
