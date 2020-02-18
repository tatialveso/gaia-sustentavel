<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categories";

    public function subcategoria () {
        return $this->hasMany('app\Subcategoria', 'subcategory_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'product_id', 'id');
    }
}
