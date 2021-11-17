<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'isbn',
        'titre',
        'resumer',
        'nbr',
        'image',
        'langue',
        'anneé',
        'autuer',
        'category_id'
    ];
    public function Categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }
    public function Empreinte(){
        return $this->hasMany('App\Models\Empreinte');
    }
}
