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
    ];
}
