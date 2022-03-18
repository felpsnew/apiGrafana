<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webhookController;
use Illuminate\Http\Request;
 

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
    return phpinfo();

});


//controlador do webhook
Route::post('/web', 'App\Http\Controllers\webhookController@teste');


Route::post('/webs', function(Request $request) {
    dd($request->code());
});
