<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    public function relUsers(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }

}
