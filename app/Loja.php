<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = "stores";
    protected $fillable = ['name_store', 'location', 'category_id', 'description', 'criacao', 'image'];

    public function user () {
        return $this->belongsTo('app\User', 'user_id', 'id');
    }

    public function avaliacaoLoja () {
        return $this->hasMany('app\AvaliacaoLoja', 'evaluations_stores_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'produto_id', 'id');
    }
}
