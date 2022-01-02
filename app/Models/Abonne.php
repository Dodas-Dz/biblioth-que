<?php

namespace App\Models;

use App\models\User;
use App\Notifications\AbonneMail;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\abonneNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abonne extends Model
{


    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'mail',
       'name',
       'prenom',
       'image',
       'student_id',
       'date_naissance',   
    ];
    protected $date=['deleted_at'];
    protected static function booted()
    {
        static::creating(function ($ab) {
            $ab->student_id =  Helper::IDGenerator(new Abonne, 'student_id', 8, 'STD'); 
        });
    }
 
}

