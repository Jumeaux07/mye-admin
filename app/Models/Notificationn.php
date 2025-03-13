<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificationn extends Model
{
    protected $table = 'notifications';
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'notifiable_id',
        'notifiable_type',
        'type',
        'title',
        'message',
        'read_at'
    ];
}
