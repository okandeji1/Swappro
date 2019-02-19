<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Photo extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'property_id',  'image_link'
     ];

    public function property()
    {
        return $this->belongsTo(property::class);
    }
}
