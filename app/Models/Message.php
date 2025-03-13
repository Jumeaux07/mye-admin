<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Conversation;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu',
        'fichier',
        'is_read',
        'expediteur_id',
        'recepteur_id',
        'conversation_id'
    ];

    public function expediteur(){
        return $this->belongsTo(User::class,'expediteur_id');
    }

    public function recepteur(){
        return $this->belongsTo(User::class,'recepteur_id');
    }
    public function conversation() {
        return $this->belongsTo(Conversation::class);
    }
}
