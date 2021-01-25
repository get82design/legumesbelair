<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'name', 'price', 'desc', 'dispo', 'conditionnement'
    ];
}
