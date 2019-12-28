<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hostel extends Model
{
    //
    protected $fillable = ['name', 'desc', 'roomType', 'total', 'img', 'college', 'location'];
    public function rooms()
    {
       return $this->hasMany('App\Room');
    }
}

