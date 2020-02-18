<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [];

    // public function pagamento () {
    //     return $this->belongsTo('app\Pagamento', 'pagamento_id', 'id');
    // }

    // public function rastreamento () {
    //     return $this->hasOne('app\Rastreamento', 'rastreamento_id', 'id');
    // }

    // public function user () { 
    //     return $this->belongsTo('app\User', 'user_id', 'id');
    // }

    public function pedido_produtos () {
        return $this->hasMany('App\Produto')
        ->select( \DB::raw('produto_id,count(1) as qtd') )
        ->groupBy('produto_id')
        ->orderBy('produto_id');
    }

   
}