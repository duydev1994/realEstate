<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'parent_id',
        'position',
        'status'
    ];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    /**
     * @var array name
     */
    public static $statusName = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_INACTIVE => 'Inactive'
    ];

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Content\Article', 'category_id', 'id');
    }

    public static function tree($parent_id = 0, $status = null)
    {
        $query = static::with(['children' => function ($query) use ($status) {
                $query->orderBy('position', 'asc');
                if ($status != null) {
                    $query->where('status', $status);
                }
            },]
        );

        $query->where('parent_id', $parent_id);
        $query->orderBy('position', 'asc');
        if ($status != null) {
            $query->where('status', $status);
        }

        return $query->get();
    }
}
