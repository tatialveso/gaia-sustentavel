<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UF extends Model
{

    protected $table = 'ufs';

    public function user() {
        return $this->hasMany('App\User', 'user_id', 'id');
    }
}
