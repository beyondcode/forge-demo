<?php

use App\Jobs\HorizonDemo;

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

Route::get('/', function () {
    return redirect()->to('/admin/posts');
});

Route::get('/queue', function () {
	for ($i = 0; $i < rand(10,30); $i++) {
		dispatch(new HorizonDemo()));
	}
});

Route::resource('admin/posts', 'Admin\\PostsController');
