<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{

    protected $fillable = [
            'pedido_id',
            'produto_id',
            'valor',
            'status' => 'RE'
    ]; 
    
    Public function produto()
    {
        return $this->belongsTo('App\Produto','produto_id','id');
    }
}
