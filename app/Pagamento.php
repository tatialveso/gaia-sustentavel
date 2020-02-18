<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "payments";
    protected $fillable = [];

    public function pedido () {
        return $this->hasMany('app\Pedido', 'pedido_id', 'id');
}


}