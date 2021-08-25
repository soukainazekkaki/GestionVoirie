<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependance extends Model
{
    use HasFactory;
    protected $guarded = [];
    

    //on a utilisé cette fonction car dependance liée avec plusieurs voiries
    //on fait meme chose dans le model AdVoirie 
    public function depentable()
    {
        return $this->morphTo();
    }
}
