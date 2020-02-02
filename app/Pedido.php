<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [];

    public function pagamento () {
        return $this->belongsTo('app\Pagamento', 'pagamento_id', 'id');
    }

    public function rastreamento () {
        return $this->hasOne('app\Rastreamento', 'rastreamento_id', 'id');
    }

    public function usuario () {
        return $this->belongsTo('app\Usuario', 'usuario_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'produto_id', 'id');
    }

}