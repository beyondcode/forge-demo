<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Some changes
Route::get('/', function () {
    return redirect()->to('/admin/posts');
});

Route::get('/log', function () {
    Log::info('This is an info log.');
    
    Log::warning('This is a warning.');

    Log::error('This is an error.');
});

Route::resource('admin/posts', 'Admin\\PostsController');
