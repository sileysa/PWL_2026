<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='John') {
    return 'Sileysa Faedatul Nuraini '. $name;
});
