<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "requests";
    protected $fillable = [  //Campos obrigatórios no pedido.
        'user_id',
        'status'
    ];

    public function pagamento () {
        return $this->belongsTo('app\Pagamento', 'pagamento_id', 'id');
    }

    public function rastreamento () {
        return $this->hasOne('app\Rastreamento', 'rastreamento_id', 'id');
    }

    public function user () { 
        return $this->belongsTo('app\User', 'user_id', 'id');
    }

    public function pedido_produtos () {
        return $this->hasMany('App\Produto')
        ->select( \DB::raw('produto_id,sum (discount) as discounts, sum(price) as prices, count(1) as qtd') )
        ->groupBy('produto_id')
        ->orderBy('produto_id', 'desc');
    }

    public function pedido_produtos_itens()
    {
        return $this->hasMany('App\PedidoProduto');
    }

    public static function consultaId($where) {
        $pedido = self::where($where)->first(['id']);
        return !empty($pedido->id)? $pedido->id : null;
    } 

   
}