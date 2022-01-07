<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livre extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'isbn',
        'titre',
        'resumer',
        'nbr',
        'image',
        'langue',
        'anneé',
        'auteur',
        'category_id',

    ];
    protected $date = ['deleted_at'];

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'category_id');
    }
    public function mots()
    {
        return $this->hasMany('App\Models\Mot');
    }
    public function Empreinte()
    {
        return $this->hasMany('App\Models\Empreinte');
    }
    public function scopeSearch($query, $key_word)
    {

        return $query->where('titre', 'LIKE', '%' . $key_word . '%')
            ->orwhere('isbn', 'LIKE', '%' . $key_word)
            ->orWhereHas('mots', function ($q) use ($key_word) {
                $q->where('mot_cle', 'LIKE', $key_word);
            });
    }
}
