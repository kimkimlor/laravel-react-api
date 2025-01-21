<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $path = public_path('dist/index.html');

    if (File::exists($path)) {
        return File::get($path);
    }

    abort(404, 'React build not found.');
});
