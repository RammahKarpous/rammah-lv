<?php

use Illuminate\Support\Facades\Route;


if ( auth()->check() ) {
    Route::redirect('/app', '/app/login');
}

Route::get('/do-not-track', function () {
    session()->put('doNotTrack', true);
    return redirect('/');
});