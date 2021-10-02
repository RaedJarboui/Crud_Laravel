<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;
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
Route::get('/welcome', function () {
    return "welcome";
});
Route::get('/json', function () {
    return response()->json(['title' => 'mon super title','description'=>'mon premier description'],
);
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/laravel', [LaravelController::class, 'index']);

Route::get('/page1', function () {
    return '<h1>my first page</h1>';
});
Route::get('/page2/{name?}', function ($name=null) {
    return '<h1>Welcome'. $name."</h1>";
});
Route::get('/page2/{name?}', function ($name=null) {
    return '<h1>Welcome'. $name."</h1>";
})->where('name','[A-Z,a-z]+');
Route::get('/page3/{name?}', function ($name=null) {
    return '<h1>Welcome'. $name."</h1>";
})->where('name','[0-9]+');
/*Route::get('middleware', function (Request $request) {
    return $request->pseudo;
});
Route::get('/middleware', function () {
    return view('middleware');
})->middleware('verifage');;*/
Route::get('/home', [HomeController::class, 'index']);
Route::get('/show', [HomeController::class, 'show']);
Route::get('/add', [ModuleController::class, 'store']);
Route::get('/create', [ModuleController::class, 'create']);
Route::get('/aff', [ModuleController::class, 'index'])->name('module.aff');;
Route::get('/delete/{id}', [ModuleController::class, 'destroy'])->name('module.delete');
Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('module.edit');
Route::get('/update/{id}', [ModuleController::class, 'update'])->name('module.update');






