<?php

declare(strict_types=1);

namespace App\Services\Competitions;

use App\Models\Competition;
use App\Models\Leaderboard;
use Carbon\Carbon;

class LeaderboardService
{
    public function getAllAthletesFinished()
    {
        return Leaderboard::select('id', 'user_id', 'position', 'duration')
            ->where('finished', true)
            ->get();
    }

    public function startAthlete(string $id, int $competitionId = null): void
    {
        if (null !== $competitionId) {
            $competition = Competition::select('id')->where('id', $competitionId)->first();
        } else {
            $competition = Competition::select('id')->where('name', 'Swimming')->first();
        }

        Leaderboard::create([
            'user_id' => $id,
            'started_time' => now(),
            'competition_id' => $competition->id
        ]);
    }

    public function finishAthlete(string $athlete_id): void
    {
        $leadeboardAthlete = Leaderboard::where('user_id', $athlete_id)->first();

        $leadeboardAthlete->finished_time = now();
        $leadeboardAthlete->finished = true;
        $leadeboardAthlete->position = $this->getAllAthletesFinished()->count() + 1;

        $leadeboardAthlete->update();
    }

    public static function calculateAthleteDurationTime(string $athlete_id)
    {
        $athleteData = Leaderboard::where('user_id', $athlete_id)->first();

        if ($athleteData->started_time && $athleteData->finished_time) {
            $start = Carbon::parse($athleteData->started_time);
            $finish = Carbon::parse($athleteData->finished_time);
            $durationInSeconds = $finish->diffInSeconds($start);

            return $durationInSeconds;
        }
    }
}
