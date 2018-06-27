<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    protected $fillable=[
      'imageUrl', 'titre','description','lien'
    ];

    public function saveProd($data,$path){
        $this->imageUrl=$path;
        $this->titre=$data['titre'];
        $this->description=$data['description'];
        $this->lien=$data['lien'];
        $this->save();
        return 1;
    }
}
