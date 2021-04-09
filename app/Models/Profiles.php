<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = "users";

    public function allProfiles(){
        return $this->hasMany('\App\Models\Profiles', "name", "name");
    }

    public function allProducts(){
        return $this->hasMany('\App\Models\Product', 'user_id', 'id');
    }
}
