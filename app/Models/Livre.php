<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'auteur',
        'category_id'
    ];
    protected $date=['deleted_at'];
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie','category_id');
    }
    public function Empreinte(){
        return $this->hasMany('App\Models\Empreinte');
    }
}
