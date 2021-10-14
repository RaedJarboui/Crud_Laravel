<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_Module', 'duree','description'
    ];
    public function chapitres(){
        return $this->hasMany(Chapitre::class);
    }
    public function enseignants()
    {
    return $this->belongsToMany(Enseignant::class);
    }
}
