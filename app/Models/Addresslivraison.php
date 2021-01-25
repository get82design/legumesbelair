<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresslivraison extends Model
{
    protected $fillable = [
        'numrue', 'rue', 'postal', 'ville', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
