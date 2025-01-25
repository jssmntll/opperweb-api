<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\LeaderboardObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy([LeaderboardObserver::class])]
class Leaderboard extends Model
{
    protected $table = 'leaderboard';

    protected $fillable = [
        'position',
        'started_time',
        'finished_time',
        'duration',
        'finished',
        'user_id',
        'competition_id'
    ];

    protected function casts(): array
    {
        return [
            'finished' => 'boolean',
        ];
    }

    public function athletes(): HasMany
    {
        return $this->hasMany(
            related: User::class,
            foreignKey: 'id',
            localKey: 'user_id',
        );
    }
}
