<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class valuation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'document_id', 'verify', 'value', 'comment',
     ];

    public function documents()
    {
        return $this->hasMany(document::class);
    }

    public function properties()
    {
        return $this->hasMany(property::class);
    }
}
