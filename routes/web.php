<?php

use Illuminate\Support\Facades\Route;


Route::post('/users', function () {
    $users = ['ali', 'veli', 'ahmet'];

    return ['users'=>$users, 'status'=>'success'];
})->name('api.users');

Route::get('/index', function () {

    $title = "Ali";



    return view('admin.pages.index2',['title'=>$title]);
});
