<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('leaderboard', function (Blueprint $table): void {
            $table->id();

            $table->integer('position')->nullable();
            $table->dateTime('started_time');
            $table->dateTime('finished_time')->nullable();
            $table->float('duration')->nullable();
            $table->boolean('finished')->default(false);

            $table->foreignUuid('user_id')->references('id')->on('users');
            $table->foreignId('competition_id')->constrained();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leaderboards');
    }
};
