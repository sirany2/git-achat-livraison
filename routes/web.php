<?php
use App\Http\Controllers\AchatController;

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
    return view('index');

});

Route::get('/connexion', [AchatController::class ,'connexion']
);

Route::get('/inscription',[Achatcontroller::class,'inscription']

);

Route::get('/dashboard',[Achatcontroller::class,'dashboard']

);
Route::POST('/envoie',[Achatcontroller::class ,'envoie']);

