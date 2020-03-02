<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = "stores";
    protected $fillable = ['name_store', 'location', 'category_id', 'description', 'criacao', 'image', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function avaliacaoLoja() {
        return $this->hasMany('App\AvaliacaoLoja', 'evaluations_stores_id', 'id');
    }

    public function produto() {
        return $this->hasMany('App\Produto', 'products_id', 'id');
    }
}
