<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoProduto extends Model
{
    protected $table = "evaluations_products";
    protected $fillable = ['name', 'description'];

    public function produto () {
        return $this->belongsTo('App\Produto', 'product_id', 'id');
    }
}
