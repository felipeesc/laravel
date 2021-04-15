<?php

Route::get('/', function () {
    dump(\Request::getMethod());
    return view('welcome');
});
