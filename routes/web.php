<?php


Route::group(['middleware' => 'auth'], function () {
    Route::livewire('/', 'home')->name('home');
});

Route::group(['middleware' =>'guest'], function () {
    Route::livewire('/login', 'login')->name('login');
    Route::livewire('/register', 'register')->name('register');
});
