<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $filable =["nom"];
    public function packs(){
        return $this->hasMany('App\Models\Pack');
    }
    public function commande(){
        return $this->belongsTo('App\Models\Commande');
    }

}
