<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class SushiController extends Controller
{
    public function index(){
        return view('sushi.index',[
            'sushi' => \App\Models\Sushi::all()
        ]);
    }

    public function show($id){
        return view('sushi.show', [
            'sushi' => \App\Models\Sushi::find($id),
        ]);

    }

    public function create(){
        return view('sushi.create', [
            'kind_of_sushi' => \App\Models\KindOfSushi::all(),
            'images' => \App\Models\Image::all(),
            ]);
    }

    public function store(Request $request, \App\Models\Sushi $sushi){
        $sushi->name = $request->input('name');
        $sushi->kind = $request->input('kind');
        $sushi->description = $request->input('description');
        $sushi->image = $request->input('image');
        
        try{
            $sushi->save();
            return redirect('/');
        } catch(Exception $e){
            return redirect('/sushi/create');
        }
    }
}
