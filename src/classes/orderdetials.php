<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class OrderDetails extends Eloquent

{
    protected $fillable = [

        'products_items_id','orders_id', 'price', 'quantity', 'remark'

    ];
    protected $hidden = [

        'products_items_id', 'orders_id'

    ];
    // public function Orders_item()

    // {
    //     //return $this->hasMany('Products_item');
    // }

    public function orders()
    {
        return $this->hasOne('Orders');
    }

    public function products_item()

    {
        return $this->hasMany('Products_items');
    }
}
