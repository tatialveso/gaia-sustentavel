<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rastreamento extends Model
{
    protected $fillable = [];

    public function pedido () {
        return $this->hasMany('app\Pedido', 'id');
}
}
