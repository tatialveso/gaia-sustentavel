<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rastreamento extends Model
{
    protected $fillable = [
        'id',
        'nome',
    ];

    public function pedido () {
        return $this->belongsTo('app\Pedido', 'id');
}
}
