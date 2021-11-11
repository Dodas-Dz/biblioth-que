<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mot extends Model
{
    use HasFactory;
    protected $fillable = [
        'mot_cle',
    ];
}
