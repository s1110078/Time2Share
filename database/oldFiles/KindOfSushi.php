<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfSushi extends Model
{
    protected $table = "kind_of_sushi";

    public function allSushi(){
        return $this->hasMany('\App\Models\Sushi', "kind", "kind");
    }
}
