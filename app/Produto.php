<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['name', 'price', 'description', 'quantity'];

    public function avaliacaoProduto () {
        return $this->hasMany('app\AvaliacaoProduto', 'avaliacao_produto_id', 'id');
    }

    public function pedido () {
        return $this->hasMany('app\Pedido', 'pedido_id', 'id');
    }

    public function subcategoria () {
        return $this->belongsTo('app\Subcategoria', 'subcategoria_id', 'id');
    }

    public function categoria () {
        return $this->belongsTo('app\Categoria', 'categoria_id', 'id');
    }

    public function Loja () {
        return $this->belongsTo('app\Loja', 'loja_id', 'id');
    }
}
