<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imgproduit extends Model
{
    protected $fillable = [
        'image', 'alt', 'produit_id',
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
