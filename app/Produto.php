<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 


class Produto extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'price', 'description', 'composition', 'img_product', 'category_id', 'subcategory_id' , 'active'];



    public function avaliacaoProduto () {
        return $this->hasMany('\App\AvaliacaoProduto', 'evaluation_product_id', 'id');
    }

    public function pedido () {
        return $this->hasMany('\App\Pedido', 'product_id', 'id');
    }

    public function subcategoria () {
        return $this->belongsTo('\App\Subcategoria', 'subcategory_id', 'id');
    }

    public function categoria () {
        return $this->belongsTo('\App\Categoria', 'category_id', 'id');
    }
    
    public function store () {
        return $this->belongsTo('\App\Loja', 'store_id', 'id');
    }
}
