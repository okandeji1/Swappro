<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class verification extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'document_id', 'value', 'comment', 'verify',
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