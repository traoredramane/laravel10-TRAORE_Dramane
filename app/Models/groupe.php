<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
    
}
