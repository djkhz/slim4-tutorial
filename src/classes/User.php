<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class User extends Eloquent

{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'name', 'email', 'password', 'userimage'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [

        'password', 'remember_token',

    ];

    /*
   * Get Todo of User
   *
   */
    public function customer()
    {
        return $this->hasOne('Customers','user_id');
    }

    public function employee()
    {
        return $this->hasOne('Employees', 'user_id');
    }

    public function todo()

    {
        return $this->hasMany('Todo');
    }
}
