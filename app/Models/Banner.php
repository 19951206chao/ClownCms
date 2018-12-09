<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;

    protected $table = 'banners';

    protected $fillable = [
        'title', 'keywords', 'description', 'pic_url', 'thumbnail_url', 'is_display', 'is_single', 'url', 'content',
        'admin_id', 'author', 'ip',
    ];
}
