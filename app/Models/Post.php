<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'posts';
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'content',
        'source',
        'picture_1',
        'picture_2',
        'picture_3',
        'picture_4',
        'picture_5',
        'picture_6',
        'meta_robot_index',
        'meta_robot_follow',
        'meta_keyword',
        'meta_description',
        'meta_custom_title',
        'view_count',
        'status',
        'ward_id',
        'district_id',
        'city_id',
        'country_id',
        'money',
        'acreage',
        'video'
    ];

    const STATUS_PUBLISHED = 1;
    const STATUS_UNPUBLISHED = 2;
    const STATUS_INVALID = 3;


    public static $statusName = [
        self::STATUS_PUBLISHED => 'Sử dụng',
        self::STATUS_UNPUBLISHED => 'Không sử dụng',
        self::STATUS_INVALID => 'Ẩn',
    ];

    protected $appends = ['location'];


    public function getLocationAttribute()
    {
        return get_location($this->country_id, $this->city_id, $this->district_id, $this->ward_id);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
