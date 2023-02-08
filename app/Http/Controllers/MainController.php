<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;




class MainController extends Controller{
public function home(){ 


     //$movimientos =  Movimientos::findOrCreateBySessionID(
        //null);

    
    return view('main.home');
}

}