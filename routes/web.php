<?php

use Illuminate\Support\Facades\Route;


if ( auth()->check() ) {
    Route::redirect('/app', '/app/login');
}