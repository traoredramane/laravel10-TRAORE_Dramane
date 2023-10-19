<?php

namespace App\Models;

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
    
}
