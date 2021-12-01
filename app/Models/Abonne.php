<?php

namespace App\Models;

use App\Notifications\abonneNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\models\User;

class Abonne extends Model
{


    use HasFactory;

    protected $fillable = [
        'mail',
       'name',
       'prenom',
       'image',
       'student_id',
       'date_naissance',   
    ];

   

}

