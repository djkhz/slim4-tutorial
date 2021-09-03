<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Delivery_logs extends Eloquent

{

    protected $fillable = [

        'shipper_id', 'trailer_id', 'employee_id', 'from_station', 'to_station', 'weight_init', 'weight_total', 'action', 'categories_id' //, 'dob', 'add', 'phone', 'whatsapp'

    ];
    // public function delivery_add()

    // {
    //     //return $this->hasMany('Products_item');
    // }
    public function orders()

    {
        return $this->hasOne('Orders');
    }
}
