<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $competition = \App\Models\Competition::factory()->create([
            'name' => 'Swimming',
        ]);

        \App\Models\User::factory(10)->for($competition)->create();
    }
}
