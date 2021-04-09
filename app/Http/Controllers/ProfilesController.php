<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(){
        return view('profiles.index',[
            'profiles' => \App\Models\Profiles::all(),
            'roles' => \App\Models\Roles::all(),
        ]);
    }

    public function show($id){
        return view('profiles.show', [
            'profiles' => \App\Models\Profiles::find($id),
            'product' => \App\Models\Product::all(),
        ]);
    }

    public function productList($id){
        return view('product.productlist', [
            'profiles' => \App\Models\Profiles::find($id),
            'product' => \App\Models\Product::all(),
        ]);
    }

    public function borrowedList($id){
        return view('product.borrowedlist', [
            'profiles' => \App\Models\Profiles::find($id),
            'product' => \App\Models\Product::all(),
        ]);
    }

    public function create($id){
        return view('profiles.create', [
            'profiles' => \App\Models\Profiles::find($id),
            'category_of_product' => \App\Models\CategoryOfProduct::all(),
            'images' => \App\Models\Image::all(),
        ]);
    }
}