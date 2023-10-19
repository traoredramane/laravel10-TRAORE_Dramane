<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    public function etudiant()
    {
      return $this->belongsTo(Etudiant::class);
    }
    
}
