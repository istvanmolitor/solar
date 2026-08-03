<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/szolgaltatasok', 'pages.services')->name('services');
Route::view('/palyazatok', 'pages.grants')->name('grants');
Route::view('/rolunk', 'pages.about')->name('about');
Route::view('/kapcsolat', 'pages.contact')->name('contact');
