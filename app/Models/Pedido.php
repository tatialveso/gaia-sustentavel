<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [];

    public function pagamento () {
        return $this->hasOne('app\Pagamento', 'id');
}
    public function rastreamento () {
        return $this->hasOne('app\Pagamento', 'id');
}

}