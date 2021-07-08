<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'tb_cars';

    public function order_detail() {
        return $this->hasMany('App\OrderDetail', 'id_car', 'id');
    }
}
