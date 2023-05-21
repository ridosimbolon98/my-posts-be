<?php

use Illuminate\Http\Request;


Route::get('/esi', function (Request $request) {
    return response()->json('Ini data');
});