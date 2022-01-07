<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mot extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'mot_cle',
        'livre_id',

    ];
    protected $date=['deleted_at'];

    public function livre(){
        return $this->belongsTo('App\Models\Livre','livre_id');
    }

}
