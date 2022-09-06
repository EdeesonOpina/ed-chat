<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('index');
});

Route::post('/send-message', function(Request $request){
    event(
        new Message(
            $request->username, 
            $request->message
        )
    );

    return ['success' => true];
});