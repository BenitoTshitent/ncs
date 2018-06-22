<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable=[
      'nom_entite','email','phone',
      'sujet','contenu'
    ];
}
