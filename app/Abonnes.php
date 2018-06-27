<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnes extends Model
{
    protected  $fillable=['email'];

    public function saveAbonne($data)
    {
        $this->email=$data['email'];
        $this->save();
        return 1;
    }
}
