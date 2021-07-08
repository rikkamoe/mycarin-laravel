<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tb_orders';

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function order_detail() {
        return $this->hasMany('App\OrderDetail', 'id_order', 'id');
    }
}
