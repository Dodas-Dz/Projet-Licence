<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $filable =['contact_pseudo','date' ,'heurs', 'commande_id'];
    public function commande(){
        return $this->belongsTo('App\Commande');
    }
    
}
