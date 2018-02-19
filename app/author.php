<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    public function Crud() 
    {
        return $this->hasMany('App\Crud');
    }
}
