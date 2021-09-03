<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Products_images extends Eloquent

{

    protected $fillable = [

        'products_items_id','image'

    ];
    protected $hidden = [

        'products_items_id'

    ];
    // public function Products_image()

    // {
    //     //return $this->hasMany('Products_item');
    // }
    public function products_item()
    {
        return $this->belongsTo('Products_items');
    }
    // public function products_item()

    // {
    //     return $this->hasMany('Products_item');
    // }
}
