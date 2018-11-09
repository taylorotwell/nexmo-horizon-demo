<?php

use App\Jobs\SlowTask;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/queue/{amount}', function ($amount) {
    for ($i = 0; $i < $amount; $i++) {
        SlowTask::dispatch()->onQueue('nexmo-demo');
    }
});
