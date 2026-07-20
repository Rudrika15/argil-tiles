<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaPropertyBlog extends Model
{
    //
    public function blog (){
        return $this->belongsTo(Blog::class,'blog_id');
    }
}
