<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class secteur_activite extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'status'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
