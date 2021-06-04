<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class ProductController extends Controller
{
    public function index(){
        return view('product.index',[
            'product' => \App\Models\Product::all(),
            'category_of_product' => \App\Models\CategoryOfProduct::all(),
            'profiles' => \App\Models\Profiles::all(),
        ]);
    }

    public function show($id){
        return view('product.show', [
            'product' => \App\Models\Product::find($id),
            'profiles' => \App\Models\Profiles::find(\App\Models\Product::find($id)->user_id),
            'borrowedProfile' => \App\Models\Profiles::all(),
        ]);
    }

    public function create(){
        return view('product.create', [
            'category_of_product' => \App\Models\CategoryOfProduct::all(),
            'images' => \App\Models\Image::all(),
        ]);
    }

    public function dashboard(){
        return view('dashboard', [
            'product' => \App\Models\Product::all(),
            'borrowedProfile' => \App\Models\Profiles::all(),
        ]);
    }

    public function delete($id){
        $product = \App\Models\Product::find($id);
        $product->delete(); 
        return redirect('/dashboard');
    }

    public function store(Request $request, \App\Models\Product $product){
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->user_id = $request->input('user_id');
        $product->borrowed = $request->input('null');

        try{
            $product->save();
            return redirect('/');
        } catch(Exception $e){
            return redirect('/product/create');
        }
    }

    public function edit($id){
        return view('product.edit', [
            'product' => \App\Models\Product::find($id),
            'profile' => \App\Models\Profiles::all(),
            'profiles' => \App\Models\Profiles::find(\App\Models\Product::find($id)->user_id),
            'borrowedProfile' => \App\Models\Profiles::all(),
            'reviews' => \App\Models\Reviews::all(),
            'review' => \App\Models\Reviews::find(\App\Models\Product::find($id)->review_id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, \App\Models\Product $product) {
        $request->validate([
            'borrowed' => 'required'
        ]);

        $product->borrowed = $request->input('borrowed');
        $product->update($request->all());


        try{
            return redirect('/profiles');
        } catch(Exception $e){
            return redirect('/product');
        }
    }


}