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
       
    ];
}
