<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Shippers extends Eloquent

{

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */

    protected $fillable = [

        'name', 'plate_no', 'volume', 'type', 'source', 'remark'

    ];
    public static function get()
    {
     /** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 */
    $response = [
        'status' => true,
        'response' => Shippers::select('id', 'name', 'plate_no', 'type', 'volume', 'source')->get(),
        'message' => 'Get Data Success'
    ];
    
    //  var_dump($_SERVER['HTTP_REFERER']);
        // http_response_code(200);
    return $response;
    }
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