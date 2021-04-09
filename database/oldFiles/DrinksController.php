<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DrinksController extends Controller
{
    public function index(){
        return view('drinks.index', ['drinks' => \App\Models\Drink::all()]);
   
    }
}
