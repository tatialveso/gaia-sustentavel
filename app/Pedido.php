<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "requests";
    protected $fillable = ['user_id', 'price', 'status'];

    public function pagamento () {
        return $this->belongsTo('App\Pagamento', 'payment_id', 'id');
    }

    public function rastreamento () {
        return $this->hasOne('App\Rastreamento', 'rastreamento_id', 'id');
    }

    public function user () { 
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function pedido_produtos () {
        return $this->hasMany('App\PedidoProduto', 'request_id', 'id');
    }

    public function pedido_produto_itens () {
        return $this->hasMany('App\PedidoProduto');
    }

    public function pedido_produtos_itens()
    {
        return $this->hasMany('App\PedidoProduto');
    }

    public function produtos() {
        return $this->belongsToMany('App\Produto', 'pedido_produtos','request_id', 'product_id');
    }

    public static function consultaId($where) {
        $pedido = self::where($where)->first(['id']);
        return !empty($pedido->id)? $pedido->id : null;
    } 

   
}