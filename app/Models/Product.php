<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = ['borrowed'];
    public $timestamps = false;

    public function categoryModel(){
        return $this->belongsTo("\App\Models\CategoryOfProduct", "category", "category");
    }

    public function lenderModel(){
        return $this->belongsTo('\App\Models\Profiles','user_id','id');
    }

    public function reviewModel(){
        return $this->hasMany('\App\Models\Reviews', 'review_id', 'id');
    }

}