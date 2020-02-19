<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    protected $table="products";
    protected $fillable = ['name', 'price', 'description', 'composition', 'img_product', 'category_id', 'subcategory_id'];



    public function avaliacaoProduto () {
        return $this->hasMany('app\AvaliacaoProduto', 'evaluation_product_id', 'id');
    }

    public function pedido () {
        return $this->hasMany('app\Pedido', 'product_id', 'id');
    }

    public function subcategoria () {
        return $this->belongsTo('app\Subcategoria', 'subcategory_id', 'id');
    }

    public function categoria () {
        return $this->belongsTo('app\Categoria', 'category_id', 'id');
    }

    public function Loja () {
        return $this->belongsTo('app\Loja', 'store_id', 'id');
    }
}
