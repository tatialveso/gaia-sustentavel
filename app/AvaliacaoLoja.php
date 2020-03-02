<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoLoja extends Model
{
    protected $table = "evaluations_stores";
    protected $fillable = ['name', 'rate', 'description'];

    public function loja () {
        return $this->belongsTo('App\Loja', 'store_id', 'id');
    }
}
