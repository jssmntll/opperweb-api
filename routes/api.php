<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get(
    uri: '/competitions/athletes',
    action: App\Http\Controllers\Api\Competitions\GetAllAthletesController::class
)->name('athletes');

Route::post(
    uri: '/competitions/athlete/{id}/start',
    action: App\Http\Controllers\Api\Competitions\StartAthleteController::class
)->name('start-athlete');

Route::put(
    uri: '/competitions/athlete/{id}/finish',
    action: App\Http\Controllers\Api\Competitions\FinishAthleteController::class
)->name('finish-athlete');

Route::get(
    uri: '/competitions/leaderboard',
    action: App\Http\Controllers\Api\Competitions\LeaderboardController::class
)->name('leaderboard');
