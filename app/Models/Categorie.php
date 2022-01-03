<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'name', 
        'nbr_livre',
    ];
    protected $date=['deleted_at'];
    
    public function Livre(){
        return $this->HasMany('App\Models\livre');
    }
}
