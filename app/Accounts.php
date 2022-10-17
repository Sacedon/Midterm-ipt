<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\users;

class Accounts extends Model


{

    protected $fillable = [
        'id','user_id', 'acc_name', 'init_invest', 'start_date', 'remarks', 
    ];
    
    public function users(){
        return $this->hasMany('app\users');
    }
}
