<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "payments";
    protected $fillable = [];

    public function pedido () {
        return $this->hasMany('App\Pedido', 'pedido_id', 'id');
}


}