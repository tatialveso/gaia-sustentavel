<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [];

    public function loja () {
        return $this->hasOne('app\Loja', 'loja_id', 'id');
    }

    public function pedido () {
        return $this->hasMany('app\Pedido', 'id');
    }
}
