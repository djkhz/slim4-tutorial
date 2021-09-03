<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class Employees extends Eloquent

{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'user_id','first_name', 'last_name' ,'gender', 'dob', 'add', 'phone', 'whatsapp', 'id_card', 'bank_acc', 'remark'

    ];
    
    protected $hidden = [

        'user_id'

    ];
    protected $visible = ['id','first_name', 'last_name', 'gender', 'dob', 'phone'];
    // public function Customers()

    // {
    //     //return $this->hasMany('Products_item');
    // }
    //Defining The Inverse Of The Relationship one to one
    public function user()
    {
        return $this->belongsTo('User');
        // ->withDefault([
        //     'name' => 'Guest Author',
        // ]);
        //return $this->belongsTo('User', 'user_id', 'id');
    }

    public static function get()
    {
     /** 
 * กำหนดข้อมูลสำหรับการ Response ไปยังฝั่ง Client
 * 
 * @return array 
 */
$response = [
    'status' => true,
    'response' => Employees::select('id', 'first_name', 'last_name', 'gender', 'dob','phone')->get(),
    'message' => $_SERVER['HTTP_REFERER']
];
// echo json_encode($response);
    return $response;
    }
    public function orders()

    {
        return $this->hasMany('Orders');
    }

    public function transactions()

    {
        return $this->hasMany('Transactions');
    }

}
