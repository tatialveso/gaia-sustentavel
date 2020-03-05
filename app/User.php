<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'data_nascimento', 'cpf', 'phone', 'endereco', 'numero', 'complemento', 'cidade', 'uf_id', 'cep'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loja() {
        return $this->HasOne('App\Loja');
    }

    public function pedido() {
        return $this->HasMany('App\Pedido');
    }

    public function pedidos() {
        return $this->HasMany('App\Pedido');
    }

    public function uf() {
        return $this->belongsTo('App\UF', 'ufs_id', 'id');
    }

    public function isSeller() {
        return $this->loja != null;
    }
}
