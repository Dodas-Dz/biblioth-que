<?php

namespace App\Models;

use App\models\User;
use App\Notifications\AbonneMail;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\abonneNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Abonne extends Model
{


    use HasFactory, Notifiable;

    protected $fillable = [
        'mail',
       'name',
       'prenom',
       'image',
       'student_id',
       'date_naissance',   
    ];
    protected static function booted()
    {
        static::creating(function ($ab) {
            $ab->student_id =  Helper::IDGenerator(new Abonne, 'student_id', 8, 'STD'); 
        });
    }
   

}

