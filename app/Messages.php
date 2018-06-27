<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

    protected $fillable=[
      'nom_entite','email','phone',
      'sujet','contenu'
    ];

    public function saveMsg($data)
    {
        $this->nom_entite=$data['nomEntite'];
        $this->email=$data['emailEntite'];
        $this->phone=$data['PhoneEntite'];
        $this->sujet=$data['sujetEntite'];
        $this->contenu=$data['contenu'];
        $this->save();
        return 1;
    }
}
