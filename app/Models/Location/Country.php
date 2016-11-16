<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'type',
    ];

    public function question()
    {
        return $this->hasOne('App\Models\Content\Question');
    }
    
}
