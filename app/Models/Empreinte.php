<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empreinte extends Model
{
    use HasFactory;
    protected $fillable = [
       'date_debut',
       'date_fin',
       'rendu',
       'livre_id',
       'abonne_id',
       
    ];
    public function abonne(){
        return $this->hasMany('App\Models\Abonne');
    }
    public function Livre(){
        return $this->hasOne('App\Models\livre');
    }
}
