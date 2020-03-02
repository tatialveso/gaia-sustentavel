<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = "subcategories";

    public function categoria () {
        return $this->belongsTo('App\Categoria', 'category_id', 'id');
    }

    public function produto () {
        return $this->hasMany('App\Produto', 'product_id', 'id');
    }
}
