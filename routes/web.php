<?php

use App\Events\MessageSent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    broadcast(new MessageSent('Hello from Laravel Reverb!'));

    return view('welcome');
});

Route::get('/broadcast', function () {
    broadcast(new MessageSent('New Message Sent!'));
});
