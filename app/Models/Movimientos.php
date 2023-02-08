<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
   protected $fillable = ['status'];


   public function articulos_movimiento(){
    return $this->hasMany('App\Models\ArticulosMovimiento');
   }

   public function products(){
    return $this->belongsToMany('App\Models\Product','articulos_movimiento');
   }


   public function productsSize(){
        return $this->products()->count();
   }

    public static function findOrCreateBySessionID($movimientos_id){
        if($movimientos_id)
        return Movimientos::findBySession($movimientos_id);
        else
        return Movimientos::createWithoutSession();
}

public static function FindBySession($movimientos_id){
    return Movimientos::find($movimientos_id);
}

public static function createWithoutSession(){
    return Movimientos::create([
        "status" => "incompleted"
    ]);
}

}