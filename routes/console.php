<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');




/*Schedule::call(function () {
    \Log::info('this is from scheduler');
})->everyFiveSeconds();*/


//Schedule::command('app:log-info-command')->everySecond();