<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CupomDesconto extends Model
{
    protected $table="discount_coupon";
    protected $fillable = ['name', 'discount', 'type_discount', 'active', 'limit', 'type_limit', 'validade'];


}
