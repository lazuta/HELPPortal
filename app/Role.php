<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'role', 'role_id', 'user_id'
    ];

    
    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'role_id');
    // }

    public function role()
    {
        return $this->hasOne('App\Role', 'id');
    }
}
