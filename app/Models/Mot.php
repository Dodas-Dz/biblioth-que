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
        'nbr_livre',
    ];
    protected $date=['deleted_at'];
    
    public function Livre(){
        return $this->HasMany('App\Models\livre');
    }
}
