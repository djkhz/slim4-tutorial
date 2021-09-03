<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Stations extends Eloquent

{

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

    protected $fillable = [

        'name', 'description', 'image', 'district', 'province'

    ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */

//     protected $hidden = [

//         'password', 'remember_token',

//     ];

//     /*
//    * Get Todo of User
//    *
//    */
}