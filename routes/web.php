	<?php

	use Illuminate\Support\Facades\Route;

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

	//Route::get('/pages/show/{e}', [App\Http\Controllers\Page::class, 'showOne']); 
	//Route::get('/pages/all', [App\Http\Controllers\Page::class, 'showAll']);
	//Route::get('/test/show/{param}', [App\Http\Controllers\Page::class, 'showParam']);
	//Route::get('show', [App\Http\Controllers\testcontr::class, 'show']);
	//Route::get('/test/showTwo', [App\Http\Controllers\testcontr::class, 'showTwo']);
	//Route::get('/test/show1', [App\Http\Controllers\testcontr::class, 'show1']);
	//Route::get('/test/show2', [App\Http\Controllers\testcontr::class, 'show2']);
	//Route::get('/showmass', [App\Http\Controllers\testcontr::class, 'showmass']);
	//Route::get('/test/show', [App\Http\Controllers\testcontr::class, 'showmass']);
	Route::get('/test/testform', [App\Http\Controllers\Post::class, 'form']);

	?>


	
