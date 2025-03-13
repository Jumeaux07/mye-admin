<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'image',
            'nom',
            'is_read',
            'reciver_id',
            'sender_id',
            'lastmessage',
        ];

    public function utilisateurs() {
        return $this->belongsToMany(User::class, 'conversation_users', 'conversation_id', 'user_id');
    }
    public function messages() {
        return $this->hasMany(Message::class, 'conversation_id');
    }
    public function user1()
    {
        if (auth()->user()->id != $this->sender_id) {
            return $this->belongsTo(User::class, 'reciver_id');
        }
    }

    public function user2()
    {
        if (auth()->user()->id != $this->reciver_id) {
            return $this->belongsTo(User::class, 'sender_id');
        }
    }

    public function destinataire(){
        $user1 = $this->user1()->first();
        $user2 = $this->user2()->first();
        // Vérifiez si l'utilisateur est null avant d'accéder à ses propriétés
        if (is_null($user1) || is_null($user2)) {
            return null;// ou gérez l'erreur comme vous le souhaitez
        }
        if(auth()->user()->id != $user1->id){
            return $this->user2();
        }else{
            return $this->user1();
        }
    }
}
