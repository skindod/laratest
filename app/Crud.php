<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = ['title','post','author_id'];
    
    public function author()
    {
        return $this->belongsTo('App\author');
    }
}
