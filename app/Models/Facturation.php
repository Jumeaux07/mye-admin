<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facturation extends Model
{
    use HasFactory;

    protected $fillable = ['labelle', 'price', 'status'];

//    protected $casts = ['items' => 'array'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
