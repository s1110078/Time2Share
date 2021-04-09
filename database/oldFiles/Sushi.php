<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sushi extends Model
{
    protected $table = 'sushi';
    public $timestamps = false;
    
    public function kindModel(){
        return $this->belongsTo("\App\Models\KindOfSushi", "kind", "kind");
    }
}
