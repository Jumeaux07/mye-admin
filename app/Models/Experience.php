<?php

namespace App\Models;
use Carbon\Carbon;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['poste', 'nom_entreprise', 'date_debut', 'date_fin', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setDateDebutAttribute($value)
    {

        $this->attributes['date_debut'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function setDateFinAttribute($value)
    { if (empty($value)) {
        $this->attributes['date_fin'] = null;
        return;
    }else{
        $this->attributes['date_fin'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    }
}
