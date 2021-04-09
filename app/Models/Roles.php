<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles";

    public function allRoles(){
        return $this->hasMany('\App\Models\Roles', "role", "role");
    }
}
