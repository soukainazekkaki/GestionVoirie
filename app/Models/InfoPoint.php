<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPoint extends Model
{
    use HasFactory;

    protected $table = 'info_points';
    protected $fillable = ['nom','condition','geom'];
}
