<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Transactions extends Eloquent

{

    protected $fillable = [

        'customer_id','action','credit', 'debit', 'balance', 'currency' , 'remark'

    ];
    protected $hidden = [

        'customer_id', 'delivery_add_id'

    ];
    // public function Orders()

    // {
    //     //return $this->hasMany('Products_item');
    // }


    public function customers()

    {
        return $this->hasOne('Customers');
    }
}
