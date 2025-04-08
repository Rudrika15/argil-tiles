<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartzproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','sizes','thicknesses','finishType','stock','primarycolors','bookmatch','mainImg','subImg1','subImg2','subImg3','subImg','subImg5','status'
        ];
}
