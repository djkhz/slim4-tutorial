<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Products extends Eloquent

{
    
    protected $fillable = [

        'categories_id','name', 'description', 'price', 'remark'

    ];

    public function categories()
    {
        return $this->belongsTo('Categories');
    }

    public function products_item()

    {
        return $this->hasMany('Products_items');
    }

}
