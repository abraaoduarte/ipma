<?php

namespace App\Models\Manage;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\Models\Manage\Role');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\Manage\User');
    }
}
