<?php

Route::get('/', function () {
    return 'Hello!';
});

Route::get('/users', 'UsersController@index');
