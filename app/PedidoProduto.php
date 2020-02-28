<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{

    protected $fillable = [
            'request_id',
            'product_id',
            'quantity'
    ]; 
    
    Public function produto()
    {
        return $this->belongsTo('App\Produto','produto_id','id');
    }
}
