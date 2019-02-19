<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class document extends Model
{
    use SoftDeletes;

    protected $fillable = [
         'name'
     ];
     
    public function property()
    {
        return $this->belongsTo(property::class);
    }

}
