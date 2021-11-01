<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $filable =['name','couleur' ,'couleur1', 'tamplate' ,'type' ,'police' ,'description','user_id','packes_id','service_id'];
    public function pack(){
        return $this->belongsTo('App\Pack');
    }
    public function rendez_vous(){
        return $this->hasOne('App\Models\RendezVous');
    }
    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}