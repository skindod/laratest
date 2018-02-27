<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function Crud() 
    {
        return $this->hasMany('App\Crud');
    }
}
