<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoLoja extends Model
{
    protected $fillable = [];

    public function loja () {
        return $this->belongsTo('app\Loja', 'loja_id', 'id');
    }
}
