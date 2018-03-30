<?php

namespace App\Models\Manage;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Models\Manage\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Manage\Permission');
    }
}
