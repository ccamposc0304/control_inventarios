<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Movimientos;

class MovimientosProvider extends ServiceProvider

{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*",function($view){
            $movimientos_id = \Session::get('movimientos_id');
  
            $movimientos =  Movimientos::findOrCreateBySessionID(
            $movimientos_id);

    \Session::put("movimientos_id",$movimientos->id);

    $view->with("movimientos",$movimientos);

        });//
    }
}
