<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lvtproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'names','thicknesses','primarycolors','edges','clicktype','shadeVariation','backingType','style','wearLayer','bookmatch','mainImg','subImg1','subImg2','subImg3','subImg4','subImg5','status'
        ];
}
