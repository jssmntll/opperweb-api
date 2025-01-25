<?php

declare(strict_types=1);

namespace App\Services\Competitions;

use App\Models\User;

class AthleteService
{
    public function getAllAthletes()
    {
        return User::all();
    }
}
