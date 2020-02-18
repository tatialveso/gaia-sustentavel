<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = "stores";
    protected $fillable = [];

    public function user () {
        return $this->belongsTo('app\User', 'user_id', 'id');
    }

    public function avaliacaoLoja () {
        return $this->hasMany('app\AvaliacaoLoja', 'avaliacao_loja_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'produto_id', 'id');
    }
}
