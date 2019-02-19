<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interest extends Model
{
    protected $fillable = [
        'user_id', 'property_id',
     ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
