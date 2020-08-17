<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'role', 'role_id', 'user_id'
    ];

    
    public function user()
    {
        return $this->hasOne('App\User', 'role_id');
    }
}
