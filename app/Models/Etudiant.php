<?php

namespace App\Models;

use App\Models\Nationalite;
use App\Models\Groupe;
use App\Models\Ville;
use App\Models\Tuteur;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'photo',
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }
    
    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
    }
    
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    
     
    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class);
    }
    
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
    
}
