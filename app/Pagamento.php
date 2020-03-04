<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "payments";
    protected $fillable = [];

    public function pedido () {
        return $this->hasOne('App\Pedido', 'request_id', 'id');
}


}