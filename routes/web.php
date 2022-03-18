<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webhookController;
 

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
Route::post('/web', [webhookController::class, 'teste']);

Route::post('webs', function(Request $request) {


    return dd($request->all());

    /*
    $armazenaStatus = new armazena_status;

    $armazenaStatus->email = "asdas";
    $armazenaStatus->status = "ativo";
    $armazenaStatus->save();

    return "OK";
    */
    
    //dd($request->all());

});
