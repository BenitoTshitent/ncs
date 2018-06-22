<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable=[
      'imageUrl', 'titre','description','lien'
    ];
}
