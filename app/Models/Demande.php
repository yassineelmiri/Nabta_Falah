<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nom_entreprise',
        'type',
        'matricule',
        'certification',
        'statue',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
