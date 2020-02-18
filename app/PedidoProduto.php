<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    Public function produto()
    {
        return $this->belongsTo('App\Produto','produto_id','id');
    }
}
