<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable=[
      'iconUrl','titre','description'
    ];

    public function saveService($data)
    {
        $this->iconUrl=$data['icon'];
        $this->titre=$data['titre'];
        $this->description=$data['description'];
        $this->save();
        return 1;
    }
}
