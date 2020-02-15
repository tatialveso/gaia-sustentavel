<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UF extends Model
{
    public function usuario() {
        return $this->hasMany('app\User', 'user_id', 'id');
    }
}
