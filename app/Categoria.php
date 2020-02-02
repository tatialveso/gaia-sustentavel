<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [];

    public function subcategoria () {
        return $this->hasMany('app\Subcategoria', 'subcategoria_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'produto_id', 'id');
    }
}
