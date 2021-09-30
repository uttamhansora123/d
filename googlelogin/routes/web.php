<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\relationcontroller;
use App\Http\Controllers\ncontroller;
use App\Http\Controllers\pages;
use App\Http\Controllers\datacontroller;
use App\Http\Controllers\googlecontroller;
use App\Http\Controllers\csccontroller;
use App\Http\Controllers\tcontroller;
use App\Http\Controllers\jcontroller;
use App\Http\Controllers\PaymentController;

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

Route::get('/hasone',[relationcontroller::class,'hasone']);

Route::get('/notification',[ncontroller::class,'notification']);
Route::post('/notification',[ncontroller::class,'notification']);

Route::get('/snotification',[ncontroller::class,'snotification'])->name('snotification');

Route::get('/{pages}',pages::class)
->name('page')
->where('pages','contacti|noti|termsi');

Route::get('/d',[relationcontroller::class,'d']);
Route::post('/d',[relationcontroller::class,'d']);

Route::get('/v',[relationcontroller::class,'v']);

Route::get('dp',[relationcontroller::class,'dp'])->name('dp');
Route::post('dp',[relationcontroller::class,'dp'])->name('dp');

Route::get('/file',[datacontroller::class,'fileimportexport']);
Route::post('/file',[datacontroller::class,'fileimportexport']);

Route::get('/import',[datacontroller::class,'import'])->name('import');
Route::post('/import',[datacontroller::class,'import'])->name('import');

Route::get('/export',[datacontroller::class,'export'])->name('export');

Route::get('/google',[googlecontroller::class,'google'])->name('google');
Route::post('/google',[googlecontroller::class,'google'])->name('google');

Route::get('/forgot',[googlecontroller::class,'forgot'])->name('forgot');
Route::post('/forgot',[googlecontroller::class,'forgot'])->name('forgot');

Route::post('/state',[csccontroller::class,'state'])->name('state');
Route::post('/c',[csccontroller::class,'c'])->name('c');
Route::get('/city',[csccontroller::class,'city'])->name('city');

Route::get('/t',[tcontroller::class,'t']);
Route::post('/t',[tcontroller::class,'t']);

Route::get('/purc/{id}',[tcontroller::class,'product'])->name('product');
Route::post('/purc/{id}',[tcontroller::class,'product'])->name('product');

Route::get('/login',[tcontroller::class,'login']);
Route::post('/login',[tcontroller::class,'login']);

Route::get('/logout',[tcontroller::class,'logout'])->name('logout');
Route::post('/logout',[tcontroller::class,'logout'])->name('logout');


Route::get('pay',[tcontroller::class,'pay'])->name('pay');

Route::get('/home',[tcontroller::class,'home'])->name('home');
Route::post('/home',[tcontroller::class,'home'])->name('home');

Route::get('/booking',[tcontroller::class,'booking'])->name('booking');
Route::post('/booking',[tcontroller::class,'booking'])->name('booking');

Route::get('/pdf',[tcontroller::class,'pdf'])->name('pdf');
Route::post('/pdf',[tcontroller::class,'pdf'])->name('pdf');

Route::get('/join',[jcontroller::class,'join']);

Route::get('/data',[jcontroller::class,'data']);
Route::post('/data',[jcontroller::class,'data']);

Route::get('/index', [PaymentController::class, 'index']);
Route::post('/index1', [PaymentController::class, 'index1'])->name('make-payment');

Route::get('/buy',[PaymentController::class,'buy']);
Route::post('/buy',[PaymentController::class,'buy']);

Route::get('/buy1',[PaymentController::class,'buy1']);
Route::post('/buy1',[PaymentController::class,'buy1'])->name('buy1');

Route::get('pagination-ajax',[PaymentController::class,'ajaxpagination'])->name('ajax.pagination');