<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'role', 'role_id', 'user_id'
    ];

    public function userRole()
    {
        return $this->belongsTo('App\UserRole', 'role_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Users', 'user_id', 'id');
    }
}
