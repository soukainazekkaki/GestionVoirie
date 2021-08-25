<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdVoirie extends Model
{
    use HasFactory;
//lier à la base de donnée 
    protected $table = 'ad_voiries';
    protected $fillable = ['nomcommune','titre','description','nomresponsable','ville','x','y'];

    protected $guarded = [];
    

    //on a utilisé cette fonction car dependance liée avec plusieurs voiries
    //on fait meme chose dans le model AdVoirie 
    public function dependances()
    {
        return $this->morphMany('App\Dependance','depentable')->latest();
    }

}
