<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceuil extends Model
{
    protected $fillable=[
      'primeTextAcc','logo','secTextAcc','ImageAccUrl',
      'imagefdAppUrl','enteteTextApp','descTextApp',
      'emailTextContact','num1TextContact','num2TextContact',
      'numAvenenue','villeCommune','paysProv',
      'facebook','twitter','instagram'
    ];
}
