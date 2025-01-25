<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Competitions;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Competitions\AthletesResource;
use App\Services\Competitions\AthleteService;

class GetAllAthletesController extends Controller
{
    public function __invoke(AthleteService $service)
    {
        return AthletesResource::collection(
            resource: $service->getAllAthletes(),
        );
    }
}
