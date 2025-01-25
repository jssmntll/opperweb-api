<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Leaderboard;
use App\Services\Competitions\LeaderboardService;

class LeaderboardObserver
{
    public function created(Leaderboard $leaderboard): void
    {
    }

    public function updated(Leaderboard $leaderboard): void
    {
        $durationTime = LeaderboardService::calculateAthleteDurationTime($leaderboard->user_id);

        if ($leaderboard->wasChanged('finished')) {
            $leaderboard->duration = $durationTime;
            $leaderboard->updateQuietly();
        }
    }

    public function deleted(Leaderboard $leaderboard): void
    {
    }

    public function restored(Leaderboard $leaderboard): void
    {
    }

    public function forceDeleted(Leaderboard $leaderboard): void
    {
    }
}
