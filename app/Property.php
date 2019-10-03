<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'small_photos' => 'array',
        'photos' => 'array',
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function amenities()
    {
        return $this->belongsToMany('App\Amenity', 'property_amenity');
    }

    public function areas()
    {
        return $this->belongsToMany('App\Area', 'property_area');
    }
}
