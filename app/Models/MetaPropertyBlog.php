<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaPropertyBlog extends Model
{
    //
protected $table = 'meta_property_blogs';
protected $fillable = [
        'blogId',
        'ogTitleEng',
        'ogDescriptionEng',
        'ogImage',
        'ogUrl',
        'description',
        'keywords',
        'author',
        'tages',
        'status'
    ];
}
