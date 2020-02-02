<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = [];

    public function usuario () {
        return $this->belongsTo('app\Usuario', 'usuario_id', 'id');
    }

    public function avaliacaoLoja () {
        return $this->hasMany('app\AvaliacaoLoja', 'avaliacao_loja_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'produto_id', 'id');
    }
}
