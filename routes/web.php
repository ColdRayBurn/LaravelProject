<?php

use Illuminate\Support\Facades\Route;
use App\View\Components\NewsList;
use App\View\Components\Main;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $mainComponent = new Main();
    return $mainComponent->render();
});

Route::get('/news', function () {
    $newsComponent = new NewsList();
    return $newsComponent->render();
});
Route::get('/news/{id}', [NewsList::class, 'detail'])->name('detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
