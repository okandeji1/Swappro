<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
       'user_id', 'contact_id', 'address_id', 'fullname', 'sex',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
