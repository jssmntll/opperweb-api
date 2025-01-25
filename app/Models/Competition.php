<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function athletes(): HasMany
    {
        return $this->hasMany(
            related: User::class,
            foreignKey: 'competition_id',
            localKey: 'id',
        );
    }
}
