<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categories";

    public function subcategoria () {
        return $this->hasMany('App\Subcategoria', 'subcategory_id', 'id');
    }

    public function produto () {
        return $this->hasMany('App\Produto', 'product_id', 'id');
    }
}
