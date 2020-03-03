<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = "contact";
    protected $fillable = ['name', 'email', 'topic_id', 'message'];
 
    public function topico() {
        return $this->belongsTo('App\Topico', 'topic_id', 'id');
    }
}
