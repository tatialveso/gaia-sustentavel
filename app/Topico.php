<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table = "topics";

    public function contato() {
        return $this->hasMany('App\Contato');
    }
}
