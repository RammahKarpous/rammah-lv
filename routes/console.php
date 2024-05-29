<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::Command("migrate:fresh", function() {
    $this->comment("This is the wrong project (Rammah Karpous front-end project)");
})->describe("Preventing this comment from running");

Artisan::Command("migrate:fresh --seed", function() {
    $this->comment("This is the wrong project (Rammah Karpous front-end project)");
})->describe("Preventing this comment from running");

Artisan::Command("migrate", function() {
    $this->comment("This is the wrong project (Rammah Karpous front-end project)");
})->describe("Preventing this comment from running");