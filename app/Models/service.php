<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $filable =["nom"];
    public function packs(){
        return $this->hasMany('App\Pack');
    }
    public function Commande(){
        return $this->belongsTo('App\Commande');
    }

}
