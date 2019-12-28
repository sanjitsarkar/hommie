<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = ['hostel_name','room_no','bed','booked'];
    public function hostel()
    {
       return $this->belongsTo('App\hostel');
    }
}
