<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = "reviews";

    public function allReviews(){
        return $this->hasMany('\App\Models\Product', 'review_id', 'id');
    }

}