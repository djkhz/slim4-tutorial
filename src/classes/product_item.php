<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Products_items extends Eloquent

{
    protected $fillable = [

        'products_id','style', 'color' ,"price" ,"remark"

    ];

    public function products()
    {
        return $this->belongsTo('Products');
    }

    public function products_image()

    {
        return $this->hasmany('Products_images');
    }
}
