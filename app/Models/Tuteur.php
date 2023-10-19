<?php

namespace App\Models;

use App\Models\Tuteur;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
       
    ];
    
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }

}
