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

// % HOME % 
Route::get('/', function () {
    return view('home');
})-> name('home-page');

// % PRODUCTS % 
Route::get('/products', function () {
	$products_pipe = [
		'prodotti' => config('query_products'),
		'extra' => 'altre info'
	];
    return view('products', $products_pipe);
})-> name('products-page');

// % NEWS % 
Route::get('/news', function () {
    return view('news');
})-> name('news-page');

// % DETTAGLIO % 
Route::get('/details/{id}', function ($id) {
	$details_pipe = [
		'dettaglio' => config('query_products')[$id],
		'id' => $id
	];
    return view('details',$details_pipe);
})-> name('details-page');

