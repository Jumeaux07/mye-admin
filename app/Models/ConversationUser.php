<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConversationUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'conversation_id'
    ];
    public function utilisateur() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function conversation() {
        return $this->belongsTo(Conversation::class, 'conversation_id');
    }
}
