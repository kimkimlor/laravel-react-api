<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/api/example', function () {
    $data = [
        "name" => "asdf1234",
        "email" => "ads132@gmail.com"
    ];
    return response()->json($data);
});
