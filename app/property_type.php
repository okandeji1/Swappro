<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property_type extends Model
{
    protected $fillable = [
        'category', 'sub_category',
     ];

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
