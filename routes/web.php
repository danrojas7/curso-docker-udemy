<?php

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function (Request $request) {
    $email = App\Email::updateOrCreate($request->all());
    return sprintf('Thanks for submitting your email, %s! <a href="/">home</a>', $email->email);
});

?>