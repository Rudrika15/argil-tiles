<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function metaProperty()
    {
        return $this->hasOne(MetaPropertyBlog::class, 'blog_id');
    }
}
