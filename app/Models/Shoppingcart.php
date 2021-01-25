<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    protected $fillable = [
        'user_id', 'content', 'livraison', 'checkcommande', 'checkreception', 'day', 'hour', 'daylivr', 'proday'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
