<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
         'name',
     ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function property()
    // {
    //     return $this->belongsTo(property::class);
    // }

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
