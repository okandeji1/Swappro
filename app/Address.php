<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'state_id', 'country_id', 'address', 'city',
     ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function State()
    {
        return $this->hasMany(State::class);
    }

    public function Country()
    {
        return $this->hasMany(Country::class);
    }
}
