<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    //
      protected $fillable = [
        'title',
        'slug',
        'details',
        'metaTitle',
        'metaDescription',
        'metaKeywords',
        'ogTitle',
        'ogDescription',
        'ogImage',
        'status'
    ];
    
}
