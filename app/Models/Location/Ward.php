<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';
    protected $fillable = [
        'district_id',
        'name',
        'status',
        'type',
        'code',
    ];

    public function question()
    {
        return $this->hasOne('App\Models\Content\Question');
    }

    public function districts()
    {
        return $this->belongsTo('App\Models\Location\District', 'district_id');
    }
}
