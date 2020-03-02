<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rastreamento extends Model
{
    protected $table = "trackings";
    protected $fillable = [];

    public function pedido () {
        return $this->hasMany('App\Pedido', 'id');
}
}
