<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'city_id',
        'name',
        'status',
        'type',
        'code',
    ];

    public function question()
    {
        return $this->hasOne('App\Models\Content\Question');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\Location\City','city_id');
    }
}
