<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        'name',
        'ward_id',
        'district_id',
        'city_id',
        'country_id',
    ];

    public function profiles()
    {
        return $this->hasMany('App\Models\Identity\Profile');
    }

    public function countries()
    {
        return $this->belongsTo('App\Models\Location\Country', 'country_id');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\Location\City', 'city_id');
    }

    public function districts()
    {
        return $this->belongsTo('App\Models\Location\District', 'district_id');
    }

    public function wards()
    {
        return $this->belongsTo('App\Models\Location\Ward', 'ward_id');
    }

    //API
    public function country()
    {
        return $this->belongsTo('App\Models\Location\Country', 'country_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\Location\City', 'city_id');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\Location\District', 'district_id');
    }

    public function ward()
    {
        return $this->belongsTo('App\Models\Location\Ward', 'ward_id');
    }
}
