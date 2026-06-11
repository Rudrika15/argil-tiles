<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class CaseStudy extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'overview',
        'client_name',
        'industry',
        'location',
        'project_type',
        'project_area',
        'challenge',
        'solution',
        'result',
        'products_used',
        'completion_date',
        'featured_image',
        'gallery',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'is_featured',
        'status'
    ];

    protected $casts = [
        'gallery' => 'array'
    ];
}