<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use HasUuids;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'name',
        'competition_id'
    ];

    public function competition(): BelongsTo
    {
        return $this->belongsTo(
            related: Competition::class,
            foreignKey: 'competition_id',
            ownerKey: 'id',
        );
    }

    public function leaderboard(): BelongsTo
    {
        return $this->belongsTo(
            related: Leaderboard::class,
            foreignKey: 'id',
            ownerKey: 'user_id',
        );
    }
}
