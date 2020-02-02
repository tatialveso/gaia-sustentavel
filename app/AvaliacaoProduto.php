<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoProduto extends Model
{
    protected $fillable = [];

    public function produto () {
        return $this->belongsTo('app\Produto', 'produto_id', 'id');
    }
}
