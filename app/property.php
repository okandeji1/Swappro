<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class property extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'state_id', 'country_id', 'type_id', 'address', 'lga', 'property_for', 'status', 'description',
     ];

    public function documents()
    {
        return $this->hasMany(document::class);
    }

    public function properties()
    {
        return $this->hasMany(property::class);
    }

    public function interests()
    {
        return $this->hasMany(interest::class);
    }

    public function propertyType()
    {
        return $this->hasOne(property_type::class);
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function country()
    {
        return $this->hasOne(Country::class);
    }
}
