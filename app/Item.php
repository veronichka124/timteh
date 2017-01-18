<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
        'title', 'price',
    ];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }
}
