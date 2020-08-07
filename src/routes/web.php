<?php

use App\Events\TestEvent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/broadcast-test', function() {
    event(new TestEvent('The server time is now '));
    /*\Cache::store('redis')->put('Laradock', 'Awesome', 10);*/
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->except(['create', 'store']);
Route::resource('productos', 'ProductController');
Route::resource('categorias', 'CategoryController')->only(['create', 'store', 'index']);
Route::resource('pedidos', 'InvoiceController')->only(['index', 'show', 'edit', 'update']);
