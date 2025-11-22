<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallproduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','size','finishType','stock','designType','mainImg','subImg1','subImg2'.'subImg3','subImg4','subImg5',	'status'
        ];
}
