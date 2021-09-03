<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Orders extends Eloquent

{

    protected $fillable = [

        'customers_id','delivery_add_id','payment_type', 'registered', 'status', 'total'

    ];
    protected $hidden = [

        'customers_id', 'delivery_add_id'

    ];
    // public function Orders()

    // {
    //     //return $this->hasMany('Products_item');
    // }

    public function orderdetails()

    {
        return $this->hasMany('OrderDetails');
    }

    public function delivery_add()

    {
        return $this->hasOne('Delivery_add');
    }

    public function customers()

    {
        return $this->hasOne('Customers');
    }
}
