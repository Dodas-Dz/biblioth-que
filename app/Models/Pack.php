<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $filable =['nom','prix' ,'service_id'];
    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
    public function commandes(){
        return $this->hasMany('App\Models\Commande');
    }
}
