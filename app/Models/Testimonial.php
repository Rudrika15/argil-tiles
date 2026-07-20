<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
    'client_name',
    'company_name',
    'designation',
    'testimonial',
    'client_image',
    'rating',
    'location',
    'project_name',
    'product_type',
    'status',
    'display_order'
];
}
