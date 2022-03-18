<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\armazena_status;

class webhookController extends Controller
{
    
    public function teste (Request $request) {


        dd("oi");


        $armazenaStatus = new armazena_status;

        $armazenaStatus->email = "asdas";
        $armazenaStatus->status = "ativo";
        $armazenaStatus->save();
        
        return "oi";
        //dd($request->all());


    }
}
