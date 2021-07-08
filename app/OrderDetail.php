<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'tb_order_details';

    public function car() {
        return $this->belongsTo('App\Car', 'id_car', 'id');
    }

    public function order() {
        return $this->belongsTo('App\Order', 'id_order', 'id');
    }
}
