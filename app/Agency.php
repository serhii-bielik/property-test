<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agency';

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
