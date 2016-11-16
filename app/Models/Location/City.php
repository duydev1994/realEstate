<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = array(
        'country_id',
        'name',
        'status',
        'type',
        'code',
    );

    public function question()
    {
        return $this->hasOne('App\Models\Content\Question');
    }

    public function countries(){
        return $this->belongsTo('App\Models\Location\Country','country_id');
    }
}
